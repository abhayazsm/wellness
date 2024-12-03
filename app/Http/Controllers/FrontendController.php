<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Slide;
use App\Models\Media;
use App\Models\Menu;
use App\Models\Service;
use App\Models\AppointmentForm;
use App\Models\ContactForm;
use App\Models\IntakeForm;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB; 

class FrontendController extends Controller
{
    //
    function index(){
        $slides = Slide::all();
        $mediaItems = Media::latest()->take(5)->get();
        $remainingCount = Media::count() - $mediaItems->count(); // Remaining items count
        $blogs = Blog::orderBy('created_at', 'desc')->get(); 
        $services = Service::latest()->take(3)->get();
        
        return view('frontend/home', compact('slides', 'mediaItems', 'blogs', 'services', 'remainingCount'));
    }
    
    function appointment(){
        
        $services = Service::all();
        return view('frontend/appointment', compact('services'));
    }

    function submitAppointment(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'service' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        AppointmentForm::create($request->all());

        $message = $request->name . ' Your appointment booked successfully on ' . 
        Carbon::createFromFormat('Y-m-d', $request->date)->format('F j, Y') . ' for ' . 
        $request->time;

        return redirect()->back()->with('success', $message);
    }
    

    function aboutUs(){
        
        return view('frontend/about_us');
    }
    
    function contactUs(){
        
        return view('frontend/contact_us');
    }

    public function submitContactUs(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Store the form data in the database
            ContactForm::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
            ]);

            // Send the contact form data via email (optional)
            // Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        } catch (\Exception $e) {
            // Handle any error (either storing in DB or sending email)
            return redirect()->back()->with('error', 'There was an issue submitting your form.');
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your request has been sent submitted.');
    }

    function benefits(){
        
        return view('frontend/benefits');
    }

    function successStories(){
        
        return view('frontend/success_stories');
    }

    function blogList($slug = null){

        $categories = Category::withCount('blogs')->get();
        $tags = Tag::all();
        $recentBlogs = Blog::latest()->take(5)->get();
        if ($slug) {
            $category = Category::where('slug', $slug)->firstOrFail();
            $blogs = Blog::where('category_id', $category->id)->paginate(2); // Filter blogs by category
        } else {
            $blogs = Blog::paginate(2); // Show all blogs if no category is selected
        }
    
        return view('frontend.blogs', compact('blogs', 'categories', 'recentBlogs', 'tags', 'slug'));
    }

    public function blogDetail($slug)
    {
        // Fetch the blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Fetch related posts or categories (if needed)
        $latestPosts = Blog::latest()->limit(3)->get();
        $categories = Category::withCount('blogs')->get();

        return view('frontend.blog_detail', compact('blog', 'latestPosts', 'categories'));
    }

    public function servicePages($slug = null)
    {
        $service =  Service::where('slug', $slug)->firstOrFail();
        $allService = Service::all();
        // dd($service);
        return view('frontend.services', compact('service', 'allService'));
    }

    public function mediaList($slug = null)
    {
        $mediaItems = Media::all();
        $remainingCount = Media::count();

        return view('frontend.gallery', compact('mediaItems', 'remainingCount'));
    }

    public function fetchMedia(Request $request)
    {
        $filter = $request->input('filter', 'all');
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 3);
    
        
    
        if ($filter !== 'all') {
            $mediaType = [$filter];
        }else{
            $mediaType = ['image', 'video'];
        }
    
        // Query to fetch the media items based on filter, limit, and offset
       
        $mediaItems = DB::table('media')->whereIn('type', $mediaType)->skip($offset)->take($limit)->get();
        // dd($mediaItems);
        // Query to get the total count without limit/offset for calculating remaining count
        $totalCount = DB::table('media')->whereIn('type', $mediaType)->count();
    
        // Calculate the remaining count
        $remainingCount = $totalCount - ($offset + $limit);
    
        return response()->json([
            'mediaItems' => $mediaItems,
            'remainingCount' => max(0, $remainingCount), // Ensure remaining count is never negative
        ]);
    }
    


    
    function intakeForm(){
        
        return view('frontend/intake');
    }

    public function submitIntakeForm(Request $request)
    {
       
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required|string|max:50',
            'address' => 'required|string',
            'city_state_zip' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'health_concerns' => 'nullable|string',
            'health_goals' => 'nullable|string',
            'condition_details' => 'nullable|string',
            'medication_list' => 'nullable|string',
            'allergy_details' => 'nullable|string',
            'surgery_details' => 'nullable|string',
            'exercise_routine' => 'nullable|string',
            'diet' => 'nullable|string',
            'smoke' => 'nullable|string',
            'alcohol' => 'nullable|string',
            'recreational_drugs' => 'nullable|string',
            'sleep_hours' => 'nullable|integer',
            'stress_level' => 'nullable|integer|min:1|max:10',
            'emotional_challenges' => 'nullable|in:Yes,No,Not Sure',
            'emotional_explanation' => 'nullable|string',
        ]);
        IntakeForm::create($validatedData);

        return redirect()->back()->with('success', 'Your request has been sent submitted.');
    }
}