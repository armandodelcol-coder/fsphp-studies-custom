<?php

namespace Source\Traits;

class Register
{
    use UserTrait;
    use AddressTrait;

    public function __construct(User $user, Address $address)
    {
        $this->setUser($user);
        $this->setAddress($address);
        $this->save();
    }

    private function save()
    {
        $this->user->id = 231;
        $this->address->useId = $this->user->id;
    }
}
