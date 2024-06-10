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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("Full Stack Web Engineer");
            $table->date('dob')->default("2002-05-10");
            $table->string('website')->default("masolutiontech.net");
            $table->string("phone")->default("(+84)");
            $table->string("city")->default("HaNoi");
            $table->string("email")->default("nguyenductuan05102002@outlook.com");
            $table->string("degree")->default("Bs");
            $table->integer("age")->default("22");
            $table->string("profession")->default("Web Developer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
