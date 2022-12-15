<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

	public function render($request, Throwable  $exception)
	{
        // \Log::info('exception getMessage..',[$exception->getMessage()]);
		if($request->expectsJson()){
			if($exception instanceof ValidationException){
				$transformed = [];

				foreach ($exception->errors() as $field => $message) {
					$transformed[$field] = $message[0];
				}
				return response()->json([
                    'errors' => $transformed,
                    'message' => 'The given data was invalid.',
                ], 422);
			}
			if($exception instanceof AccessDeniedHttpException || $exception instanceof AuthorizationException){
				return response()->json([
                    'errors' => new \StdClass(),
                    'message' => $exception->getMessage(),
                ], 403);
			}

			if($exception instanceof MethodNotAllowedHttpException || $exception instanceof ModelNotFoundException || $exception instanceof NotFoundHttpException){
				return response()->json([
                    'errors' => new \StdClass(),
                    'message' => 'URl/Method/Model Not Found.',
                ], 404);
			}
		}

		// if ($exception instanceof \Spatie\Permission\Exceptions\UnauthorizedException) {
		//     return redirect()->route('admin.dashboard');
		// }

		return parent::render($request, $exception);
	}
}
