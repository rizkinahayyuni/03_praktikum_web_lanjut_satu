@extends('layouts.app')
@section('title', 'Program')
@section('sidebar')
@parent
<p>Sidebar halaman {{$name}}.</p>
@endsection
@section('content')
 <p>Program {{$name}}</p>
@endsection