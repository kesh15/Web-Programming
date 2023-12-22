<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $book->title }}</h2>
    <p>{{ $book->description }}</p>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
