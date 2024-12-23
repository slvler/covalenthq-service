<?php

namespace Slvler\Covalent\Services;

use Slvler\Covalent\Exception\MissingApiKey;
use Slvler\Covalent\Http\Build;

trait Base
{
    public static function get_block($chain_id, $blockHeight)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/'.$chain_id.'/block_v2/'.$blockHeight.'/');

        return $response->toObject();
    }

    public static function get_block_heights($chain_id, $startDate, $endDate)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/'.$chain_id.'/block_v2/'.$startDate.'/'.$endDate.'/');

        return $response->toObject();
    }

    public static function contract_address($chain_id, $address, $startDate, $endDate)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['starting-block' => $startDate, 'ending-block' => $endDate, 'key' => $apiKey])
            ->get('v1/'.$chain_id.'/events/address/'.$address.'/');

        return $response->toObject();
    }

    public static function topic_hashes($chain_id, $address, $startDate, $endDate, $senderAddress)
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['starting-block' => $startDate, 'ending-block' => $endDate, 'sender-address' => $senderAddress, 'key' => $apiKey])
            ->get('v1/'.$chain_id.'/events/topics/'.$address.'/');

        return $response->toObject();
    }

    public static function get_all_chains()
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/chains/');

        return $response->toObject();
    }

    public static function get_all_chain_statuses()
    {
        $apiKey = config('covalent.covalent.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => $apiKey])
            ->get('v1/chains/status/');

        return $response->toObject();
    }
}
