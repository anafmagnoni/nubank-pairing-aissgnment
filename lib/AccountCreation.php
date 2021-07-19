<?php

namespace Nubank\PairingAssignment;

use Nubank\PairingAssignment\Models\Account;

class AccountCreation {

    public Account $account;

    public function createAccount(int $pretended_limit): array {
        if(isset($this->account)) {
            return [
                'account' => [
                    'available-limit' => $this->account->available_limit
                ],
                'violations' => [
                    'account-already-initialized'
                ]
            ];
        }

        $this->account = new Account();
        $this->account->available_limit = $pretended_limit;

        return [
            'account' => [
                'available-limit' => $this->account->available_limit
            ],
            'violations' => []
        ];
    }
}
