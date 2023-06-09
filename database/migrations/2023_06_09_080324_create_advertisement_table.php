<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement', function (Blueprint $table) {
            $table->id();
            $table->string('hod');
            $table->date('issue_date');
            $table->date('published_date');
            $table->double('size');
            $table->double('amount');
            $table->string('subject');
            $table->string('ref_no');
            $table->date('ref_date');
            $table->date('positively_on');
            $table->integer('release_order_no');
            $table->string('remarks');
            $table->integer('ad_type');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');  
            $table->foreignId('dept_id')    //Ad from which Dept
                ->constrained('department')
                ->onUpdate('cascade')
                ->onDelete('cascade');       
            $table->foreignId('ad_category_id') //Notice. tender
                ->constrained('ad_category')
                ->onUpdate('cascade')
                ->onDelete('cascade'); 
            $table->foreignId('ad_type_id') // Display or classified
                ->constrained('ad_type')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('advertisement');
    }
}
