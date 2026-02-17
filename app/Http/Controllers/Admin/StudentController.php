<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('user')->latest()->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'status' => 'required',
            'avatar' => 'nullable|image|max:2048'
        ]);

        DB::beginTransaction();

        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            if (!\Spatie\Permission\Models\Role::where('name', 'student')->exists()) {
                \Spatie\Permission\Models\Role::create(['name' => 'student']);
            }

            $user->assignRole('student');

            $avatar = null;

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar')->store('students', 'public');
            }

            Student::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'address' => $request->address,
                'avatar' => $avatar,
                'status' => $request->status,
            ]);

            DB::commit();

            return redirect()->route('admin.students')
                ->with('success', 'Student created!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }



    public function edit(Student $student)
    {
        return view('admin.students.update', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $student->user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        if ($request->hasFile('avatar')) {
            $student->avatar = $request->file('avatar')->store('students', 'public');
        }

        $student->update([
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.students')->with('success', 'Updated!');
    }

    public function destroy(Student $student)
    {
        $student->user->delete();
        return back()->with('success', 'Deleted!');
    }
}
