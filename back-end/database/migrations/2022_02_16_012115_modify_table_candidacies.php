<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidacies', function (Blueprint $table){
           $table->text('portfolio')->nullable();
           $table->text('linkedin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidacies', function (Blueprint $table){
           $table->dropColumn('portfolio');
           $table->dropColumn('linkedin');
        });
    }
};
