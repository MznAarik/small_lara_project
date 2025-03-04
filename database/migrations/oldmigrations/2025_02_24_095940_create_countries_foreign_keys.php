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
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable();
            $table->unsignedBigInteger('country_id'); // Reference to countries
            $table->unsignedBigInteger('state_id')->nullable();

            // Corrected foreign key to reference the `id` column of `countries`
            $table->foreign('country_id')
                ->references('id') // Referencing `id` column in countries
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            // Works same as
            // $table->foreignId('country_id')->constrained()
            //     ->cascadeOnDelete()->cascadeOnUpdate();

        });

        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable();
            $table->unsignedBigInteger('state_id'); // Reference to states
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('district_id')->nullable();

            // Corrected foreign key to reference the `id` column of `states`
            $table->foreign('state_id')
                ->references('state_id') // Referencing `state_id` column in states
                ->on('states')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
        Schema::dropIfExists('states');
        Schema::dropIfExists('countries');
    }
};
