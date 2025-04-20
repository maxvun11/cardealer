<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\CarView;
use Illuminate\Http\Request;

class CarViewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_model_id' => 'required|exists:car_models,id',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'date' => 'required|date|after:today',
            'time' => 'required|date_format:H:i'
        ]);

        $car_view = CarView::create($validated);

        return redirect()->route('carDetailPage', ['id' => $validated['car_model_id']])->with('success', 'Car view booking created successfully!');
    }

    public function create($id)
    {
        return view('bookCarPage', ['car_model_id' => $id]);
    }
}
