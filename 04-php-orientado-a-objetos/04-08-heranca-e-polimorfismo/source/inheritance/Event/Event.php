<?php

namespace Source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    /**
     * Event constructor.
     *
     * @param $event
     * @param \DateTime $date
     * @param $price
     * @param $vacancies
     */
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email)
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, as vagas esgotaram!</p>";
        }
    }

    /**
     * Set the value of register
     */
    protected function setRegister($fullName, $email): void
    {
        $this->register = [
            'name' => $fullName,
            'email' => $email
        ];
    }

    /**
     * Get the value of event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date->format('d/m/Y H:i');
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return number_format($this->price, 2, ',', '.');
    }

    /**
     * Get the value of register
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Get the value of vacancies
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }
}
