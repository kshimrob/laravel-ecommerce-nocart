@extends('layout')

@section('title', $product->name)

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{ route('shop.index') }}">Shop</a></span>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ $product->name }}</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src="{{ productImage($product->image) }}" alt="product" class="active" id="currentImage">
            </div>
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{{ $product->details }}</div>
            <div>{!! $stockLevel !!}</div>
            <div class="product-section-price">{{ $product->presentPrice() }}</div>

            <p>
                {!! $product->description !!}
            </p>
            <form action="{{ route('checkout.show', $product->slug) }}" method="get">
                <select class="quantity" name="quantity" id="quantity" data-id="{{ $product->rowId }}" data-productQuantity="{{ $product->quantity }}">
                    @for ($i = 1; $i < $product->quantity + 1 ; $i++)
                        <option {{ 1 == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                <p>&nbsp;</p>
                @if ($product->quantity > 0)
                    {{-- <a href="{{ route('checkout.show', $product->slug) }}">Purchase</a> --}}
                    <button type="submit" class="btn btn-primary">Purchase</button>
                @endif
            </form>

        </div>
    </div> <!-- end product-section -->
    <div class="product-cause-section">
        <img src="/{{ $cause->image }}">
        <h2>{{ $cause->name }}</h2>
        <div class="description">{!! $cause->description !!}</div>
    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){

            // const currentImage = document.querySelector('#currentImage');
            // const images = document.querySelectorAll('.product-section-thumbnail');

            // images.forEach((element) => element.addEventListener('click', thumbnailClick));

            // function thumbnailClick(e) {
            //     currentImage.classList.remove('active');

            //     currentImage.addEventListener('transitionend', () => {
            //         currentImage.src = this.querySelector('img').src;
            //         currentImage.classList.add('active');
            //     })

            //     images.forEach((element) => element.classList.remove('selected'));
            //     this.classList.add('selected');
            // }

        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>

@endsection
