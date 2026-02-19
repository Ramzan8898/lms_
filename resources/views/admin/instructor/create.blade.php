@extends('layouts.dashboard')

@section('content')
@push('styles')
<style>

</style>
@endpush

{{-- Header + Breadcrumbs --}}
<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold text-white">Create Instructor</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Instructors', 'url' => route('admin.instructors')],
            ['label' => 'Create']
        ]" />
    </div>
</div>

<div class="">

    <form action="{{ route('admin.instructor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- LEFT SIDE --}}
            <div class="space-y-5  p-6 ">

                {{-- Basic Info --}}
                <div>
                    <label class="label">Full Name</label>
                    <input type="text" name="name" class="input">
                </div>

                <div>
                    <label class="label">Email Address</label>
                    <input type="email" name="email" class="input">
                </div>

                <div>
                    <label class="label">Password</label>
                    <input type="password" name="password" class="input">
                </div>

                <div>
                    <label class="label">Phone Number</label>
                    <input type="text" name="phone" class="input">
                </div>

                <div>
                    <label class="label">Expertise / Subject</label>
                    <input type="text" name="expertise" placeholder="Web Dev, AI, Math..." class="input">
                </div>

                <div>
                    <label class="label">Experience (Years)</label>
                    <input type="number" name="experience" class="input">
                </div>

                <div>
                    <label class="label">Qualification</label>
                    <input type="text" name="qualification" class="input">
                </div>

                <div>
                    <label class="label">Status</label>
                    <select name="status" class="input">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

            </div>

            {{-- RIGHT SIDE --}}
            <div class="space-y-5  p-6 ">

                <div>
                    <label class="label">Avatar</label>
                    <input type="file" name="avatar" class="input">
                </div>

                <div>
                    <label class="label">Short Bio</label>
                    <textarea name="bio" rows="3" class="input"></textarea>
                </div>

                <div>
                    <label class="label">Detailed Description</label>
                    <textarea name="description" rows="5" class="input"></textarea>
                </div>

                <div>
                    <label class="label">Facebook Profile</label>
                    <input type="text" name="facebook" class="input">
                </div>

                <div>
                    <label class="label">LinkedIn Profile</label>
                    <input type="text" name="linkedin" class="input">
                </div>

                <div>
                    <label class="label">Payout Email (for earnings)</label>
                    <input type="email" name="payout_email" class="input">
                </div>

            </div>

        </div>

        <div class="mt-6">
            <button type="submit"
                class="px-6 py-3 border border-blue-600 cursor-pointer text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                Create Instructor
            </button>
        </div>

    </form>

</div>

@endsection