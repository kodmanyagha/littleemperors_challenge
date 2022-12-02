<?php

namespace App\Providers;

use App\Enums\StatusActivePassiveEnum;
use App\Enums\ThirdPartyServiceCodeEnum;
use App\Enums\ThirdPartyServiceTypeEnum;
use App\Models\ThirdPartyService;
use App\Rules\BelongsToAuthenticatedUser;
use App\Services\ForeignExchangeServices\Bitstamp\Library\BitstampApi;
use App\Services\IdAnalyzer\IdAnalyzerService;
use IDAnalyzer\CoreAPI;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Swoole\Runtime;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        // Detect Swoole Coroutine context.
        // https://github.com/swoole/swoole-src/issues/4284#issuecomment-871283010
        $coroutineId = \Swoole\Coroutine::getCid();
        if ($coroutineId >= 0) {
            \Swoole\Runtime::enableCoroutine(SWOOLE_HOOK_NATIVE_CURL);
        }

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('belongs_to_authenticated_user', BelongsToAuthenticatedUser::class);
    }
}
