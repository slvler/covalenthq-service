<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

trait NFT
{

    public static function get_NFT_token_IDs()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/tokens/0xe4605d46fd0b3f8329d936a8b258d69276cba264/nft_token_ids/?key=ckey_53c8ac62a5a64e929bdacb88514');

        return $response->toObject();
    }

    public static function get_NFT_transactions()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/tokens/0xe4605d46fd0b3f8329d936a8b258d69276cba264/nft_transactions/123/?key=ckey_53c8ac62a5a64e929bdacb88514');

        return $response->toObject();
    }

    public static function get_NFT_external_metadata()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/tokens/0xe4605d46fd0b3f8329d936a8b258d69276cba264/nft_metadata/123/?key=ckey_53c8ac62a5a64e929bdacb88514');

        return $response->toObject();
    }

}
