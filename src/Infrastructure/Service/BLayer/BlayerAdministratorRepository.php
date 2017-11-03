<?php

namespace Drupal\domain\Infrastructure\Service\BLayer;

use Drupal\domain\Domain\Administrator\AdministratorRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

final class BlayerAdministratorRepository implements AdministratorRepository
{
    const URL = 'http://api.dev/v1';

    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function administratorOfRut($administratorRut)
    {
        try {
            $response = $this
                ->client
                ->request('GET', self::URL . '/account/administrator/' . $administratorRut);

            return $response->getBody();

        } catch (RequestException $e) {
            return false;
        }
    }
}
