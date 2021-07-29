<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint  $table){
            $table->id();
            $table->string('title');
           $table->string('author');
           $table->string('co_author');
           $table->string('description');
           $table->date('publications_date');
            $table->timestamp('updated_at')->nullable();

            $table->timestamp('created_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
