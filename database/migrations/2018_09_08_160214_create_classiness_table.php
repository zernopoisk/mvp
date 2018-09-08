<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classiness', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('PK');

            $table->string('alias', 16)->comment('for the system use, only');
            $table->string('name', 16)->comment('class of cereals on russian (for human eyes)');
            $table->char('translit', 16)->comment('for SEO goals, form field values and so on...');
            $table->unsignedTinyInteger('number')->comment('class of cereals number');

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
        Schema::dropIfExists('classiness');
    }
}
