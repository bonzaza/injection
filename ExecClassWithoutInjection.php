<?php

namespace SimpleInjection;

class ExecClassWithoutInjection
{
    protected $client;

    public function __construct()
    {
        $this->client = new DataClass();
    }

    public function exec(): string
    {
        return $this->client->getData();
    }
}
