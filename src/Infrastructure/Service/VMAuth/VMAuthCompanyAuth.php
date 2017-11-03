<?php

namespace Drupal\business\Infrastructure\Service\VMAuth;

use Drupal\business\Domain\Company\CompanyAuth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class VMAuthCompanyAuth implements CompanyAuth
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
    public function authenticate(string $companyRut, string $administratorRut, string $password)
    {
        try {
            $response = $this
                ->client
                ->request('POST', self::URL . '/', [
                'json' => [
                    'business'      => $companyRut,
                    'administrator' => $administratorRut,
                    'password'      => $password
                ]
            ]);

            return $response->getBody();

        } catch (RequestException $e) {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        unset($_SESSION);
    }
}
