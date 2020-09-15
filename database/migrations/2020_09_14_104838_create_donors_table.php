<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('bloodgroup');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('photo');
            $table->date('postingdate');
            $table->timestamps();
            /*$table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
