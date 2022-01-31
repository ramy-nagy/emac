<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecDuctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec_ducts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            //Machine data
            $table->string('tag_no')->nulabel();
            $table->text('description')->nulabel();
            $table->string('location')->nulabel();
            //Duct Data
            $table->string('section_no')->nulabel();
            $table->string('width')->nulabel();//mm
            $table->string('depth')->nulabel();//mm
            $table->string('length')->nulabel();//M
            $table->string('area')->nulabel();//M*2
            //Thermal insulation data
            $table->boolean('thermal_thickness')->default(0);//mm
            $table->string('area_1_inch')->nulabel();//M*2
            $table->string('area_2_inch')->nulabel();//M*2
            //Cladding
            $table->boolean('cladding_option')->default(0);// YES OR NO
            $table->string('cladding_area')->nulabel();//M*2
            //Accoustic
            $table->boolean('accoustic_option')->default(0);// YES OR NO
            $table->string('accoustic_length')->nulabel();//M
            $table->string('accoustic_area')->nulabel();//M*2
            //Duct Gage
            $table->string('duct_gage')->nulabel();//default = 20
            //Thickness
            $table->string('thickness')->default(1.006);//mm
            //Duct weight
            $table->string('duct_weight')->nulabel();//kg
            //Pending distance  per side
            $table->string('pending_distance_per_side')->default(15);//mm
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_ducts');
    }
}
