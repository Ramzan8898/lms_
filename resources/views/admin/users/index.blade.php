@extends('layouts.dashboard')

@section('content')

<x-dashboard.breadcrumbs :items="[
    ['label' => 'Users']
]" />

<div>
    <h1 class="text-2xl font-bold mb-2">Users</h1>
    <p class="text-gray-600">Welcome to LMS Admin Panel</p>
</div>

@endsection