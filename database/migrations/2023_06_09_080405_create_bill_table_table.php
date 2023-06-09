<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_table', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_no');
            $table->date('bill_date');
            $table->integer('sv_no');
            $table->integer('bill_type_id');
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
        Schema::dropIfExists('bill_table');
    }
}
$table->foreignId('ad_id');