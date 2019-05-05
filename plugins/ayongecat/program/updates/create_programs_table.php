<?php namespace Ayongecat\Program\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('ayongecat_program_programs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->timestamps();
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayongecat_program_programs');
    }
}
