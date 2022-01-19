@extends('app')
@section('content')

<form action="" method="POST">
    @csrf
    <input type="text" name="name" required />
   
    <button>Add Book</button>
</form>

@endsection