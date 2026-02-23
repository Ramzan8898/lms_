<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Queries;
use Illuminate\Http\Request;

class QueryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        Queries::create($request->only(
            'name',
            'email',
            'subject',
            'message'
        ));

        return back()->with('success', 'Your message has been sent successfully!');
    }


    public function index()
    {
        $queries = Queries::latest()->get();

        return view('admin.dashboard.queries', compact('queries'));
    }
}
