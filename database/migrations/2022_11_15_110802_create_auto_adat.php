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
        Schema::create('auto_adat', function (Blueprint $table) {
            $table->string("Tulajdonos neve");
            $table->date("Tulajdonjog kezdtete");
            $table->date("Tulajdonjog vége");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_adat');
    }
};
