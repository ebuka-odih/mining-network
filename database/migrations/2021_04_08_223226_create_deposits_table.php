<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('approved_date')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->decimal('amount', 11, 2)->nullable();
            $table->bigInteger('package_id')->nullable();
            $table->string('hash_code')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->integer('days')->nullable()->default(0);
            $table->string('payment_proof')->nullable(); //Transaction hash for payment proof
            $table->string('payment_proof_hash')->nullable(); //Transaction hash for payment proof
            $table->boolean('completed')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
