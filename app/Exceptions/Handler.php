<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function report(Throwable $exception)
    {
        // Kill reporting if this is an "access denied" (code 9) OAuthServerException.
        if ($exception instanceof \League\OAuth2\Server\Exception\OAuthServerException && $exception->getCode() == 9) {
            return;
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param \Throwable $exception
     *
     * @return ResponseAlias
     *
     * @throws \Throwable|Throwable
     */
    public function render($request, Throwable $exception): ResponseAlias
    {
        // TODO THink about that. Must you force json output?
        $request->headers->set('Accept', 'application/json');

        //logError('>>ERR', [
        //    'message'   => $exception->getMessage(),
        //    'exception' => get_class($exception),
        //    'file'      => $exception->getFile(),
        //    'line'      => $exception->getLine(),
        //    'trace'     => collect($exception->getTrace())->map(fn($trace) => Arr::except($trace, ['args']))->all(),
        //]);

        if ($exception instanceof ValidationException) {
            throw new HttpResponseException(response()->json([
                'status'  => false,
                'message' => array_values($exception->errors()),
                'errors'  => $exception->errors(),
            ], ResponseAlias::HTTP_UNPROCESSABLE_ENTITY));
        }

        return parent::render($request, $exception);
    }

    protected function convertValidationExceptionToResponse(ValidationException $e, $request): Response|JsonResponse|ResponseAlias
    {
        $response = parent::convertValidationExceptionToResponse($e, $request);
        if ($response instanceof JsonResponse) {
            $original            = $response->getOriginalContent();
            $original['message'] = __('error.convert_validation');
            $response->setContent(json_encode($original));
        }

        return $response;
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => __('error.unauthorized')], 401);
        }
    }
}
