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
        Schema::create('users', function(Blueprint $table){
           $table->id();
           $table->string('name');
           $table->string('email')->unique();
           $table->string('password');
           $table->enum('status', ['active','banned','pending', 'deleted'])->default('pending'); //->after('email'); // +status
           $table->string('phone_number')->nullable(); // +phone_number
           $table->string('avatar')->nullable();   // +avatar (path)
           $table->text('address')->nullable();    // +address
           $table->foreignId('role_id')->constrained('roles')->onDelete('cascade'); // +role_id
           $table->string('activation_token')->nullable(); // +activation_token
           $table->string('google_id')->nullable(); // +google_id
           $table->timestamps();                   // +created_at +updated_at

            // Nếu bạn có bảng roles, hãy bật foreign key:
            // $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
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