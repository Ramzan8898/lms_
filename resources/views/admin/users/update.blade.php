@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-col">
        <h1 class="text-2xl font-semibold text-white uppercase">Edit User</h1>

        <x-dashboard.breadcrumbs :items="[['label' => 'Users', 'url' => route('admin.users')], ['label' => 'Edit']]" />
    </div>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf

        <div class="space-y-4 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
            <!-- Name -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Full Name</label>
                <input type="text" name="name" value="{{ $user->name }}" required placeholder="John Doe"
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Email Address</label>
                <input type="email" name="email" value="{{ $user->email }}" required placeholder="johndoe@gmail.com"
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
            </div>


            <div>
                <label class="block text-sm text-gray-400 mb-2">Assign Role</label>
                <select name="role"
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" class="bg-gray-900"
                            {{ $user->roles->first()?->id == $role->id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end items-center gap-5">
                <button type="submit"
                    class="py-4 px-8 cursor-pointer bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                    Update Account →
                </button>
                <button type="reset"
                    class="px-8 py-3 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-600 hover:text-white transition cursor-pointer">
                    Cancel
                </button>
            </div>

        </div>

    </form>
@endsection
