<?php

namespace Source\Models;

class UserModel extends Model
{
    /** @var array $safe no update or create */
    protected static $safe = ['id', 'created_at', 'updated_at'];

    /** @var string $entity database table */
    protected static $entity = 'users';

    public function bootstrao()
    {
        # code...
    }

    public function load($id)
    {
        # code...
    }

    public function find($email)
    {
        # code...
    }

    public function all($limit = 30, $offset = 0)
    {
        # code...
    }

    public function save()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }

    private function required()
    {
        # code...
    }
}
