<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    private array $globalTemplateData = [];

    public function __construct(private string $basePath) {}

    public function render(string $template, array $data = [])
    {
        extract($data, EXTR_SKIP);

        include "{$this->basePath}/{$template}";
    }
}
