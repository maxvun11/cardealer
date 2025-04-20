<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\CarView;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'date' => 'required|date|after:today',
            'time' => 'required|date_format:H:i',
            'description' => 'required|string|max:500',
        ]);

        $appointment = Appointment::create($validated);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function index()
    {
        $appointments = Appointment::orderBy('date', 'desc')->get();
        $carViews = CarView::with('carModel')->orderBy('date', 'desc')->get();
        
        return view('viewAppointmentPage', compact('appointments', 'carViews'));
    }
}
