<?php

namespace App\Http\Controllers\Admin;
use App\Models\AppointmentForm;
use App\Models\ContactForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        // Get search and filter inputs
        $search = $request->input('search');
        $date = $request->input('date');
        
        // Query for contacts with optional filters
        $contacts = ContactForm::query();

        if ($search) {
            $contacts->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
        }

        if ($date) {
            $contacts->whereDate('created_at', $date);
        }

        // Paginate results
        $contacts = $contacts->paginate(5); // 10 items per page

        // Return view with data
        return view('admin.contacts.index', compact('contacts'));
    }


}
