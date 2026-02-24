@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-col">
        <h1 class="text-2xl font-semibold text-white uppercase ">Create User</h1>

        <x-dashboard.breadcrumbs :items="[['label' => 'Users', 'url' => route('admin.users')], ['label' => 'Add User']]" />
    </div>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

        <div class="space-y-4 bg-linear-to-b from-[#1e1e1e] to-[#141414] border border-yellow-500/20 rounded-2xl shadow-xl p-6">
            <div class="flex flex-row gap-3">
                <!-- Name -->
                <div class="w-full">
                    <label class="label">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="John Doe"
                        class="input">
                </div>

                <!-- Email -->
                <div class="w-full">
                    <label class="label">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        placeholder="johndoe@gmail.com" class="input">
                </div>
            </div>

            <div class="flex flex-row gap-3">
                <!-- Password -->
                <div class="w-full">
                    <label class="label">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password2" required class="input">
                        <button type="button" onclick="togglePasswordFA('password2', this)"
                            class="absolute right-4 top-1/2 -translate-y-1/2 hover:opacity-80 transition-opacity">
                            <i
                                class="fas fa-eye text-lg bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password Field with Font Awesome -->
                <div class="w-full">
                    <label class="label">Confirm Password</label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" required class="input">
                    </div>
                </div>
            </div>

            <script>
                function togglePasswordFA(inputId, button) {
                    const input = document.getElementById(inputId);
                    const icon = button.querySelector('i');

                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                }
            </script>

            <div>
                <label class="label">Assign Role</label>
                <select name="role" required class="input">
                    <option value="" disabled selected>Select Role</option>
                    @foreach ($roles as $role)
                        <option class="bg-gray-900" value="{{ $role->name }}">
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end items-center gap-5">
                <button type="submit"
                    class="py-4 px-8 cursor-pointer bg-linear-to-r from-yellow-500 to-orange-500 text-black font-semibold
                               rounded-xl transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-yellow-500/30">
                    Create Account →
                </button>
                <button type="reset"
                    class="px-8 py-3 border border-yellow-500 text-yellow-600 rounded-lg hover:bg-yellow-600 hover:text-white transition cursor-pointer">
                    Cancel
                </button>
            </div>

        </div>

    </form>
@endsection
