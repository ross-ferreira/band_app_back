<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("talent_name", 100);
            $table->tinyInteger("skill_level");
            $table->timestamps();
            
            $table->bigInteger("member_id")->unsigned();
            $table->foreign("member_id")->references("id")->on("members")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talents');
    }
}
