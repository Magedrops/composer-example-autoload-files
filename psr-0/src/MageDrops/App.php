<?php

namespace MageDrops;

class App
{
    static public function create()
    {
        return new self;
    }

    public function run()
    {
        $render = new \MageDrops\Render;

        $args = [
            'name' => 'john due',
            'city' => 'São Paulo'
        ];

        print $render->template('index', $args);
    }
}