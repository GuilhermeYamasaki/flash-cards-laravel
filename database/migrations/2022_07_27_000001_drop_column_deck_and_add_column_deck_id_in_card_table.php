<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DropColumnDeckAndAddColumnDeckIdInCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('cards')->delete();
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('deck');
            $table->foreignId('deck_id')->constrained('decks')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('deck')->nullable();
            $table->dropForeign(['deck_id']);
            $table->dropColumn('deck_id');
        });
    }
}
