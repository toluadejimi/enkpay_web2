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
//           $accounts = AccountCreation::where('status', 0)->first() ?? null;
//
//           if($accounts != null) {
//
//               $code = "000027";
//               $m_key = $accounts->m_key;
//               $tremail = $accounts->email;
//               $amtt = 0;
//               $woven_details = woven_create($amtt, $code, $tremail, $m_key) ?? null;
//               $this->info("Response from woven_create: " . print_r($woven_details, true));
//
//               if ($woven_details['account_no'] != "Try_Again") {
//                   $accounts->delete();
//                   $this->info("Account ID {$accounts->id} sent and deleted.");
//               } else {
//                   $this->error("Failed to send Account ID {$accounts->id}");
//               }
//
//           }
//




       // return 0;
    }
}
