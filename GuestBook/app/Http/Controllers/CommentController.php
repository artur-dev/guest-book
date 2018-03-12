<?php

namespace App\Http\Controllers;

use App\Entries;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Lists most recent comments from guest book.
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

    }
}
