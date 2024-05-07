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
        Schema::create('threads', function (Blueprint $table) {
            $table->integer('threadid', true);
            $table->string('threadname');
            $table->dateTime('threadstartdate');
            $table->integer('threadstartedbyid_fk')->index('threadstartedbyid_fk');
            $table->integer('boardid_fk')->index('boardid_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
