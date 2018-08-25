<?php

namespace MageDrops;

class Render
{
    public function template($template, $args = [])
    {
        $file = __DIR__ . "/view/{$template}.phtml";

        if (!file_exists($file)) {
            throw new Exception("Template not found: {$file}");
        }

        if (is_array($args)){
            extract($args);
        }

        ob_start();
            include $file;
        return ob_get_clean();
    }
}