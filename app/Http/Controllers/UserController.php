<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', [
            'users' => $model->paginate(15),
            'pageSlug' => 'users', // <-- agrega esta línea
        ]);
    }
    public function dashboard()
    {
        return view('dashboard', [
            'pageSlug' => 'dashboard',
        ]);
    }

    // Para profile
    public function profile()
    {
        return view('profile.edit', [
            'pageSlug' => 'profile',
        ]);
    }
}
