@extends('layouts.master')

@section('title')
    Halaman Home
@endsection

@section('content')
    <h1>SELAMAT DATANG, {{ $firstName }} {{ $lastName }}!</h1>
    <h3>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h3>
@endsection