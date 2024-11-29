<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use Illuminate\Support\Str;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        // Handle validation exceptions
        $this->renderable(function (ValidationException $e, $request) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        });

        // Handle NotFoundHttpException for all models
        $this->renderable(function (NotFoundHttpException $e, $request) {
            $routeAction = $request->route() ? $request->route()->getActionName() : '';

            if (preg_match('/([A-Za-z]+)Controller@/', $routeAction, $matches)) {
                $modelName = Str::singular($matches[1]);

                $model = $modelName;
                return response()->json([
                    'status' => 'error',
                    'message' => "Sorry, we couldn't find the $model you were looking for."
                ], 404);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Sorry, the requested resource could not be found.'
            ], 404);
        });

        // Optionally, handle other exceptions globally (e.g., generic error responses)
        // $this->renderable(function (Throwable $e, $request) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Something went wrong. Please try again later.'
        //     ], 500);
        // });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return response()->json(['status' => 'error', 'message' => 'User not authenticated'], 401);
    }
}
