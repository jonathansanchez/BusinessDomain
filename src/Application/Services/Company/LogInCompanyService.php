<?php

namespace Drupal\business\Application\Services\Company;

use Drupal\business\Application\Services\Company\Request\AuthRequest;
use Drupal\business\Domain\Company\CompanyAuth;
use Drupal\business\Domain\Company\CompanyRepository;

final class LogInCompanyService
{
    private $companyRepository;

    private $companyAuth;

    public function __construct(CompanyRepository $companyRepository, CompanyAuth $companyAuth)
    {
        $this->companyRepository = $companyRepository;
        $this->companyAuth       = $companyAuth;
    }

    public function execute(AuthRequest $request)
    {
        $companyRut = $request->companyRut();

        $company = $this->companyRepository->companyOfRut($companyRut);
        if (empty($company)) {
            throw new \Exception("Company doesn't exist.");
        }

        $this->companyAuth->authenticate(
            $request->companyRut(),
            $request->administratorRut(),
            $request->password()
        );
    }
}