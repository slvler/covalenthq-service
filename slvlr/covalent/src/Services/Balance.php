<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Balance {

    public static function balances_for_address()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/address/demo.eth/balances_v2/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_historical_portfolio()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/address/demo.eth/portfolio_v2/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_ERC20_token()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/address/0x197e3eCCD00F07B18205753C638c3E59013A92bf/transfers_v2/?contract-address=0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_token_holders()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/tokens/0x3883f5e181fccaf8410fa61e12b59bad963fb645/token_holders/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_changes_in_token()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/tokens/0x3883f5e181fccaf8410fa61e12b59bad963fb645/token_holders_changes/?starting-block=12500100&ending-block=13210000&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }


}
