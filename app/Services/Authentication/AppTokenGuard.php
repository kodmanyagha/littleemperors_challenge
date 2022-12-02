<?php

namespace App\Services\Authentication;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class AppTokenGuard implements Guard
{
    protected Request $request;
    protected UserProvider $provider;

    /**
     * @var mixed|null|User
     */
    protected mixed $user = null;

    /**
     * Create a new authentication guard.
     *
     * @param UserProvider $provider
     * @param Request $request
     *
     */
    public function __construct(UserProvider $provider, Request $request)
    {
        $this->request  = $request;
        $this->provider = $provider;
    }

    public function check(): bool
    {
        return !is_null($this->user());
    }

    public function guest(): bool
    {
        return !$this->check();
    }

    public function user()
    {
        if (is_null($this->user)) {
            try {
                $authTokenManager = AuthTokenManager::get();

                $this->user = User::query()
                    ->where('id', $authTokenManager->getUserId())
                    ->firstOrFail();

                if ($this->user->status === 'passive') {
                    return null;
                }
            } catch (\Throwable $throwable) {

            }
        }
        return $this->user;
    }

    public function id()
    {
        if ($this->check()) {
            return $this->user()->getAuthIdentifier();
        }

        return null;
    }

    public function findToken(): ?AuthTokenManager
    {
        $tokenStr = $this->request->bearerToken();

        if (strlen($tokenStr) < 10) {
            return null;
        }

        try {
            return AuthTokenManager::get($tokenStr);
        } catch (\Throwable $throwable) {
            logWarning('Validate auth token exception', $throwable->getMessage());
            return null;
        }
    }

    public function validate(array $credentials = []): bool
    {
        if (empty($credentials['email']) || empty($credentials['password'])) {
            if (is_null($this->findToken())) {
                return false;
            }
        }

        $user = $this->provider->retrieveByCredentials($credentials);

        if (!is_null($user) && $this->provider->validateCredentials($user, $credentials)) {
            $this->setUser($user);

            return true;
        } else {
            return false;
        }
    }

    public function hasUser(): bool
    {
        return $this->check();
    }

    public function setUser(Authenticatable $user)
    {
        $this->user = $user;
        return $this;
    }
}
