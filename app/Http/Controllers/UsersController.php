<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('users.create');
    }

    public function show(User $user): Factory|View|Application
    {
        return view('users.show', compact('user'));
    }

}
