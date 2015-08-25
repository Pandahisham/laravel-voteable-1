<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    /**
     * Class CreateVotesTable.
     */
    class CreateVotesTable extends Migration
    {

        public function up()
        {
            Schema::create( 'votes', function ( Blueprint $table ) {
                $table->increments( 'id' );
                $table->integer( 'vote_id' )->unsigned()->index();
                $table->morphs( 'voteable' );
                $table->integer( 'value' );
                $table->timestamps();
            } );
        }

        public function down()
        {
            Schema::dropIfExists( 'votes' );
        }
    }
