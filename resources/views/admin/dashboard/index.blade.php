@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Home']
]" />

<div class="bg-gray-800 p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-2 text-white">Dashboard</h1>
    <p class="text-white">Welcome to LMS Admin Panel</p>
</div>

@endsection