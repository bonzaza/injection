<?php

namespace SimpleInjection;

class DataClass
{
    protected $data;

    public function __construct()
    {
        $this->data = 'secret';
    }

    public function getData(): string
    {
        return $this->data;
    }
}
