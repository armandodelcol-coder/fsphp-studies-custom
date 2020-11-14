<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;

class AccountCurrent extends Account
{
    protected $limit;

    public function __construct($branch, $account, User $client, $balance, $limit = 500)
    {
        parent::__construct($branch, $account, $client, $balance);
        $this->limit = $limit;
    }

    public function deposit($value)
    {
        $this->balance += $value;
        Trigger::show("Depósito de {$this->toBrl($value)} realizado com sucesso!", Trigger::ACCEPT);
    }

    final public function withDraw($value)
    {
        if (($this->balance + $this->limit) >= $value) {
            $this->balance -= abs($value);
            Trigger::show("Saque de {$this->toBrl($value)} realziado com sucesso", Trigger::ERROR);

            if ($this->balance < 0) {
                $tax = abs($this->balance) * 0.006;
                $this->balance -= $tax;
                Trigger::show("Taxa de uso de limite: {$this->toBrl($tax)}", Trigger::WARNING);
            }
        } else {
            $saving = $this->balance + $this->limit;
            Trigger::show("Saldo insuficiente, você tem {$this->toBrl($saving)}", Trigger::WARNING);
        }
    }
}
