<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['unique:users,email', 'email', 'required'],
            'password' => ['required', 'min:6', 'max:15', 'string', 'confirmed'],
            'employee' => ['boolean']
        ]);

        User::create($validated);

        return response()->json([
            'message' => 'Novo usuário cadastrado com sucesso.',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
