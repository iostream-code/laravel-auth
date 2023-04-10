@extends('master')

@section('konten')
    <h4>Selamat Datang <b>{{ Auth::user()->name }}</b>, Anda berhasil Login.</h4>
@endsection
