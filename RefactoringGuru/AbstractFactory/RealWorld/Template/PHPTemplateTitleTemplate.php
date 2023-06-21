<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Template;

class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}
