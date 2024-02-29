<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserAuthService
{
    public function login(array $credentials)
    {
        $credentials['active_flg'] = 1;
        try {
            return Auth::attempt($credentials);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Login -- userData: {$credentials}");
        }
        return false;
    }

    public function register(array $credentials)
    {
        $credentials['password'] = Hash::make($credentials['password']);
        try {
            return User::create($credentials);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Register -- userData: {$credentials}");
        }
        return false;
    }
}