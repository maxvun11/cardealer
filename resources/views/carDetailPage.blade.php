@extends('layouts.app')

@section('title', 'Car Detail Page')

@section('content')

<div class="container my-5">
    <!-- Big Banner Section -->
    <div class="banner-container mb-5">
        <img src="{{ $categories->imageURL }}" class="img-fluid w-100" alt="{{ $categories->categoryName }} Banner">
        <div class="banner-overlay d-flex justify-content-center align-items-center">
            <button style="width: fit-content; padding: 10px 20px; font-size: 24px; border-radius: 15px;" onclick="window.location.href='{{ $categories->brochureLink }}'">
                Download Brochure
            </button>
        </div>
    </div>
    <h1 class="text-center" style="font-weight: bold; font-size:56px">{{ $categories->categoriesName }}</h1>

    <!-- Different Models Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Different Models</h3>
            <table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Model</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories->carModels as $model)
            <tr>
                <!-- rowspan to merge the modelName cell -->
                <td rowspan="3" class="align-middle">{{ $model->modelName }}</td>

                <!-- First description row -->
                <td>{{ $model->description }}</td>

                <!-- rowspan to merge the button cell -->
                <td rowspan="3" class="text-center align-middle">
                    <a href="#" class="btn btn-primary"
                        style="background-color: #232323; 
                               border-color: #232323; 
                               color:white; 
                               border-radius: 5px; 
                               font-size: 14px;
                               font-weight:bold;
                               transition: all 0.3s ease-in-out;
                               backface-visibility: hidden;
                               perspective: 1000px;"
                        onmouseover="this.style.transform='scale(1.05)';"
                        onmouseout="this.style.transform='scale(1)';">
                        Book for Car View
                    </a>
                </td>
            </tr>

         
            <tr>
                <td>{{ $model->description2 }}</td>
            </tr>

          
            <tr>
                <td>{{ $model->description3 }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

        </div>
    </div>
</div>

<style>
    .banner-container {
        position: relative;
    }

    .banner-container img {
        max-height: 400px;
        object-fit: cover;
    }

    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
    }

    .table img {
        max-width: 100px;
        height: auto;
    }
</style>

@endsection