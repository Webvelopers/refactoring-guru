<?php

use RefactoringGuru\FactoryMethod\RealWorld\SocialNetworkPoster;
use RefactoringGuru\FactoryMethod\RealWorld\FacebookPoster;
use RefactoringGuru\FactoryMethod\RealWorld\LinkedInPoster;

use PHPUnit\Framework\TestCase;

final class RealWorldTest extends TestCase
{
    /**
     * The client code can work with any subclass of SocialNetworkPoster since it
     * doesn't depend on concrete classes.
     */
    private function clientCode(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }

    public function testClientCode(): void
    {
        echo "\n\n";
        echo "Factory Method -> Real World Test";
        echo "\n\n";

        /**
         * During the initialization phase, the app can decide which social network it
         * wants to work with, create an object of the proper subclass, and pass it to
         * the client code.
         */
        echo "Testing ConcreteCreator1:\n";
        $this->clientCode(new FacebookPoster("john_smith", "******"));
        echo "Testing ConcreteCreator2:\n";
        $this->clientCode(new LinkedInPoster("john_smith@example.com", "******"));


        $this->assertInstanceOf(SocialNetworkPoster::class, new FacebookPoster("john_smith", "******"));
        $this->assertInstanceOf(SocialNetworkPoster::class, new LinkedInPoster("john_smith@example.com", "******"));
    }
}
