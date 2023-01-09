<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Balance {

    public static function balance()
    {
        //https://api.covalenthq.com/v1/1/address/demo.eth/balances_v2/?key=ckey_53c8ac62a5a64e929bdacb88514
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('address/demo.eth/balances_v2/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function contract()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('address/0x197e3eCCD00F07B18205753C638c3E59013A92bf/transfers_v2/?contract-address=0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }


}
