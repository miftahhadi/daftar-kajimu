<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registrant_id')->constrained()->cascadeOnDelete();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('domisili')->nullable();
            $table->string('email');
            $table->string('nomor_wa');
            $table->string('pekerjaan')->nullable();
            $table->string('pernah_haji')->nullable();
            $table->text('motivasi')->nullable();
            $table->timestamps();

            $table->index('registrant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
