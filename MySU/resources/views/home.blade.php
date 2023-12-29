@extends('layouts.app')

@section('content')
<div class="container text-center pt-4">
    Selamat Datang, {{ auth()->user()->name }}
    <div class="div">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-danger mt-5" value="Logout">
        </form>
    </div>
</div>
@endsection