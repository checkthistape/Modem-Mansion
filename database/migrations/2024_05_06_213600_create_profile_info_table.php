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
        Schema::create('profile_info', function (Blueprint $table) {
            $table->integer('profileid', true);
            $table->string('displayname', 40)->unique('displayname');
            $table->binary('profileimage')->nullable();
            $table->string('description')->nullable();
            $table->integer('userid_fk')->unique('userid_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_info');
    }
};
