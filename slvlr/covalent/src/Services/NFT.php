<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

trait NFT
{

    public static function get_NFT_token_IDs($chain_id,$contractAddress)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/tokens/'.$contractAddress.'/nft_token_ids/');

        return $response->toObject();
    }

    public static function get_NFT_transactions($chain_id,$contractAddress,$token_id)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/tokens/'.$contractAddress.'/nft_transactions/'.$token_id.'/');

        return $response->toObject();
    }

    public static function get_NFT_external_metadata($chain_id,$contractAddress,$token_id)
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->query(['key' => 'ckey_53c8ac62a5a64e929bdacb88514'])
            ->get('v1/'.$chain_id.'/tokens/'.$contractAddress.'/nft_metadata/'.$token_id.'/');
        return $response->toObject();
    }

}
