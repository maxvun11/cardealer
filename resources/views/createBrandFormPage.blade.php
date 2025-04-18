
@extends('layouts.app')

@section('title', 'Create Car Inventory Form')

@section('content')

@if ($errors->any())
<br>
    <div class="alert alert-danger" style="padding-top:20px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="container" id="booking-container">
       
        <h1>Create Car Inventory Form - Create New Brand</h1>
       
        <form action="{{ route('createBrand') }}" method="POST">

        @csrf
    <div class="form-group">
                <label for="brand">New Brand:</label>
                <input type="text" id="brand" name="brand" required>
            </div>

            <div class="form-group">
                <label for="brand_desc">New Brand Description:</label>
                <input type="text" id="brand_desc" name="brand_desc" required>
            </div>

            <button class="btn-danger" type="submit">Create Car Inventory</button>
</div>
         
        </form>
      
        
    </div>

@endsection


