<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->enum('leave_type', ['vacation', 'sick','maternity','paternity','bereavement','other'])->default('other');
            $table->date('leave_start_date');
            $table->date('leave_end_date');
            $table->text('reason');
            $table->enum('leave_status',['pending','approved','rejected']);
            $table->foreignId('employee_id')->constrained('employees','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
};
