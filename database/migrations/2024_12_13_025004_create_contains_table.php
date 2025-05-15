<?php

use App\Data\ContainStatus;
use App\Data\ContainType;
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
        Schema::create('contains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->enum('type',ContainType::getCodes())->nullable();
            $table->enum('status',ContainStatus::getCodes())->nullable();
            $table->text('pub_contains')->nullable();
            $table->json('addtionnal_info')->nullable();
            $table->text('files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contains');
    }
};
