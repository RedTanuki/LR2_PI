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
        Schema::create('address', function (Blueprint $table) {
            $table->id()->unique();
			$table->unsignedBigInteger('id_b');
            $table->string('city');
			$table->string('street');
            $table->string('house');
            $table->string('floor');
			$table->string('flat');
			$table->string('code');
            $table->date('created_adr');
			
			$table->foreign('id_b')
				->references('id')
				->on('buyer')
				->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
