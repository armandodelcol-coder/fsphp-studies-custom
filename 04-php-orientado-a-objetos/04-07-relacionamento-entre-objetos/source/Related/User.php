<?php

namespace Source\Related;

class User
{
    private $job;
    private $name;
    private $lastName;

    public function __construct($job, $name, $lastName)
    {
        $this->job = $job;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    /**
     * Get the value of job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}
