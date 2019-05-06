<?php namespace Ayongecat\Donation\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('ayongecat_donation_donations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('program_id');
            $table->integer('bank_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('value');
            $table->text('message')->nullable();
            $table->datetime('donationed_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayongecat_donation_donations');
    }
}
