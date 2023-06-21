<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Factory;

use RefactoringGuru\AbstractFactory\RealWorld\Template\TitleTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\PHPTemplateTitleTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\PageTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Template\PHPTemplatePageTemplate;
use RefactoringGuru\AbstractFactory\RealWorld\Renderer\TemplateRenderer;
use RefactoringGuru\AbstractFactory\RealWorld\Renderer\PHPTemplateRenderer;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
