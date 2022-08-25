<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('finish_redirect_url')->nullable();
            $table->string('gross_amount');
            $table->string('order_id');
            $table->string('payment_code');
            $table->string('payment_type');
            $table->string('pdf_url')->nullable();
            $table->string('status_code');
            $table->string('status_message');
            $table->string('transaction_id');
            $table->string('transaction_status');
            $table->string('approval_code')->nullable();
            $table->string('fraud_status')->nullable();
            $table->string('signature_key')->nullable();
            $table->string('eci')->nullable();
            $table->string('currency')->nullable();
            $table->string('channel_response_message')->nullable();
            $table->string('channel_response_code')->nullable();
            $table->string('card_type')->nullable();
            $table->string('bank')->nullable();
            $table->string('settlement_time')->nullable();
            $table->string('va_number')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('paid_at')->nullable();
            $table->string('transaction_time')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
