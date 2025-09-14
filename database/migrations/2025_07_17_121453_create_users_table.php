<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');            
            $table->string('email')->unique();  
            $table->string('password');      
            $table->string('lastName')->nullable();      
            
            $table->integer('points')->default(0);
            $table->unsignedBigInteger('rank_id')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->foreign('rank_id')->references('id')->on('ranks')->nullOnDelete();
            $table->string('image_path')->nullable(); 
            $table->unsignedBigInteger('deleted')->default(0);
            $table->timestamps(); 
        });
    }

     public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rank_id']);
            $table->dropColumn(['points', 'rank_id']);
        });
    }
}
