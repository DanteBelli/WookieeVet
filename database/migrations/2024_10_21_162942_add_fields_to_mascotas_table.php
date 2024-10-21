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
        Schema::table('mascotas', function (Blueprint $table) {
            //
            $table->string('nombre');
            $table->float('peso');
            $table->unsignedBigInteger('users_id')->constrained(); 
            $table->unsignedBigInteger('razas_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('mascotas', function (Blueprint $table) {
        $table->dropColumn('nombre');
        $table->dropColumn('peso');
        $table->dropForeign(['users_id']); 
        $table->dropColumn('users_id');
        $table->dropForeign(['razas_id']);
        $table->dropColumn('razas_id');
    });
}
};
