<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Base{

    public static function get_block($chain_id,$blockHeight)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/block_v2/'.$blockHeight.'/');
        return $response->toObject();
    }

    public static function get_block_heights($chain_id,$startDate,$endDate)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/block_v2/'.$startDate.'/'.$endDate.'/');
        return $response->toObject();
    }

    public static function contract_address($chain_id,$address,$startDate,$endDate)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['starting-block' => $startDate, 'ending-block' => $endDate, 'key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/events/address/'.$address.'/');
        return $response->toObject();
    }

    public static function topic_hashes($chain_id,$address,$startDate,$endDate,$senderAddress)
    {
          $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['starting-block' => $startDate, 'ending-block' => $endDate,'sender-address' => $senderAddress, 'key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/events/topics/'.$address.'/');
        return $response->toObject();
    }

    public static function get_all_chains()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/chains/');
        return $response->toObject();
    }

    public static function get_all_chain_statuses()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/chains/status/');
        return $response->toObject();
    }

}
