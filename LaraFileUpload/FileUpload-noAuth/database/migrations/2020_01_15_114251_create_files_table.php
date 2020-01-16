<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("city");
            $table->string("County");
            $table->string("address");
            $table->string("country");
            $table->string("PostCode");
            $table->string("dateAvailable");
            $table->string("desiredPay");
            $table->string("weblink");
            $table->string("linkedin");
            $table->string("job_id");
            
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}








