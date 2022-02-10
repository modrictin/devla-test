<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CountriesAndCurrencies extends Migration
{
    public function up()
    {
        Schema::table('', function (Blueprint $table) {
            DB::unprepared(file_get_contents('database/raw/countries.sql'));
            DB::unprepared(file_get_contents('database/raw/currencies.sql'));
        });
    }

    public function down()
    {
        Schema::table('', function (Blueprint $table) {
            //
        });
    }
}
