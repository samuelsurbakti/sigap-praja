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
        Schema::create('flow_sla', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('report_flow_id')->constrained('report_flows')->cascadeOnDelete();
            $table->foreignUuid('priority_id')->constrained('report_priorities')->cascadeOnDelete();
            $table->unsignedInteger('sla_minutes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flow_sla');
    }
};
