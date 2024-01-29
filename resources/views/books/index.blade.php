@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('books.create')}}" class="btn btn-primary mb-4">Add Book</a>
        <table class="table table-stripped table-hover table-responsive">
            <tr>
                <th>Title</th>
                <th>Pages</th>
            </tr>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
