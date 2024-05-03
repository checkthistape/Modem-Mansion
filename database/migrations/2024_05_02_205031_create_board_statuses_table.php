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
        Schema::create('board_statuses', function (Blueprint $table) {
            $table->integer('boardstatusid', true);
            $table->string('boardstatusname');
            $table->dateTime('boardstatusdate');
            $table->integer('createdbyuserid_fk')->index('createdbyuserid_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_statuses');
    }
};
