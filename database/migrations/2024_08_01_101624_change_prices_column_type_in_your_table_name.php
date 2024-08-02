<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


 public function up()
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            // Change the 'prices' column type to VARCHAR
            $table->string('prices', 255)->change();
        });
    }

    public function down()
    {
        Schema::table('your_table_name', function (Blueprint $table) {
            // Revert the 'prices' column back to DECIMAL
            $table->decimal('prices', 8, 2)->change();
        });
    }



};
