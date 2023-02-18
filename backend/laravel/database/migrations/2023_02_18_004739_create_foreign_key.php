<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('avatar_id')->references('id')->on('avatars');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('hr_id')->references('id')->on('hrs');
            $table->foreign('rang_id')->references('id')->on('ranges');
            $table->foreign('mentor_id')->references('id')->on('mentors');
        });

        Schema::table(
            'divisions',
            fn(Blueprint $table) => $table->foreign('supervisor_id')
                ->references('id')->on('supervisors')
        );

        Schema::table('documents', fn(Blueprint $table)=>
        $table->foreign('division_id')->references('id')->on('divisions'));


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
