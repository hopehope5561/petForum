@extends('admin.layout')

@section('content')
    <h2>Dashboard</h2>
    <p>Hoş geldiniz, {{ auth()->user()->name ?? 'Admin' }}!</p>
    <p>Sol menüden işlemleri seçebilirsiniz.</p>
@endsection
