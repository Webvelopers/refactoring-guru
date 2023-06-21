<?php

use RefactoringGuru\FactoryMethod\RealWorld\Poster\SocialNetworkPoster;
use RefactoringGuru\FactoryMethod\RealWorld\Poster\FacebookPoster;
use RefactoringGuru\FactoryMethod\RealWorld\Poster\LinkedInPoster;

use PHPUnit\Framework\TestCase;

final class FactoryMethodRealWorldTest extends TestCase
{
    private function clientCode(SocialNetworkPoster $creator): void
    {
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
    }

    public function testClientCode(): void
    {
        echo "\n\n";
        echo "Factory Method Real World Test";
        echo "\n\n";

        echo "Testing ConcreteCreator1:\n";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "Testing ConcreteCreator2:\n";
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));

        $this->assertInstanceOf(SocialNetworkPoster::class, new FacebookPoster("john_smith", "******"));
        $this->assertInstanceOf(SocialNetworkPoster::class, new LinkedInPoster("john_smith@example.com", "******"));
    }
}
