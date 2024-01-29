@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('books.store') }}" class="form" method="post">
            @csrf
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="pages" class="form-label">Pages</label>
            <input type="number" name="pages" class="form-control">

            @error('pages')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            <button type="submit" class="btn btn-primary mt-4">Create</button>
        </form>
    </div>
@endsection
