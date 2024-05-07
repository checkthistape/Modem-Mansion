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
        Schema::create('thread_statuses', function (Blueprint $table) {
            $table->integer('threadstatusid', true);
            $table->string('threadstatusname');
            $table->dateTime('threadstatusdate');
            $table->integer('createdbyuserid_fk')->index('createdbyuserid_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thread_statuses');
    }
};
