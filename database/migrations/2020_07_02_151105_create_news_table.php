<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->text('text');

            $table->string('slug');
            $table->string('picture')->nullable();
            $table->string('category');
            $table->string('type');

            $table->boolean('isTimelineItem')->default(false);
            $table->boolean('isAdvertisement')->default(false);

            $table->bigInteger('views');
            $table->json('settings')->nullable()->default(null);

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
        Schema::dropIfExists('news');
    }
}
