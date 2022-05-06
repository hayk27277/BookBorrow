@extends('layouts.app')

@section('content')
    <div id="primary" class="content-area">
        <main id="main" class="site-main ">
            <div class="product">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                            <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted"
                                 data-pagi-classes="text-center u-slick__pagination my-4">
                                <div class="slick-list draggable">
                                    <div style="max-width: 566px; height: auto;">
                                        <img src="{{$book->cover_image}}" alt="Image"
                                             class="mx-auto img-fluid w-100">
                                    </div>

                                    <div class="space-top-2 px-4 px-xl-7pb-5">
                                        {{$book->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pl-0 summary entry-summary border-left">
                            <div class=" px-4 px-xl-7 pb-5">
                                <h1 class="product_title entry-title font-size-7 mb-3">{{$book->title}}</h1>
                                <div class="font-size-2 mb-4">
                                    <span class="ml-3">(3,714)</span>
                                    <span class="ml-3 font-weight-medium">By (authors)</span>
                                    <span class="ml-2 text-gray-600">{{$book->authors}}</span>
                                </div>
                                <div class="mb-2 font-size-2">
                                    <span class="font-weight-medium">Genre:</span>
                                    <span class="ml-2 text-gray-600">
                                        @foreach($book->genres as $genre)
                                            {{$genre->name}}
                                            @if(!$loop->last)
                                               ,
                                            @endif
                                        @endforeach
                                    </span>
                                </div>

                                <div class="row mx-gutters-2 mb-4">
                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio1">
                                                <span class="d-block">Date of publish</span>
                                                <span class="">{{$book->released_at}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio2">
                                                <span class="d-block">Pages</span>
                                                <span class="">{{$book->pages}}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio3">
                                                <span class="d-block">Language</span>
                                                <span class="">{{$book->language_code}}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio3">
                                                <span class="d-block">ISBN</span>
                                                <span class="">{{$book->isbn}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio3">
                                                <span class="d-block">Total books</span>
                                                <span class="">{{$book->in_stock}}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="">
                                            <label class="border-bottom d-block checkbox-outline__label py-3 px-1 mb-0"
                                                   for="typeOfListingRadio3">
                                                <span class="d-block">Available books</span>
                                                <span class="">
                                                    {{$availableBooksCount}}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="add-to-cart" value="7145"
                                    class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">
                                Borrow a book
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
