<?php

namespace App\Http\Controllers\Admin;
use App\Models\IntakeForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    public function index(Request $request)
    {
        // Get search and filter inputs
        $search = $request->input('search');
        $date = $request->input('date');
        
        // Query for intake with optional filters
        $intake = IntakeForm::query();

        if ($search) {
            $intake->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%")
                ->orWhere('city_state_zip', 'like', "%{$search}%");
        }

        if ($date) {
            $intake->whereDate('date', $date);
        }

        // Paginate results
        $intake = $intake->paginate(10); // 10 items per page

        // Return view with data
        return view('admin.intake.index', compact('intake'));
    }

    public function showFormData($id)
    {
        // Fetch the data based on the form submission ID
        $intakeData = IntakeForm::find($id); 
        // dd($intakeData);
        // Pass the data to the view
        return view('admin.intake.show', compact('intakeData'));
    }


}
