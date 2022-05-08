@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Create Book</h3>

        @if($errors->any())
            {!!  implode('', $errors->all('<div class="alert alert-danger">:message</div>'))  !!}
        @endif

        <form action="{{route('books.update',$book)}}" enctype="multipart/form-data" method="post" class="row">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $book->title)}}"
                       placeholder="Title:">
            </div>

            <div class="form-group">
                <label for="authors">Authors:</label>
                <input type="text" class="form-control" id="authors" name="authors"
                       value="{{old('authors', $book->authors)}}"
                       placeholder="Authors:">
            </div>

            <div class="form-group">
                <label for="released_at">Released At:</label>
                <input class="datepicker form-control" name="released_at" id="released_at"
                       value="{{old('released_at',$book->released_at)}}" autocomplete="off"
                       data-date-format="mm/dd/yyyy">
            </div>

            <div class="form-group">
                <label for="pages">Pages:</label>
                <input class="form-control" name="pages" id="pages" type="number"
                       value="{{old('pages',$book->pages) }}">
            </div>

            <div class="form-group">
                <label for="isbn">isbn:</label>
                <input class="form-control" name="isbn" id="isbn" type="text" value="{{old('isbn',$book->isbn) }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"
                          rows="3">{{ old('description',$book->description) }}</textarea>
            </div>

            <div class="form-group d-flex flex-wrap">
                <div class="w-100">
                    <p>Genres:</p>
                </div>
                @foreach(\App\Models\Genre::all() as $genre)
                    <div class="w-15">
                        <label for="genre_{{$genre->id}}">{{$genre->name}}</label>
                        {{--                        @if(old("genre_".$genre->id))"selected"@endif--}}
                        <input type="checkbox" value="{{$genre->id}}" id="genre_{{$genre->id}}" name="genres[]">
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="in_stock">In Stock:</label>
                <input class="form-control" type="number" name="in_stock" id="in_stock" value="0">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>

@endsection
