<?php

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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->references('id')->on('cities');

            $table->string('name', 1000);
            $table->string('image', 1000);
            $table->string('address', 1000);
            $table->text('description')->nullable();
            $table->float('stars')->default(0);

            $table->decimal('latitude', 15, 8)->default(0);
            $table->decimal('longitude', 15, 8)->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
