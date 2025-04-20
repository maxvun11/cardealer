@extends('layouts.app')

@section('title', 'Book Car Form')

@section('content')
    <div class="wedo py-5">
        <div class="container mb-0 mt-3" id="booking-container">
            <h1>Book Your Car View Appointment</h1>
            <form id="carview-form" method="POST" action="{{ route('carviews.store') }}">
                @csrf
                <input type="hidden" name="car_model_id" value="{{ $car_model_id }}">
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
                <button type="submit">Book Car View</button>
            </form>
            <div id="message">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection