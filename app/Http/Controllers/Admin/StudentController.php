<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

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

            if (!Role::where('name', 'student')->exists()) {
                Role::create(['name' => 'student']);
            }

            $user->assignRole('student');

            $avatarPath = null;

            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('students', 'public');

                $avatarPath = 'storage/' . $path;
            }

            Student::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'address' => $request->address,
                'avatar' => $avatarPath,
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
        // Update user info
        $student->user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $student->user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        $avatar = $student->avatar;

        if ($request->hasFile('avatar')) {

            // Delete old avatar if exists
            if ($student->avatar) {

                // remove storage/ prefix
                $oldPath = str_replace('storage/', '', $student->avatar);

                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            // Store new avatar
            $path = $request->file('avatar')->store('students', 'public');

            // Save with storage prefix
            $avatar = 'storage/' . $path;
        }

        // Update student record
        $student->update([
            'phone'   => $request->phone,
            'address' => $request->address,
            'status'  => $request->status,
            'avatar'  => $avatar,
        ]);

        return redirect()
            ->route('admin.students')
            ->with('success', 'Updated!');
    }

    public function destroy(Student $student)
    {
        $student->user->delete();
        return back()->with('success', 'Deleted!');
    }
}
