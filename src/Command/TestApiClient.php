<?php

namespace SgnDev\ContaoCleverreachBundle\Command;

use SgnDev\ContaoCleverreachBundle\Http\Cleverreach\ApiClient;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestApiClient extends Command
{
    /**
     * @var ApiClient
     */
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        parent::__construct();
    }

    protected static $defaultName = 'cleverreach:test-api-client';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->apiClient->testRequest();
        return 1;
    }
}