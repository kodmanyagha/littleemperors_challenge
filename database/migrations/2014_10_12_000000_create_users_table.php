<?php

use App\Enums\OTPMethodEnum;
use App\Enums\StatusActivePassiveEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 128);
            $table->string('lastname', 128);
            $table->string('cellphone', 32)->unique();
            $table->string('email')->unique();

            $table->enum('status', ['active', 'passive'])->default('active');

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
