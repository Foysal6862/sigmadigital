<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('name');
            $table->double('project_budget', 8 ,2);
            $table->enum('payment_status', ['paid', 'unpaid', 'trial'])->default('paid');
            $table->enum('project_status', ['not_started', 'in_progress', 'finished'])->default('finished');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->text('note');
            $table->text('logo');
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
        Schema::dropIfExists('projects');
    }
}
