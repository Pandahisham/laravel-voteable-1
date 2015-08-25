<?php

    namespace Tshafer\Voteable;

    use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider
     *
     * @package Tshafer\Voteable
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
            $this->setup( __DIR__ )
                 ->publishMigrations();
        }
    }
