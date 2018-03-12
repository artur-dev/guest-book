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
        return view('comment.index', ['comments' => Entries::take(10)->orderBy('id', 'desc')->get()]);
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
        $v = \Validator::make($request->all(), [
            'guest_name' => 'required|max:255',
            'guest_email' => 'email|max:255',
            'comment' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        } else {
            Entries::create($request->all());
            
            return redirect()->route('comment.index');
        }

    }
}
