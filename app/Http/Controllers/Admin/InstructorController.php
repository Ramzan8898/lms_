<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{

    public function index()
    {
        $instructors = Instructor::with('user')->latest()->get();
        return view('admin.instructor.index', compact('instructors'));
    }



    public function create()
    {
        return view('admin.instructor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'status' => 'required|in:active,inactive',
            'avatar' => 'nullable|image',
        ]);

        DB::beginTransaction();

        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole('instructor');

            $avatarPath = $request->hasFile('avatar')
                ? $request->file('avatar')->store('instructors', 'public')
                : null;

            Instructor::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'expertise' => $request->expertise,
                'experience' => $request->experience,
                'qualification' => $request->qualification,
                'status' => $request->status,
                'avatar' => $avatarPath,
                'bio' => $request->bio,
                'description' => $request->description,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'payout_email' => $request->payout_email,
            ]);

            DB::commit();

            return redirect()
                ->route('admin.instructors')
                ->with('success', 'Instructor created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }


    public function edit(Instructor $instructor)
    {
        $instructor->load('user');
        return view('admin.instructor.update', compact('instructor'));
    }

    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $instructor->user_id,
            'password' => 'nullable|min:8',
            'status' => 'required|in:active,inactive',
            'avatar' => 'nullable|image',
        ]);

        DB::beginTransaction();

        try {
            $user = $instructor->user;

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            if ($request->password) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            }

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('instructors', 'public');
                $instructor->avatar = $avatarPath;
                $instructor->save();
            }


            $instructor->update([
                'phone' => $request->phone,
                'expertise' => $request->expertise,
                'experience' => $request->experience,
                'qualification' => $request->qualification,
                'status' => $request->status,
                'bio' => $request->bio,
                'description' => $request->description,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'payout_email' => $request->payout_email,
            ]);

            DB::commit();

            return redirect()->route('admin.instructors')
                ->with('success', 'Instructor updated!');
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }



    public function destroy(Instructor $instructor)
    {
        DB::beginTransaction();

        try {
            $instructor->user->delete();
            DB::commit();

            return back()->with('success', 'Instructor deleted!');
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
