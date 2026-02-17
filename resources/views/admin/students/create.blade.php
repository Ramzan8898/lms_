@extends('layouts.dashboard')

@section('content')

<div class="flex items-center justify-between ">
    <div>
        <h1 class="text-2xl font-bold">Create Students</h1>

        <x-dashboard.breadcrumbs :items="[
            ['label' => 'Students', 'url' => route('admin.students')],
            ['label' => 'Create']
        ]" />
    </div>
</div>
<form action="{{route('admin.students.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid grid-cols-2 gap-6 bg-white p-6 rounded shadow">

        <div>
            <label for="name" class="label"> Name </label>
            <input type="text" name="name" placeholder="Name" class="input">
        </div>

        <div>
            <label for="email" class="label">Email</label>  
            <input type="email" name="email" placeholder="Email" class="input">
        </div>

        <div>
            <label for="password" class="label">Password</label>
            <input type="password" name="password" placeholder="Password" class="input">
        </div>


        <div><label for="phone" class="label">Phone Number</label>

            <input type="text" name="phone" placeholder="Phone" class="input">
        </div>

        <div>
            <label for="address" class="label">Address</label>
            <input type="text" name="address" placeholder="Address" class="input">
        </div>
        <div>
            <label for="status" class="label">Status</label>
            <select name="status" class="input">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div>
            <label for="file" class="label">Upload File</label>
            <input type="file" name="avatar" class="input">
        </div>

    </div>

    <button type="submit" class="mt-6 px-6 py-3 border border-blue-600 text-blue-600 rounded-lg">
        Create Student
    </button>

</form>

@endsection