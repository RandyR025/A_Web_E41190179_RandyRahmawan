@extends('layouts.app')

@section('content')
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            <h1 class="display-4"Home Page></h1>
            <p>This is the home page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
        </ul>
    </div>
@endsection