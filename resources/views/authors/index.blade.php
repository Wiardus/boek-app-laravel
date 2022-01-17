@extends('app')
@section('content')

<div class="authors">
    <h1>Authors</h1>

    <ul>
        @foreach ($authors as $author)
        <a href="">{{ $author ->name}}</a>
        <br />
        @endforeach
    </ul>
</div>
