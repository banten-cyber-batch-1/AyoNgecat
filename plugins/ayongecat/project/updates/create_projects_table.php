<?php namespace Ayongecat\Project\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('ayongecat_project_projects', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('program_id');
            $table->string('name');
            $table->string('location');
            $table->text('content');
            $table->text('cashflow_in')->nullable();
            $table->text('cashflow_out')->nullable();
            $table->timestamps();
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayongecat_project_projects');
    }
}
