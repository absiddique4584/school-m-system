<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionPPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_p_parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admission_id');
            $table->string('this_class');
            $table->string('m_name');
            $table->integer('m_phone')->nullable();
            $table->string('f_name');
            $table->integer('f_phone');
            $table->text('m_situation')->nullable();
            $table->longText('address');
            $table->longText('p_address')->nullable();
            $table->timestamps();


            $table->foreign('admission_id')->references('id')->on('admissions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admission_p_parts');
    }
}
