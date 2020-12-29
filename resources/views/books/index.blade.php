@extends('layouts.app')
@section('title', 'BookManager')
@section('content')
    <div class="row">
        <div class="col-lg-10">
            <h2>Laravel 8 CRUD Book</h2>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ route('books.create') }}" title="Create a book"> <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>BookName</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Price</th>
            <th>PubDate</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $book->bookname }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ date_format($book->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">

                        <a href="{{ route('books.show', $book->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('books.edit', $book->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection
