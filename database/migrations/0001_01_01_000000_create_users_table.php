<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('username', 100)->unique();
            $table->string('email')->nullable()->unique();

            $table->string('f_name', 100);
            $table->string('l_name', 100);

            $table->string('address_line_1', 200)->nullable();
            $table->string('address_line_2', 200)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('postcode', 8)->nullable();
            $table->string('mobile', 11)->nullable();

            $table->string('password', 100);
            $table->boolean('is_admin')->default(false);

            $table->string('image', 50)->nullable();

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
