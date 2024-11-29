<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'message' => __('Oops! Your email or password is incorrect. Please try again.'),
            ], 401);
        }

        return response()->json([
            'status' => 'success',
            'message' => __('Welcome back! You are now logged in.'),
            'data' => [
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
                'token' => $token,
            ]
        ], 200);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth()->user();

        return response()->json([
            'status' => 'success',
            'message' => __('Here is your profile information.'),
            'data' => $user
        ], 200);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json([
            'status' => 'success',
            'message' => __('You have been logged out successfully. See you soon!'),
        ], 200);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        try {
            $token = auth()->refresh();

            return response()->json([
                'status' => 'success',
                'message' => __('Your session has been refreshed successfully.'),
                'data' => [
                    'token_type' => 'bearer',
                    'expires_in' => auth()->factory()->getTTL() * 60,
                    'token' => $token,
                ]
            ], 200);
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error',
                'message' => __('We couldn\'t refresh your session. Please log in again.'),
            ], 401);
        }
    }
}
