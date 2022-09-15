<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoelkastBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koelkast_blog', function (Blueprint $table) {
            $table->id();
            $table->text('merk');
            $table->text('artikelnummer');
            $table->text('beschrijving');
            $table->text('prijs');
            $table->text('afmetingen');
            $table->text('aantal');
            $table->text('inhoud');
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
        Schema::dropIfExists('koelkast_blog');
    }
}
