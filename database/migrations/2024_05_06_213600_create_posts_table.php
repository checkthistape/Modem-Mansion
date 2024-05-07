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
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('postid', true);
            $table->text('posttext');
            $table->integer('postedbyuserid_fk')->index('postedbyuserid_fk');
            $table->integer('threadid_fk')->index('threadid_fk');
            $table->dateTime('postdate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
