@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <a href="{{route('books.create')}}">
                                Add new book
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Title </th>
                                    <th>Authors</th>
                                    <th scope="col" class="sort d-flex justify-content-end" data-sort="name">
                                        Delete/Update
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach(\App\Models\Book::all() as $book)
                                    <tr>
                                        <td class="budget">
                                            {{ $book->title }}
                                        </td>
                                        <td class="budget">
                                            {{ $book->authors }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="form-group">
                                                    <form action="{{ route('books.destroy' , $book->id ) }}" method="POST" class="float-right mr-2 ">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="submit" class="btn-sm btn_sm btn-danger text-white "  onclick="return confirm('Are you sure to delete?')" value="Delete">
                                                    </form>
                                                    <a class="btn-sm btn_sm float-right text-white mr-2" style="background-color: #0b5ed7;min-height: 33px"
                                                       href="{{ route('books.edit', $book->id) }}">Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
