@extends('layouts.app')

@section('title', 'Update Car Inventory Form')

@section('content')

@if ($errors->any())
<br>
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
        <h1>Update Car Inventory Form</h1>
        
        <form action="{{ route('updateModel', ['id' => $category->brand_id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="category">Category:</label>
        <select id="category" name="category_id" class="form-control" required>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" 
                    {{ $category->id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->categoryName }}
                </option>
            @endforeach
        </select>

      

                <label for="model">Model:</label>
                <input type="text" id="model" name="model" value="{{$model->modelName}}"  required>
            </div>
            <div class="form-group">
                <label for="brochureLink">Brochure Link:</label>
                <input type="text" id="brochureLink" name="brochureLink" value="{{$category->brochureLink}}" required>
            </div>
            <div class="form-group">
                <label for="imageURL">Image URL:</label>
                <input type="text" id="imageURL" name="imageURL" value="{{$category->imageURL}}"  required>
            </div>
            <div class="form-group">
                <label for="modelDesc">Model Description:</label>
                <input type="text" id="modelDesc" name="modelDesc" value="{{$model->description}}"  required>
            </div>
            <div class="form-group">
            <input type="text" id="modelDesc2" name="modelDesc2" value="{{$model->description2}}" >
            </div>
            <div class="form-group">
            <input type="text" id="modelDesc3" name="modelDesc3" value="{{$model->description3}}" >
            </div>

            <input type="hidden" name="brand_id" value="{{ $category->brand_id }}">
            <input type="hidden" name="model_id" value="{{ $model->id }}">
            
            <button class="btn-danger" type="submit">Update Car Inventory</button>
            
        </form>
        @if(session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
@endif
        <div id="message"></div>
    </div>
@endsection