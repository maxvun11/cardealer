@extends('layouts.app')

@section('content')

@if (session('success'))
<br>
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
    </div>
@endif
    <div class="container">
       
    <h1 style="margin-top:50px; text-align:center;">Update Car Inventory - Brand</h1>
   
        <table class="table table-bordered table-striped" style="margin: 0 auto;" >
        <colgroup>
    <col style="width: 50%;">
    <col style="width: 25%;">
    <col style="width: 25%;">
</colgroup>
        <thead>
                <tr>
                    <th class="text-center align-middle">Brand</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody >
    @foreach($brands as $brand)
                <tr>
                    <td class="text-center align-middle"><b>{{ $brand->brandName }}</b></td>
                    
                    <td class="text-center align-middle" >
                    <button onclick ="window.location.href='{{  route('updateCategory', ['id' => $brand->id])}}'" style="width:fit-content">
                        Update
</button> 

                    </td>
                    <td class="text-center align-middle">
                    <form action="{{ route('deleteBrand', $brand->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this brand? This deletion will remove all details of the related categories and models')" style="width:fit-content">
                    Delete
                    </button>
                    </form>
                    </td>
                    </tr>
     @endforeach
            </tbody>
        </table>

        {{ $brands->links('pagination::bootstrap-5') }}

        <br>


<div class="d-flex justify-content-center">
    <a href="{{ route('createBrandForm') }}" class="btn btn-success">Create New Brand</a>
</div>


</div>
<br>
@endsection
