<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\AccountCreation;

class SendAccountCreations extends Command
{
    protected $signature = 'account:send-creations';
    protected $description = 'Send new account creations to endpoint every 5 minutes';

    public function handle()
    {
        $accounts = AccountCreation::all();

        foreach ($accounts as $account) {

            $code = 000027;
            $m_key = $account->m_key;
            $tremail = $account->email;
            $amtt = 0;
            $woven_details = woven_create($amtt, $code, $tremail, $m_key) ?? null;


            if ($woven_details['account_no'] != "Try_Again") {
                $account->delete();
                $this->info("Account ID {$account->id} sent and deleted.");
            } else {
                $this->error("Failed to send Account ID");
            }
        }

        return 0;
    }
}
