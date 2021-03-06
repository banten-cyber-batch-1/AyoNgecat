<?php namespace Ayongecat\Setting\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGeneralsTable extends Migration
{
    public function up()
    {
        Schema::create('ayongecat_setting_generals', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayongecat_setting_generals');
    }
}
