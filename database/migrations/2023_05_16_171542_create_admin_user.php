<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        User::create([
            'name' => 'Admin',
            'dob' => '1975-05-18',
            'email' => 'admin@refferal.app',
            'refferal' => "",
            'email_verified_at'=>date("Y-m-d H:i:s"),
            'password' => Hash::make('admin@pass'),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        User::truncate();
    }
};
