<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndCapRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_cap_rounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('project_id');
            //Machine data
            $table->string('tag_no')->nulabel();
            $table->text('description')->nulabel();
            $table->string('location')->nulabel();
            //Duct Data
            $table->string('section_no')->nulabel();
            $table->string('diameter')->nulabel();//mm
            $table->string('area')->nulabel();//M*2
            //Thermal insulation data
            $table->boolean('thermal_thickness')->default(0);//mm
            $table->string('area_1_inch')->nulabel();//M*2
            $table->string('area_2_inch')->nulabel();//M*2
            //Cladding
            $table->boolean('cladding_option')->default(0);// YES OR NO
            $table->string('cladding_area')->nulabel();//M*2
            //Duct Gage
            $table->string('duct_gage')->nulabel();//default = 20
            //Thickness
            $table->string('thickness')->default(.853);//mm
            //Duct weight
            $table->string('duct_weight')->nulabel();//kg

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('end_cap_rounds');
    }
}
