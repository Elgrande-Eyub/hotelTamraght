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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('pack')->nullable();
            $table->string('rooms')->nullable();
            $table->string('dorms')->nullable();

            $table->boolean('surfcoaching')->default(0);
            $table->boolean('surfyoga')->default(0);

            $table->string('solocoaching')->nullable();
            $table->string('soloyoga')->nullable();
            $table->string('buddiescoaching')->nullable();
            $table->string('buddiesyoga')->nullable();

            $table->string('person')->nullable();
            $table->date('checkin')->nullable();
            $table->date('checkout')->nullable();
            $table->string('booking_id')->nullable();
            $table->string('status')->nullable()->default('Pending');
            $table->longText('message')->nullable();
            $table->float('total',8,2)->nullable();
            $table->boolean('seen')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
