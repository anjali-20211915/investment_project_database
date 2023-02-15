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
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('dob');
        $table->dropColumn('address');


        $table->bigInteger('phoneex')->nullable();
        $table->string('country')->nullable();
        $table->string('stateofop')->nullable();
        $table->string('role')->nullable();
        $table->bigInteger('usercdrno')->nullable();
        $table->string('firmmail')->nullable();
        $table->string('firmurl')->nullable();
        $table->string('firmtype')->nullable();
    });
    Schema::table('users', function (Blueprint $table) {
        $table->date('dob')->nullable();
        $table->string('address')->nullable();
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('phoneex');
                $table->dropColumn('country');
                $table->dropColumn('stateofop');
                $table->dropColumn('role');
                $table->dropColumn('usercdrno');
                $table->dropColumn('firmmail');
                $table->dropColumn('firmurl');
                $table->dropColumn('firmtype');
                
            });
    
    }
};
