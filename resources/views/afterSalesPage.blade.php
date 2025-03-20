@extends('layouts.app')

@section('title', 'After Sales Appointment Form')

@section('content')
    <div class="container" id="booking-container">
        <h1>Book Your Car Service Appointment</h1>
        <form id="appointment-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
            <button type="submit">Book Appointment</button>
        </form>
        <div id="message"></div>
    </div>
@endsection
