@extends('layouts.app')
@section('title', 'Home')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>Selamat datang di halaman {{$name}}</p>
@endsection