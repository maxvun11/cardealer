@extends('layouts.app')

@section('title', 'Car List')

@section('content')

@can('isAdmin')
<div class="wedo" style="display: flex; justify-content: flex-end;padding-right:50px; padding-top:50px; ">
    <button style="width:fit-content;"onclick="window.location.href='{{ route('updateCar') }}'">Update Car Inventory</button>
    </div>
@endcan
    <!-- Brand Buttons -->
    <div class="wedo" >
</div>
    <div class="brand-section text-center" style="padding-top:0;" >
        @foreach($brands as $brand)
            <button class="brand-btn" onclick="scrollToBrand('{{ $brand->brandName }}')">
                {{ strtoupper($brand->brandName) }}
            </button>
        @endforeach
    </div>
    

   

    <!-- Car Sections -->
    @foreach($brands as $brand)
        <div class="wedo" style="padding-top:0;">
            <div id="{{ $brand->brandName }}" class="brand-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>{{ strtoupper($brand->brandName) }}</h2>
                                <p>{{ $brand->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                @foreach($car_categories->where('brand_id', $brand->id) as $category)
                                    <div class="col-md-6 margin_bottom">
                                        <a href="{{ route('carDetailPage', $category->id) }}">
                                            <div class="work parallax">
                                            <div class="parallax-image" style="background-image: url('{{ $category->imageURL }}');">
                                                    <div class="work_text">
                                                        <h3>{{ strtoupper($brand->brandName) }}<br>
                                                        <span class="blu">{{ $category->categoryName }}</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function scrollToBrand(brandId) {
            const element = document.getElementById(brandId);
            const yOffset = -80; // Adjust this value to position the heading properly
            const y = element.getBoundingClientRect().top + window.scrollY + yOffset;
            window.scrollTo({ top: y, behavior: 'smooth' });
        }
    </script>
@endsection