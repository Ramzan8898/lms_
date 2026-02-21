@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-white">Add User</h1>

            <x-dashboard.breadcrumbs :items="[['label' => 'Users', 'url' => route('admin.users')], ['label' => 'Add User']]" />
        </div>
    </div>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

        <div class="space-y-4 p-6 ">
            <!-- Name -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="John Doe"
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="johndoe@gmail.com"
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password2" required
                        class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
                    <button type="button" onclick="togglePasswordFA('password2', this)"
                        class="absolute right-4 top-1/2 -translate-y-1/2 hover:opacity-80 transition-opacity">
                        <i
                            class="fas fa-eye text-lg bg-linear-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent"></i>
                    </button>
                </div>
            </div>

            <!-- Confirm Password Field with Font Awesome -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Confirm Password</label>
                <div class="relative">
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
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
                <label class="block text-sm text-gray-400 mb-2">Assign Role</label>
                <select name="role" required
                    class="w-full px-4 py-3 bg-white/5 border border-yellow-500/20 rounded-md text-white
                                  focus:outline-none focus:border-yellow-500/40 transition-all">
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
