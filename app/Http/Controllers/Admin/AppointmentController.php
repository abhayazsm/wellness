<?php

namespace App\Http\Controllers\Admin;
use App\Models\AppointmentForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        // Get search and filter inputs
        $search = $request->input('search');
        $date = $request->input('date');
        
        // Query for appointments with optional filters
        $appointments = AppointmentForm::query();

        if ($search) {
            $appointments->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
        }

        if ($date) {
            $appointments->whereDate('date', $date);
        }

        // Paginate results
        $appointments = $appointments->orderBy('created_at', 'desc')->paginate(10); // 10 items per page

        // Return view with data
        return view('admin.appointments.index', compact('appointments'));
    }


}
