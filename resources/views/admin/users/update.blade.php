@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Edit User</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Users', 'url' => route('admin.users')],
            ['label' => 'Edit']
        ]" />
    </div>
</div>

<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="space-y-4 p-6 ">

        <div>
            <label class="label">Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="input">
        </div>

        <div>
            <label class="label">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="input">
        </div>


        <div>
            <label class="label">Roles</label>
            <select name="roles[]"  class="input">
                @foreach($roles as $role)
                <option value="{{ $role->name }}"
                    {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
                @endforeach
            </select>
        </div>

        <button class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
            Update User
        </button>

    </div>

</form>

@endsection