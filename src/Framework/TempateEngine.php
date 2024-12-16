<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    public function __construct(private string $basePath) {}

    public function render(string $template, array $date = [])
    {
        include "{$this->basePath}/{$template}";
    }
}
