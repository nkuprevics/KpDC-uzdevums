<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        DB::unprepared(file_get_contents('database/import/kpdc_registrs.sql'));
        DB::unprepared(file_get_contents('database/import/kpdc_registrs_grup.sql'));
        DB::unprepared(file_get_contents('database/import/kpdc_registrs_ind.sql'));
    }

    public function down()
    {
        Schema::dropIfExists('kpdc_registrs');
        Schema::dropIfExists('kpdc_registrs_grup');
        Schema::dropIfExists('kpdc_registrs_ind');
    }
};
