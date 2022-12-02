<?php

namespace Tests\Base;

use App\Enums\MFATypeEnum;
use App\Enums\OTPMethodEnum;
use App\Models\User;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException;
use PragmaRX\Google2FA\Exceptions\InvalidCharactersException;
use PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException;
use PragmaRX\Google2FA\Google2FA;
use Tests\TestCase;

class DbInitializedTestCase extends TestCase
{
    use DatabaseMigrations;

    public $seed = true;

    /**
     * @var Generator
     */
    public Generator $faker;

    protected function setUp(): void
    {
        parent::setUp();

        Config::set('app.env', 'testing');

        $this->runDatabaseMigrations();

        Artisan::call('cache:clear');

        $this->faker = Factory::create();

        config(['logging.default' => 'stdout']);
    }

    /**
     * @throws IncompatibleWithGoogleAuthenticatorException
     * @throws InvalidCharactersException
     * @throws SecretKeyTooShortException
     */
    public function createAuthToken($email = 'client1@wpbe.host', $password = '123123123')
    {
        $google2fa = new Google2FA();

        $otpSecret = $google2fa->generateSecretKey();

        /** @var User $user */
        $user = User::query()->where('email', $email)->with('profile')->first();

        $user->profile->otp_method       = OTPMethodEnum::GOOGLE_AUTH->value;
        $user->profile->google_auth_code = $otpSecret;
        $user->profile->save();

        $code = $google2fa->getCurrentOtp($otpSecret);

        $result    = $this->post('api/v1/auth/login', ['email' => $email, 'password' => $password, 'g_recaptcha_response' => 'test']);
        $resultObj = makeObject($result->original);

        $this->withToken($resultObj->token->token)
            ->post('api/v1/auth/verifyOtp', ['otp' => $code]);

        return $resultObj->token->token;
    }

    public function randomUser(): User
    {
        /** @var User $user */
        $user = User::query()->where('status', \App\Enums\StatusActivePassiveEnum::ACTIVE->value)->inRandomOrder()->first();

        return $user;
    }

    /**
     * Makes any properties (private/protected etc) accessible on a given object via reflection
     *
     * @param $object - instance in which properties are being modified
     * @param array $properties - associative array ['propertyName' => 'propertyValue']
     *
     * @return void
     * @throws \ReflectionException
     */
    public function setProperties(mixed $object, array $properties): void
    {
        $reflection = new \ReflectionClass($object);

        foreach ($properties as $name => $value) {
            $reflection_property = $reflection->getProperty($name);
            $reflection_property->setAccessible(true);
            $reflection_property->setValue($object, $value);
        }
    }

}
