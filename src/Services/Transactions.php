<?php

namespace Slvler\Covalent\Services;

use Slvler\Covalent\Exception\MissingApiKey;
use Slvler\Covalent\Http\Build;

trait Transactions
{
    public static function get_transactions_address($chain_id, $contractAddress)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/'.$chain_id.'/address/'.$contractAddress.'/transactions_v2/');

        return $response->toObject();
    }

    public static function get_transaction($chain_id, $tx_hash)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/'.$chain_id.'/transaction_v2/'.$tx_hash.'/');

        return $response->toObject();
    }
}
