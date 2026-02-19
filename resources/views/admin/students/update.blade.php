@extends('layouts.dashboard')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-white">Edit Student</h1>

<form action="{{route('admin.students.update',$student->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-2 gap-6  p-6">
        <div>
            <label for="name" class="label">Name</label>
            <input type="text" name="name" value="{{ $student->user->name }}" class="input">
        </div>

        <div>
            <label for="email" class="label">Email</label>
            <input type="email" name="email" value="{{ $student->user->email }}" class="input">
        </div>

        <div>
            <label for="phone" class="label">Phone Number</label>
            <input type="text" name="phone" value="{{ $student->phone }}" class="input">
        </div>

        <div>
            <label for="address" class="label">Address</label>
            <input type="text" name="address" value="{{ $student->address }}" class="input">
        </div>

        <div>
            <label for="status" class="label">Status</label>
            <select name="status" class="input">
                <option value="active" {{ $student->status=='active'?'selected':'' }}>Active</option>
                <option value="inactive" {{ $student->status=='inactive'?'selected':'' }}>Inactive</option>
            </select>
        </div>
        <div>
            <label class="label">Current Avatar</label><br>
            @if($student->avatar)
            <img src="{{ asset('storage/'.$student->avatar) }}" class="w-20 h-20 rounded-full mb-2 object-cover border">
            @else
            <img src="https://ui-avatars.com/api/?name={{ $student->user->name }}" class="w-20 h-20 rounded-full mb-2 object-cover border">
            @endif
            <input type="file" name="avatar" class="input">
        </div>

    </div>

    <button class="mt-6 px-6 py-3 border border-blue-600 text-blue-600 rounded-lg">
        Update Student
    </button>

</form>

@endsection