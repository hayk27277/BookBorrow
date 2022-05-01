@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('components.sidebar')
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-2">
                        <p>Books - {{$books->total()}}</p>
                    </div>
                    <div class="col-2">
                        <p>
                            Users - {{$userCount}}
                        </p>
                    </div>
                    <div class="col-2">
                        Active Rentals - {{$activeBookRentalsCount}}
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                         aria-labelledby="pills-one-example1-tab">

                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-3 border-top border-left mb-6">
                            @foreach($books as $book)
                                @include('components.search-book-card',compact('book'))
                            @endforeach
                        </ul>

                    </div>
                </div>

                {{$books->links()}}
            </div>
        </div>
    </div>
@endsection
