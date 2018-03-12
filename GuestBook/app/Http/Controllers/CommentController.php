<?php

namespace App\Http\Controllers;

use App\Entries;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Lists most recent comments from guest book.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('comment.index', ['comments' => Entries::take(10)->get()]);
    }

    /**
     * Shows form to create new comment.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Stores new comment in database.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        // automatically goes back on failure
        $validated_data = $request->validate([
            'guest_name' => 'required|max:255',
            'guest_email' => 'email|max:255',
            'comment' => 'required'
        ]);

        Entries::create($validated_data);
    }
}
