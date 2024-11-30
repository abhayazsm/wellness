<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AppointmentForm;
use App\Models\ContactForm;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::count();

        // $widget = [
        //     'users' => $users,
        //     //...
        // ];

        // return view('home', compact('widget'));
        // Fetch data for appointments
        $appointmentsMonthly = AppointmentForm::whereMonth('created_at', now()->month)->count();
        $appointmentsToday = AppointmentForm::whereDate('created_at', today())->count();
        $appointmentsDone = AppointmentForm::count();
        $totalAppointments = AppointmentForm::count();

        // Calculate percentage of completed appointments
        $appointmentsPercentage = $totalAppointments > 0 ? ($appointmentsDone / $totalAppointments) * 100 : 0;

        // Fetch the number of contacts (users)
        $usersCount = ContactForm::count();

        // Pass the data to the view
        return view('home', [
            'appointmentsMonthly' => $appointmentsMonthly,
            'appointmentsToday' => $appointmentsToday,
            'appointmentsDone' => $appointmentsDone,
            'appointmentsPercentage' => $appointmentsPercentage,
            'usersCount' => $usersCount,
        ]);
    }
}
