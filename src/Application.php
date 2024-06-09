<?php

namespace myFramework;

use myFrameWork\Support\ServiceProvider;

class Application
{
    private $providers = [];
    public function __construct($providers = []){
        $this->providers = $providers;
        array_walk($this->providers, fn($provider))
    }


}