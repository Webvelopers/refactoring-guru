<?php

use RefactoringGuru\AbstractFactory\RealWorld\Page;
use RefactoringGuru\AbstractFactory\RealWorld\Factory\PHPTemplateFactory;
use RefactoringGuru\AbstractFactory\RealWorld\Factory\TwigTemplateFactory;
use RefactoringGuru\AbstractFactory\RealWorld\Factory\TemplateFactory;

use PHPUnit\Framework\TestCase;

final class AbstractFactoryRealWorldTest extends TestCase
{
    public function testPage(): void
    {
        echo "\n\n";
        echo "Abstract Factory Real World Test";
        echo "\n\n";

        /**
         * Now, in other parts of the app, the client code can accept factory objects of
         * any type.
         */
        $page = new Page('Sample page', 'This is the body.');

        echo "Testing actual rendering with the PHPTemplate factory:\n";
        echo $page->render(new PHPTemplateFactory()) . "\n";

        echo "Testing rendering with the Twig factory:\n";
        echo $page->render(new TwigTemplateFactory());

        $this->assertInstanceOf(TemplateFactory::class, new PHPTemplateFactory());
        $this->assertInstanceOf(TemplateFactory::class, new TwigTemplateFactory());
    }
}
