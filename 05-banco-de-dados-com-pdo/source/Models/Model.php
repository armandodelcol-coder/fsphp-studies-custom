<?php

namespace Source\Models;

abstract class Model
{
    /** @var object|nulll */
    protected $data;

    /** @var \PDOException */
    protected $fail;

    /** @var string|null */
    protected $message;

    /**
     * @return object|null
     */
    public function data(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException|null
     */
    public function fail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return string|null
     */
    public function message(): ?string
    {
        return $this->message;
    }

    protected function create()
    {
        # code...
    }

    protected function read()
    {
        # code...
    }

    protected function update()
    {
        # code...
    }

    protected function delete()
    {
        # code...
    }

    protected function safe(): ?array
    {
        # code...
    }

    private function filter()
    {
        # code...
    }
}
