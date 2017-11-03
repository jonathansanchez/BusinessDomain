<?php

namespace Drupal\domain\Infrastructure\Service\BLayer;

use Drupal\domain\Domain\Address\Address;
use Drupal\domain\Domain\Address\AddressDTO;
use Drupal\domain\Domain\Administrator\Administrator;
use Drupal\domain\Domain\Administrator\AdministratorDTO;
use Drupal\domain\Domain\Company\Company;
use Drupal\domain\Domain\Company\CompanyDTO;
use Drupal\domain\Domain\Company\CompanyRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

final class BlayerCompanyRepository implements CompanyRepository
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
    public function authenticate(string $companyRut, string $administratorRut, string $password) { }

    /**
     * {@inheritdoc}
     */
    public function register(Address $address, Company $company, Administrator $administrator)
    {
        /*print_r(
            json_encode([
                'company'       => new CompanyDTO($company, new AddressDTO($address)),
                'administrator' => new AdministratorDTO($administrator)
            ])
        );
        exit();*/
        try {
            $response = $this
                ->client
                ->request('POST', self::URL . '/account', [
                    'json' => [
                        'company'       => new CompanyDTO($company, new AddressDTO($address)),
                        'administrator' => new AdministratorDTO($administrator)
                    ]

                ]);

            return $response->getStatusCode();

        } catch (RequestException $e) {
            return $e->getCode();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function edit(Address $address, Company $company, Administrator $administrator)
    {
        try {
            $response = $this
                ->client
                ->request('POST', self::URL . '/account/' . $company->rut(), [
                    'json' => [
                        'company'       => new CompanyDTO($company, new AddressDTO($address)),
                        'administrator' => new AdministratorDTO($administrator)
                    ]

                ]);

            return $response->getStatusCode();

        } catch (RequestException $e) {
            return $e->getCode();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function companyOfRut($companyRut)
    {
        try {
            $response = $this
                ->client
                ->request('GET', self::URL . '/account/' . $companyRut);

            //Aqui debería construir el objeto Company con los datos entregados por el servicio
            return $response->getBody();

        } catch (RequestException $e) {
            return false;
        }
    }
}
