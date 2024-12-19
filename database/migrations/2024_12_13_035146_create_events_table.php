<?php

use App\Data\EventType;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->enum('type',EventType::getCodes())->nullable();
            $table->date('begin_event');
            $table->string('end_event');
            $table->text('contains')->nullable();
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
        Schema::dropIfExists('events');
    }
};
