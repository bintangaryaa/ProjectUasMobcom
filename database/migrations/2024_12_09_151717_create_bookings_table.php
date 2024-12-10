<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade'); // Ini juga harus bigint unsigned
            $table->integer('number_of_tickets'); // Jumlah tiket
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings'); // Menghapus tabel bookings
    }
}