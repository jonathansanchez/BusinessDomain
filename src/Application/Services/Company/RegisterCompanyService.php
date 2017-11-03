<?php

namespace Drupal\business\Application\Services\Company;

use Drupal\business\Application\Services\Company\Request\RegisterRequest;
use Drupal\business\Domain\Address\Address;
use Drupal\business\Domain\Administrator\Administrator;
use Drupal\business\Domain\Administrator\AdministratorRepository;
use Drupal\business\Domain\Company\Company;
use Drupal\business\Domain\Company\CompanyRepository;

final class RegisterCompanyService
{
    private $companyRepository;
    private $administratorRepository;

    public function __construct(CompanyRepository $companyRepository, AdministratorRepository $administratorRepository)
    {
        $this->companyRepository       = $companyRepository;
        $this->administratorRepository = $administratorRepository;
    }

    public function execute(RegisterRequest $request)
    {
        $company = $this->companyRepository->companyOfRut($request->rutCompany());
        if ($company) {
            throw new \Exception("Company already exists.");
        }

        $administrator = $this->administratorRepository->administratorOfRut($request->rutAdministrator());
        if ($administrator) {
            throw new \Exception("Administrator already exists.");
        }

        $address = new Address(
            $request->address(),
            $request->region(),
            $request->city(),
            $request->addressNumber(),
            $request->addressApartment(),
            $request->addressFloor(),
            $request->addressOffice()
        );

        $company = new Company(
            $request->rutCompany(),
            $request->rutImageCompany(),
            $request->name(),
            $request->activity(),
            $request->legalRepresentative(),
            $request->legalRepresentativeEmail(),
            $address
        );

        $administrator = new Administrator(
            $request->rutAdministrator(),
            $request->rutImageAdministrator(),
            $request->rutImageBackAdministrator(),
            $request->email(),
            $request->firstName(),
            $request->lastName(),
            $request->password(),
            $request->phone()
        );

        return $this->companyRepository->register($address, $company, $administrator);
    }
}