<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile')->unique()->after('email');  // email ke baad add kar raha hu, change kar sakte ho
            $table->string('otp')->nullable()->after('mobile');
            $table->timestamp('otp_expires_at')->nullable()->after('otp');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['mobile', 'otp', 'otp_expires_at']);
        });
    }
};
