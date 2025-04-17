@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="margin-top:50px; text-align:center;">Car Viewing Appointment</h1>
<div  class="row justify-content-center">
    <table class="table table-bordered table-striped text-center" >
        <thead>
            <tr>
                <th>Model</th>
                <th>Booked by</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th >Status</th>
            </tr>
        </thead>
        <tbody>
            foreach($appointments as $appointment)
            <tr>
<td>{{$modelName}}</td>
<td>{{$appointment-> user_id}}</td>
<td>{{$appointment-> date}}</td>
<td>{{$appointment-> time}}</td>
<td>{{$appointment-> status}}</td>
            </tr>
        </tbody>
    </table>
</tbody>

    </table>
</div>
    <!-- Laravel pagination links -->
    <div class="d-flex justify-content-center">
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

    <br>
</div>
<br>
@endsection
