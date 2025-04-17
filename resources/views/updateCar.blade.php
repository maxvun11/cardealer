@extends('layouts.app')

@section('title', 'Update Car')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Update Car</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection