<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('account_id', 32)->unique()->primary(); //'account_id' as a unique primary key
            $table->string('first_name', 32);           
            $table->string('middle_initial', 1)->nullable(); 
            $table->string('last_name', 32);            
            $table->integer('contact_number')->nullable();
            $table->string('email')->unique();          
            $table->string('password');
            $table->enum('account_type', ['admin', 'student'])->default('student');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //removed 'name' and 'id' from default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};