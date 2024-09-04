<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Facility;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('user_logs', function (Blueprint $table) {
      $table->id();
      $table->string('phone', 10)->unique();
      $table->string('password');
      $table->string('plain_password')->nullable();
      $table->string('first_name')->nullable();
      $table->string('last_name')->nullable();
      $table->foreignIdFor(Facility::class)->constrained()->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('user_logs');
  }
};