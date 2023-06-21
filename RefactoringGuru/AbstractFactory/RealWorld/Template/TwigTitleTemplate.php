<?php

namespace RefactoringGuru\AbstractFactory\RealWorld\Template;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}
