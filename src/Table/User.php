<?php

namespace App\Table;

use App\Core\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class User extends Migration
{
    public function up(): void
    {
        Table::create()->create('user', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('email', 50)->unique();
            $table->string('name', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Table::create()->table('user', function (Blueprint $table) {
            $table->drop();
        });
    }
}