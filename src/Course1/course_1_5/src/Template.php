<?php

class Template
{
    public function render($path, $variables): string
    {
        ob_start();
        if ($variables) {
            extract($variables);
        }
        include(__DIR__ . '/../' . $path);

        return ob_get_clean();
    }
}