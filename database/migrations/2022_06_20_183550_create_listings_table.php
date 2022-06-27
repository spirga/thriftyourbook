<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('edition_id')->constrained()->onDelete('cascade');
            $table->string('listing_description', 200);
            $table->string('image_url')->default('https://i.ibb.co/4FGJ1wr/book.png');
            $table->decimal('price', 5,2);
            $table->string('condition', 10);
            $table->string('shipping_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
};