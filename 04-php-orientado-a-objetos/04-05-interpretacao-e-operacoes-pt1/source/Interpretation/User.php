<?php

namespace Source\Interpretation;

class User
{
    private ?string $firstName;
    private ?string $lastName;
    private ?string $email;

    public function __construct($firstName, $lastName, $email = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __clone()
    {
        $this->firstName = null;
        $this->lastName = null;
        $this->email = null;

        echo "<p class='trigger'>Clonou!</p>";
    }

    public function __destruct()
    {
        var_dump($this);
        echo "<p class='trigger accepts'>Objeto {$this->firstName} foi destruído</p>";
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
    public function setFirstName(string $firstName): void
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
    public function setLastName(string $lastName): void
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
    public function setEmail(string $email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }
    }
}
