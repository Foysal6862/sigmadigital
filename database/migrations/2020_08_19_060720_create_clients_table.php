<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('phone', 190)->unique();
            $table->string('address')->nullable();
            $table->enum('status',['active', 'inactive'])->nullable();
            $table->enum('payment_status',['paid', 'unpaid','trial'])->nullable();
            $table->text('logo')->nullable();
            $table->text('add_client_url')->nullable();
            $table->tinyInteger('show_on_home_page')->nullable();
            $table->tinyInteger('flag')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
