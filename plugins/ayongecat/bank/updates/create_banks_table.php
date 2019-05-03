<?php namespace Ayongecat\Bank\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBanksTable extends Migration
{
    public function up()
    {
        Schema::create('ayongecat_bank_banks', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('type_id');
            $table->string('name');
            $table->string('number');
            $table->boolean('is_primary')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayongecat_bank_banks');
    }
}
