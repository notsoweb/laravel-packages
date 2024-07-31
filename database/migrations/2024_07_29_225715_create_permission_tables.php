<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use MongoDB\Laravel\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permission_types', function (Blueprint $collection) {
            $collection->id();
            $collection->string('name');
            $collection->text('description')->nullable();
            $collection->timestamps();
        });

        Schema::create('permissions', function (Blueprint $collection) {
            $collection->id();
            $collection->string('name');
            $collection->text('description')->nullable();
            $collection->foreignId('permission_type_id');
            $collection->timestamps();
        });

        Schema::create('roles', function (Blueprint $collection) {
            $collection->id();
            $collection->string('name');
            $collection->text('description')->nullable();
            $collection->timestamps();
        });

        Schema::create('role_user', function (Blueprint $collection) {
            $collection->id();
            $collection->foreignId('permission_id');
            $collection->foreignId('role_id');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_types');
    }
};
