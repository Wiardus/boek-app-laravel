@extends('app')
@section('content')

<ul>
    @foreach ($books as $book)
    <a href="/books/{book->id}">{{ $book ->title}}</a>
    @endforeach
</ul>