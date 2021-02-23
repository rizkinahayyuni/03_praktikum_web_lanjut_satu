@extends('layouts.app')
@section('title', 'News')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>News {{$name}}</p>
@endsection