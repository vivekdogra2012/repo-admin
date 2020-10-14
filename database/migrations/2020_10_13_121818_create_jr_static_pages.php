<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJrStaticPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jr_static_pages')) {
            Schema::create('jr_static_pages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('url', 256);
                $table->string('heading', 512);
                $table->text('meta_tag');
                $table->string('desktop_banner', 512);
                $table->string('mobile_banner', 512);
                $table->text('css');
                $table->text('content');
                $table->text('js');
                $table->integer('author');
                $table->timestamps();
    
            });
            }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
