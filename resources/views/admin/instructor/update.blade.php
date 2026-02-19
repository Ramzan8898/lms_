@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-white">Edit Instructor</h1>
        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Instructors', 'url' => route('admin.instructors')],
            ['label' => 'Edit']
        ]" />
    </div>
</div>

@if(session('success'))
<div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('admin.instructor.update', $instructor->id) }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <input type="hidden" name="id" value="{{ $instructor->id }}">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        {{-- LEFT SIDE --}}
        <div class="space-y-5  p-6 ">

            <div>
                <label class="label">Full Name</label>
                <input type="text" name="name" value="{{ $instructor->user->name }}" class="input">
            </div>

            <div>
                <label class="label">Email Address</label>
                <input type="email" name="email" value="{{ $instructor->user->email }}" class="input">
            </div>

            <div>
                <label class="label">Phone Number</label>
                <input type="text" name="phone" value="{{ $instructor->phone }}" class="input">
            </div>

            <div>
                <label class="label">Expertise</label>
                <input type="text" name="expertise" value="{{ $instructor->expertise }}" class="input">
            </div>

            <div>
                <label class="label">Experience (Years)</label>
                <input type="number" name="experience" value="{{ $instructor->experience }}" class="input">
            </div>

            <div>
                <label class="label">Qualification</label>
                <input type="text" name="qualification" value="{{ $instructor->qualification }}" class="input">
            </div>

            <div>
                <label class="label">Status</label>
                <select name="status" class="input">
                    <option value="active" {{ $instructor->status=='active'?'selected':'' }}>Active</option>
                    <option value="inactive" {{ $instructor->status=='inactive'?'selected':'' }}>Inactive</option>
                </select>
            </div>

        </div>

        {{-- RIGHT SIDE --}}
        <div class="space-y-5 p-6 ">

            <div>
                <label class="label">Current Avatar</label><br>
                @if($instructor->avatar)
                <img src="{{ asset('storage/'.$instructor->avatar) }}" class="w-20 h-20 rounded-full mb-2 object-cover border">
                @else
                <img src="https://ui-avatars.com/api/?name={{ $instructor->user->name }}" class="w-20 h-20 rounded-full mb-2 object-cover border">
                @endif
                <input type="file" name="avatar" class="input">
            </div>

            <div>
                <label class="label">Short Bio</label>
                <textarea name="bio" rows="3" class="input">{{ $instructor->bio }}</textarea>
            </div>

            <div>
                <label class="label">Detailed Description</label>
                <textarea name="description" rows="5" class="input">{{ $instructor->description }}</textarea>
            </div>

            <div>
                <label class="label">Facebook Profile</label>
                <input type="text" name="facebook" value="{{ $instructor->facebook }}" class="input">
            </div>

            <div>
                <label class="label">LinkedIn Profile</label>
                <input type="text" name="linkedin" value="{{ $instructor->linkedin }}" class="input">
            </div>

            <div>
                <label class="label">Payout Email</label>
                <input type="email" name="payout_email" value="{{ $instructor->payout_email }}" class="input">
            </div>

        </div>

    </div>

    <div class="mt-6">
        <button type="submit"
            class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
            Update Instructor
        </button>
    </div>

</form>

@endsection