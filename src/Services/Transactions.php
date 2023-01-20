<?php

namespace slvler\covalent\Services;

use slvler\covalent\Http\Build;

trait Transactions
{
    public static function get_transactions_address($chain_id, $contractAddress)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => config('covalent.covalent.api_key')])
            ->get('v1/'.$chain_id.'/address/'.$contractAddress.'/transactions_v2/');

        return $response->toObject();
    }

    public static function get_transaction($chain_id, $tx_hash)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => config('covalent.covalent.api_key')])
            ->get('v1/'.$chain_id.'/transaction_v2/'.$tx_hash.'/');

        return $response->toObject();
    }
}
