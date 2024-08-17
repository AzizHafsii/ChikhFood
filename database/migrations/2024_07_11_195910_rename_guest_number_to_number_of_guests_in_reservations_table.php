<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class RenameGuestNumberToNumberOfGuestsInReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Supprimer la colonne si elle existe déjà
            if (Schema::hasColumn('reservations', 'number_of_guests')) {
                $table->dropColumn('number_of_guests');
            }
        });

        Schema::table('reservations', function (Blueprint $table) {
            // Ajouter la nouvelle colonne
            $table->integer('number_of_guests')->after('phone');
        });

        // Copier les données de l'ancienne colonne vers la nouvelle colonne
        if (Schema::hasColumn('reservations', 'guest_number')) {
            DB::statement('UPDATE reservations SET number_of_guests = guest_number');
            Schema::table('reservations', function (Blueprint $table) {
                $table->dropColumn('guest_number');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Ajouter à nouveau l'ancienne colonne
            $table->integer('guest_number')->after('phone');
        });

        // Copier les données de la nouvelle colonne vers l'ancienne colonne
        DB::statement('UPDATE reservations SET guest_number = number_of_guests');

        Schema::table('reservations', function (Blueprint $table) {
            // Supprimer la nouvelle colonne
            $table->dropColumn('number_of_guests');
        });
    }
}