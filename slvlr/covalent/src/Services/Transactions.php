<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

trait Transactions
{
    public static function get_transactions_address()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/address/0xa79E63e78Eec28741e711f89A672A4C40876Ebf3/transactions_v2/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_transaction()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/transaction_v2/0xbda92389200cadac424d64202caeab70cd5e93756fe34c08578adeb310bba254/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }





}
