<!—Disimpan di resources/views/child.blade.php -->
@extends('layouts.app')
@section('title', 'Profil')
@section('sidebar')
@parent
<p>Sidebar halaman Profil.</p>
@endsection
@section('content')
 <p>Ini adalah bagian konten. NIM - {{$name}}</p>
@endsection