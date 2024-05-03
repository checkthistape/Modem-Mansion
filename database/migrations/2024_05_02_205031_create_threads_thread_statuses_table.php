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
        Schema::create('threads_thread_statuses', function (Blueprint $table) {
            $table->integer('threadid')->unique('threadid');
            $table->integer('threadstatusid')->index('threadstatusid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads_thread_statuses');
    }
};
