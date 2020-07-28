<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('admit_id');
            $table->string('name');
            $table->text('p_school')->nullable();
            $table->integer('s_phone')->nullable();
            $table->string('s_email')->nullable();
            $table->date('d_birth');
            $table->string('p_birth');
            $table->string('class');
            $table->string('image');
            $table->timestamps();


            //$table->foreign('admit_id')->references('id')->on('admission_p_parts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
