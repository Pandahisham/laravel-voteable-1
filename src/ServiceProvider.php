<?php

namespace Tshafer\Voteable;

use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider.
     */
    class ServiceProvider extends BaseProvider
    {
        /**
         * @var string
         */
        protected $packageName = 'voteable';

        /**
         *
         */
        public function boot()
        {
            $this->setup(__DIR__)
                 ->publishMigrations();
        }
    }
