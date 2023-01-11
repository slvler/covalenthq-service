<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Balance {

        public static function balances_for_address($chain_id,$address)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/address/'.$address.'/balances_v2/');
        return $response->toObject();
    }

    public static function get_historical_portfolio($chain_id,$address)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/address/'.$address.'/portfolio_v2/');
        return $response->toObject();
    }

    public static function get_ERC20_token($chain_id,$address,$contractAddress)
    {
          $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['contract-address' => $contractAddress ,'key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/address/'.$address.'/transfers_v2/');
        return $response->toObject();
    }

    public static function get_token_holders($chain_id,$address)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/tokens/'.$address.'/token_holders/');
        return $response->toObject();
    }

    public static function get_changes_in_token($chain_id,$address,$startingBlock,$endingBlock)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['starting-block' => $startingBlock,'ending-block' => $endingBlock, 'key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/tokens/'.$address.'/token_holders_changes/');
        return $response->toObject();
    }


}
