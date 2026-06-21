<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function __construct()
    {
        if(!auth()){
            redirect('/login');
            die;
        }
    }

    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function create()
    {
        view('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();

        redirect('/users');
    }

    public function view()
    {
        $user = User::find($_GET['id']);
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = User::find($_GET['id']);
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = User::find($_GET['id']);
        $user->email = $_POST['email'];

        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }

        $user->save();
        redirect('/users');
    }

    public function destroy()
    {
        $user = User::find($_GET['id']);
        $user->delete();
        redirect('/users');
    }
}