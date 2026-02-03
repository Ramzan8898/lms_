@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Home']
]" />

<div class="bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-2">Dashboard</h1>
    <p class="text-gray-600">Welcome to LMS Admin Panel</p>
</div>

@endsection