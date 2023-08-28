<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deal_tasks', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('deal_id')->index('deal_tasks_deal_id_foreign');
            $table->string('name');
            $table->date('date');
            $table->time('time');
            $table->string('priority');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_tasks');
    }
};