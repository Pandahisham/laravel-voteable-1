<?php

    namespace Tshafer\Voteable\Contracts;

    /**
     * Interface Voteable.
     */
    interface Voteable
    {

        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphMany
         */
        public function votes();
    }
