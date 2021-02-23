@extends('layouts.app')
@section('title', 'About Us')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>Ini halaman {{$name}}</p>
@endsection