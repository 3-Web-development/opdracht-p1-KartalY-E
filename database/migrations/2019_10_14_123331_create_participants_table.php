<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->integer('code');
            $table->boolean('is_disqualified')->default(0);
            $table->string('ip_address')->default(request()->ip());
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
