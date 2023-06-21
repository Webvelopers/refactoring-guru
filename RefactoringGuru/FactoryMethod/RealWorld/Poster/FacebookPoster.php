<?php

namespace RefactoringGuru\FactoryMethod\RealWorld\Poster;

use RefactoringGuru\FactoryMethod\RealWorld\Connector\FacebookConnector;
use RefactoringGuru\FactoryMethod\RealWorld\Connector\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
