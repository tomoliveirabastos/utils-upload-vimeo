<?php

namespace App;

use Dotenv\Dotenv;

class Variable
{
    public function __construct(string $pathDir)
    {
        
        $this->pathDir = $pathDir;
        $this->buildDotenv();

        $this->client = $_ENV['CLIENTE_ID'];
        $this->secrets = $_ENV['CLIENTE_SECRET'];
        $this->accessToken = $_ENV['ACCESS_TOKEN'];
        $this->scope = "public";
    }

    private function buildDotenv()
    {
        $dotenv = Dotenv::createImmutable($this->pathDir);
        $dotenv->load();
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function getClientId(): string
    {
        return $this->client;
    }

    public function getSecretId(): string
    {
        return $this->secrets;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
