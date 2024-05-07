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
        Schema::create('news', function (Blueprint $table) {
            $table->integer('newid', true);
            $table->string('newtitle');
            $table->text('newdescription');
            $table->dateTime('newdate');
            $table->text('tags');
            $table->integer('newcategoryid_fk')->index('newcategoryid_fk');
            $table->integer('createdbyuserid_fk')->index('createdbyuserid_fk');
            $table->string('newimageadress');
            $table->string('newimagealt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
