<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index() {
    	$users = User::all();
    	return view('admin.users.index', compact('users'));
    }

    public function new() {
    	return view('admin.users.store');
    }

    public function store(UserRequest $request) {
    	$userData = $request->all();
        $request->validated();
    	$user = new User();
    	$user->create($userData);
    	print 'Usuário criado com sucesso';
    }

    public function edit(User $user) {
    	return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id) {
    	$userData = $request->all();
        $request->validated();
    	$user = User::findOrFail($id);
    	$user->update($userData);
    	print 'Usuário atualizado com sucesso';
    }

    public function delete($id) {
    	$user = User::findOrFail($id);
    	$user->delete();
    	print 'Usuário removido com sucesso';
    }
}
