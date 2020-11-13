<?php

namespace Source\Related;

class Company
{
    private $company;
    /**
     * @var Address
     */
    private $address;
    private $team;
    private $products;

    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }

    /**
     * Get the value of company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * Get the value of team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Get the value of product
     *
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
