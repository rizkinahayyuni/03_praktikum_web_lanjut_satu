@extends('layouts.app')
@section('title', 'Product')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>Category {{$name}}</p>
@endsection