<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('B2BLeadGenerationTable', function (Blueprint $table) {
            $table->id();
            $table->string('Owner')->nullable();
            $table->string('Source')->nullable();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email')->unique();
            $table->string('Title')->nullable();
            $table->string('Phone',15)->nullable();
            $table->string('Mobile',15)->nullable();
            $table->text('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('Country')->nullable();
            $table->string('Zip_Code',10)->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Linkedin')->nullable();
            $table->string('Company_Name');
            $table->string('Company_Email')->unique();
            $table->string('Company_Phone',15)->nullable();
            $table->string('Company_Mobile',15)->nullable();
            $table->text('Company_Address')->nullable();
            $table->string('Company_City')->nullable();
            $table->string('Company_State')->nullable();
            $table->string('Company_Country')->nullable();
            $table->string('Company_ZipCode',10)->nullable();
            $table->string('Company_Website');
            $table->string('Company_Facebook')->nullable();
            $table->string('Company_Twitter')->nullable();
            $table->string('Company_Linkedin')->nullable();
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
        Schema::dropIfExists('B2BLeadGenerationTable');
    }
};

// $table->string('Owner')->nullable();
// $table->string('Source')->nullable();
// $table->string('First_Name');
// $table->string('Last_Name');
// $table->string('Email')->unique();
// $table->string('Title')->nullable();
// $table->string('Phone')->nullable();
// $table->string('Mobile')->nullable();
// $table->text('Address')->nullable();
// $table->string('City')->nullable();
// $table->string('State')->nullable();
// $table->string('Country')->nullable();
// $table->string('Zip_Code')->nullable();
// $table->string('Facebook')->nullable();
// $table->string('Twitter')->nullable();
// $table->string('Linkedin')->nullable();
// $table->string('Company_Name');
// $table->string('Company_Email')->unique();
// $table->string('Company_Phone')->nullable();
// $table->string('Company_Mobile')->nullable();
// $table->text('Company_Address')->nullable();
// $table->string('Company_City')->nullable();
// $table->string('Company_State')->nullable();
// $table->string('Company_Country')->nullable();
// $table->string('Company_ZipCode')->nullable();
// $table->string('Company_Website');
// $table->string('Company_Facebook')->nullable();
// $table->string('Company_Twitter')->nullable();
// $table->string('Company_Linkedin')->nullable();