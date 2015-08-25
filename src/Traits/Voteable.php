<?php

    namespace Tshafer\Voteable\Traits;

    use Tshafer\Voteable\Models\Vote;

    /**
     * Class Voteable.
     */
    trait Voteable
    {

        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany
         */
        public function votes()
        {
            return $this->morphMany( Vote::class, 'voteable' );
        }
    }
