
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
        <h1>Create Car Inventory Form</h1>
       
        <form action="{{ route('createCar', ['id' => $brand_id]) }}" method="POST">

        @csrf
<div class="form-group">
        <label for="categorySelect">Category:</label>
        <select name="category_id" id="categorySelect" class="form-control" onchange="handleCategoryChange(this)">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
    {{ $category->categoryName }}
</option>
            @endforeach
            <option value="new" {{ old('category_id') == 'new' ? 'selected' : '' }}>Create New Category</option>

        </select>
    </div>
    <div id="newCategoryField" style="{{ old('category_id') == 'new' ? '' : 'display: none;' }}">
    <div class="form-group">
        <label for="category">New Category:</label>
        <input type="text" id="category" name="category" value="{{ old('category') }}">
    </div>
    <div class="form-group">
    <label for="brochureLink">Brochure Link:</label>
    <input type="url" id="brochureLink" name="brochureLink" 
           value="{{ old('category_id') == 'new' ? old('brochureLink') : ($category->brochureLink ?? '') }}">
</div>

<div class="form-group">
    <label for="imageURL">Image URL:</label>
    <input type="url" id="imageURL" name="imageURL" 
           value="{{ old('category_id') == 'new' ? old('imageURL') : ($category->imageURL ?? '') }}">
</div>

</div>

    
           
           
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" value="{{ old('model')}}" required>
            </div>
            <div class="form-group">
                <label for="modelDesc">Model Description:</label>
                <input type="text" id="modelDesc" name="modelDesc" value="{{ old('modelDesc')}}" required>
</div>
            <div class="form-group">
                <input type="text" id="modelDesc2" name="modelDesc2" value="{{ old('modelDesc2')}}">
            </div>
            <div class="form-group">
                <input type="text" id="modelDesc3" name="modelDesc3" value="{{ old('modelDesc2')}}">
            </div>
            
       
            <button class="btn-danger" type="submit">Create Car Inventory</button>
        </form>
        
        
    </div>
    
@endsection

@section('scripts')
<script>
    
    function handleCategoryChange(select) {
        const newBrandFields = document.getElementById('newCategoryField');
        newBrandFields.style.display = select.value === 'new' ? 'block' : 'none';
    }

</script>
@endsection
