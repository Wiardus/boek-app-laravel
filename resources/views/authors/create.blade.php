@extends('app')
@section('content')

<form action="" method="POST">
    @csrf
    <input type="text" name="name" required />
    <button>Add Author</button>
</form>

@endsection