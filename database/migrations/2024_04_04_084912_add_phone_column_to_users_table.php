<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
//            $table->string('phone')->unique()->after('email');
//            $table->string('verification_code')->unique()->nullable();
//            $table->timestamp('phone_verified_at')->nullable();
//            $table->dropUnique(['email']);
//            $table->string('email')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
//            $table->string('email')->unsigned()->nullable(false)->change();
//            $table->unique(['email']);
//            $table->dropColumn('phone');
//            $table->dropColumn('verification_code');
//            $table->dropColumn('phone_verified_at');
        });
    }
};
