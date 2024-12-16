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
        if (!Schema::hasTable('users')) {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 사용자 이름
        $table->string('email')->unique(); // 사용자 이메일 (유니크)
        $table->string('password'); // 사용자 비밀번호
        $table->unsignedBigInteger('team_id')->nullable(); 
        $table->timestamps(); 
        $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

        });};
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
