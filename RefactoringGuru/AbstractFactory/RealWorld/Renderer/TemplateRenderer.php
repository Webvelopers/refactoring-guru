<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Renderer;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}
