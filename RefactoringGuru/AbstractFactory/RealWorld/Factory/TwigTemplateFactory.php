<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Factory;

use RefactoringGuru\AbstractFactory\RealWorld\Template\TitleTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\TwigTitleTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\PageTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\TwigPageTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Renderer\TemplateRenderer;
use RefactoringGuru\AbstractFactory\RealWorld\Renderer\TwigRenderer;

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
