<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class Index extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'hot' => '人只有在害怕的时候才会变勇敢。',
            'posts' => [
                [
                    'title' => '第一篇',
                ],
                [
                    'title' => '第二篇',
                ]
            ]
        ]);
    }

    public function create()
    {
        return Inertia::render('Post/Create');
    }
}
