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
        Schema::table('genealogy_trees', function (Blueprint $table) {
            $table->renameColumn('referrer_id','parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('genealogy_trees', function (Blueprint $table) {
            $table->renameColumn('parent_id','referrer_id');
        });
    }
};
