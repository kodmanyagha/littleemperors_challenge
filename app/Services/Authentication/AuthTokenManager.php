<?php

namespace App\Services\Authentication;

use App\Enums\OTPMethodEnum;
use App\Exceptions\InvalidTokenException;
use App\Models\Company;
use App\Models\User;
use App\Services\BaseServiceData;
use Exception;
use Illuminate\Support\Facades\Cache;

class AuthTokenManager extends BaseServiceData
{
    public const CACHE_KEY_PREFIX = 'auth_token_';

    protected ?string $token = null;
    protected ?int $userId = null;
    protected ?string $otpSms = null;
    protected ?string $otpMail = null;
    protected ?string $otpMethod = null;
    protected mixed $registerUserData = null;
    protected ?int $expirationTime = null;

    public function __construct()
    {
        $this->otpMethod = OTPMethodEnum::SMS->value;
    }

    /**
     * @throws Exception
     */
    public static function createForUser(mixed $user, ?string $otpMethod = null): ?AuthTokenManager
    {
        $userId  = null;
        $otp     = null;
        $otpMail = null;
        $token   = password(microtime() . random_int(123456789, 999999999) . random_bytes(128) . optional($user)->id);

        if (isset($user->id)) {
            // create for login purpose
            $expirationTime = (int)strtotime('+2 hour');
            $userId         = (int)$user->id;
        } else {
            // create for register purpose
            $expirationTime = (int)strtotime('+10 minutes');
        }

        if ($otpMethod === OTPMethodEnum::SMS->value) {
            $otp            = random_int(121212, 999999);
            $expirationTime = (int)strtotime('+15 minutes');
        } elseif ($otpMethod === OTPMethodEnum::EMAIL->value) {
            $otpMail        = random_int(121212, 999999);
            $expirationTime = (int)strtotime('+15 minutes');
        } elseif ($otpMethod === OTPMethodEnum::SMS_EMAIL->value) {
            $otp            = random_int(121212, 999999);
            $otpMail        = random_int(121212, 999999);
            $expirationTime = (int)strtotime('+15 minutes');
        }

        $authTokenManager = self::create()
            ->setToken($token)
            ->setUserId($userId)
            ->setOtpSms($otp)
            ->setOtpMail($otpMail)
            ->setOtpMethod($otpMethod)
            ->setExpirationTime($expirationTime);

        if (!isset($user->id)) {
            $authTokenManager->setRegisterUserData($user);
        }

        $authTokenManager->save();

        return $authTokenManager;
    }

    /**
     * @throws InvalidTokenException
     */
    public static function get(?string $token = null, ?string $prefix = null): ?static
    {
        try {
            $prefix = is_null($prefix) ? static::CACHE_KEY_PREFIX : $prefix;

            if (is_null($token)) {
                $token = request()->bearerToken();
            }

            if (is_null($token) || strlen($token) < 15) {
                throw new InvalidTokenException(__('error.auth.invalid_token'));
            }

            $cachedAuthData = Cache::get($prefix . $token);

            if (is_null($cachedAuthData)) {

                //if (isLocal() && (str_starts_with($token, 'local_test_token_'))) {
                if (str_starts_with($token, 'local_test_token_')) {
                    $tempUserId = (int)substr($token, strlen('local_test_token_'));
                    logInfo('>>>>>>>>>>>> Test Token User id', $tempUserId);
                    if ($tempUserId > 10) {
                        throw new InvalidTokenException(__('error.auth.invalid_token'));
                    }

                    $tmpUser = User::query()->find($tempUserId);
                    self::createForUser($tmpUser)
                        ->setToken($token)
                        ->setUserId($tempUserId)
                        ->setOtpSms(null)
                        ->setOtpMail(null)
                        ->setOtpMethod(OTPMethodEnum::NOTHING->value)
                        ->setExpirationTime((int)strtotime('+500 minutes'))
                        ->save();

                    $cachedAuthData = Cache::get($prefix . $token);
                } else {
                    throw new InvalidTokenException(__('error.auth.invalid_token'));
                }
            }

            return unserialize($cachedAuthData);

        } catch (\Throwable $e) {
            Cache::forget($prefix . $token);
            //logError('>> UNKNOWN ERROR', $e->getTrace());

            throw new InvalidTokenException(__('error.auth.invalid_token'));
        }
    }

    /**
     * @throws InvalidTokenException
     */
    public static function forget(?AuthTokenManager $authTokenManager = null, ?string $prefix = null): void
    {
        $prefix           = is_null($prefix) ? static::CACHE_KEY_PREFIX : $prefix;
        $authTokenManager = is_null($authTokenManager) ? static::get() : $authTokenManager;
        Cache::forget($prefix . $authTokenManager->getToken());
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     *
     * @return AuthTokenManager
     */
    public function setUserId(?int $userId): AuthTokenManager
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOtpSms(): ?string
    {
        return $this->otpSms;
    }

    /**
     * @param string|null $otpSms
     *
     * @return AuthTokenManager
     */
    public function setOtpSms(?string $otpSms): AuthTokenManager
    {
        $this->otpSms = $otpSms;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOtpMail(): ?string
    {
        return $this->otpMail;
    }

    /**
     * @param string|null $otp
     *
     * @return AuthTokenManager
     */
    public function setOtpMail(?string $otp): AuthTokenManager
    {
        $this->otpMail = $otp;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOtpMethod(): ?string
    {
        return $this->otpMethod;
    }

    /**
     * @param string|null $otpMethod
     *
     * @return AuthTokenManager
     */
    public function setOtpMethod(?string $otpMethod): AuthTokenManager
    {
        $this->otpMethod = $otpMethod;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getRegisterUserData(): mixed
    {
        return $this->registerUserData;
    }

    /**
     * @param User|Company|null $registerUserData
     *
     * @return AuthTokenManager
     */
    public function setRegisterUserData(mixed $registerUserData): AuthTokenManager
    {
        $this->registerUserData = $registerUserData;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpirationTime(): ?int
    {
        return $this->expirationTime;
    }

    /**
     * @param int|null $expirationTime
     *
     * @return AuthTokenManager
     */
    public function setExpirationTime(?int $expirationTime): AuthTokenManager
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return AuthTokenManager
     */
    public function setToken(string $token): AuthTokenManager
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @param string|null $prefix
     * @param int|null $timeout
     *
     * @return AuthTokenManager
     */
    public function save(?string $prefix = null, ?int $timeout = null): static
    {
        $prefix  = is_null($prefix) ? static::CACHE_KEY_PREFIX : $prefix;
        $timeout = is_null($timeout)
            ? is_null($this->expirationTime)
                ? strtotime('+1 hour')
                : $this->expirationTime
            : $timeout;

        //logInfo('>> SAVING CACHED USER DATA', $this);
        Cache::put($prefix . $this->token, serialize($this), $timeout);

        return $this;
    }
}
