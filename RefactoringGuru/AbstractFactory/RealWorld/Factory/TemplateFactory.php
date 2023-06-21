<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Factory;

use RefactoringGuru\AbstractFactory\RealWorld\Template\TitleTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\PageTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Renderer\TemplateRenderer;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
