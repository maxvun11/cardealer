@extends('layouts.app')

@section('content')


@if (session('success'))
<br>
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
        
    </div>
@endif
<div class="container">
    <h1 style="margin-top:50px; text-align:center;">Update Car Inventory - {{$brand->brandName}}</h1>
<div  class="row justify-content-center">
    <table class="table table-bordered table-striped text-center" >
        <thead>
            <tr>
                <th>Category</th>
                <th>Model</th>
                <th>Brochure Link</th>
                <th>Image URL</th>
                <th colspan="3">Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($categories as $category)
        @php $modelCount = $category->carModels->count(); @endphp

        @if($modelCount > 0)
            @foreach($category->carModels as $index => $model)
                <tr>
                    
                    @if($index === 0)
                        <td rowspan="{{ $modelCount }}" style="vertical-align:middle">{{ $category->categoryName ?? '-' }}</td>
                    @endif

                    <td>{{ $model->modelName ?? '-' }}</td>

                    <td>
                        @if(!empty($category->brochureLink))
                            <a href="{{ $category->brochureLink }}" target="_blank">{{ $category->brochureLink }}</a>
                        @else
                            -
                        @endif
                    </td>

                    <td>
                        @if(!empty($category->imageURL))
                            <a href="{{ $category->imageURL }}" target="_blank">{{ $category->imageURL }}</a>
                        @else
                            -
                        @endif
                    </td>

                    <td>{{ $model->description ?? '-' }}</td>
                    <td>{{ $model->description2 ?? '-' }}</td>
                    <td>{{ $model->description3 ?? '-' }}</td>

                    <td>
                        <button onclick="window.location.href='{{ route('updateCarForm', $model->id) }}'">Edit</button> 
</td>
<td>
                        <form action="{{ route('deleteCar', $model->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure you want to delete this model?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>{{ $category->categoryName ?? '-' }}</td>
                <td colspan="8">No models available for this category</td>
            </tr>
        @endif
    @endforeach
</tbody>

    </table>
</div>
    <!-- Laravel pagination links -->
    <div class="d-flex justify-content-center">
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

    <br>

    <!-- Option to Add New Car -->
    <div class="d-flex justify-content-center">
    <a href="{{ route('createCarForm', ['id' => $brand_id]) }}" class="btn btn-success">Create New Car</a>

    </div>
</div>
<br>
@endsection
