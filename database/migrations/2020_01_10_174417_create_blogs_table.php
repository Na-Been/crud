<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id;
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('nation');
            $table->string('ed_bg');
            $table->string('contact_mode');
            $table->date('dob');
            $table->timestamps();
            $table->auditableWithDeletes();
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
        Schema::dropIfExists('blogs');
    }
}
