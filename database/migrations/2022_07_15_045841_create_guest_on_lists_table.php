<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * The Guest on List comes from the Guests List in the excel.
     * @return void
     */
    public function up()
    {
        Schema::create('guest_on_lists', function (Blueprint $table) {
            $table->id();
            // $table->string('uuid')->unique();

            $table->string('name');
            $table->string('last_name');
            $table->string('surname');
            $table->string('second_surname');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_on_lists');
    }
};
