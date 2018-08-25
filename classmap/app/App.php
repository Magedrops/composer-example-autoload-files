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
        $render = new \MageDrops\RenderManager;

        $args = [
            'name' => 'john due',
            'city' => 'São Paulo'
        ];

        print $render->render('index', $args);
    }
}