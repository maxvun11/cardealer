@extends('layouts.app')

@section('title', 'View Appointments')

@section('content')
    <div class="wedo py-5">
        <div class="container">
            <h1 class="mb-4">Maintenance Appointment List</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr style="font-size: small;">
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $index => $appointment)
                            <tr style="font-size: small;">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ Str::limit($appointment->description, 50) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Car View Appointments -->
            <h1 class="mb-4 mt-5">Car Viewing Appointments</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr style="font-size: small;">
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Car Model</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carViews as $index => $carView)
                            <tr style="font-size: small;">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $carView->name }}</td>
                                <td>{{ $carView->email }}</td>
                                <td>{{ $carView->date }}</td>
                                <td>{{ $carView->time }}</td>
                                <td>{{ $carView->carModel->modelName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection