<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('referral_code')->nullable()->after('status_id')->unique();
        });

        $usersToUpdate = User::whereNull('referral_code')->get();

        foreach ($usersToUpdate as $user) {
            do {
                $new_code = Str::random(8);
            } while (User::where('referral_code', $new_code)->exists());

            $user->referral_code = $new_code;
            $user->save();
        }
        Schema::table('users', function (Blueprint $table) {
            $table->string('referral_code')->nullable(false)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_referral_code_unique');
            $table->dropColumn('referral_code');
        });
    }
};
