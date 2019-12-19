<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetRequirementsFromCareersTableToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('careers', function (Blueprint $table) {
            $table->text('extra')->nullable()->change();
            $table->text('requirements')->change();
            $table->text('responsibilities')->change();
            $table->text('core_competencies')->nullable()->change();
            $table->text('notes')->nullable()->change();
        });
    }
}
