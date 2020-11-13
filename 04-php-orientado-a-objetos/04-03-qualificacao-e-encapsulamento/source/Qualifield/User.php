<?php

namespace Source\Qualifield;

class User
{
    private string $firstName;
    private string $lastName;
    private string $email;

    private string $error;

    /**
     * @param [type] $firstName
     * @param [type] $lastName
     * @param [type] $email
     * @return boolean
     */
    public function setUser(string $firstName, string $lastName, string $email): bool
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        if (!$this->setEmail($email)) {
            $this->error = "O email {$email} não é válido!";
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Get FirstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set FirstName
     *
     * @param string $firstName
     * @return void
     */
    private function setFirstName(string $firstName): void
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * Get LastName
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set LastName
     *
     * @param string $lastName
     * @return void
     */
    private function setLastName(string $lastName): void
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return bool
     */
    private function setEmail(string $email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }
    }
}
