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
            $table->string('roles')->after('email')->default('USER');
            $table->string('phone')->after('email')->nullable();
            $table->string('username')->after('email')->nullable();
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
            // ini diisi karena nanti kalo akan ada rollback maka akan menghapus kolom yang ada
            $table->dropColumn('roles');
            $table->dropColumn('phone');
            $table->dropColumn('username');
        });
    }
};
