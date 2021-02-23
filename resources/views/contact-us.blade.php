@extends('layouts.app')
@section('title', 'Contact Us')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>Ini halaman {{$name}}</p>
@endsection