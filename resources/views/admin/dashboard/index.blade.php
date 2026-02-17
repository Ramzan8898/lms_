@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Home']
]" />

<div class=" p-6 border-b border-white ">
    <h1 class="text-2xl font-bold mb-2 text-white">Dashboard</h1>
    <p class="text-white">Welcome to LMS Admin Panel</p>
</div>

@endsection