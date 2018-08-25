<?php

namespace MageDrops;

class RenderManager
{
    public function render($template, $args = [])
    {
        $file = __DIR__ . "/../view/{$template}.phtml";

        if (!file_exists($file)) {
            return '';
        }

        if (is_array($args)){
            extract($args);
        }

        ob_start();
            include $file;
        return ob_get_clean();
    }
}