<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

trait Address
{

    public static function address()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('address/demo.eth/balances_v2/?key=ckey_53c8ac62a5a64e929bdacb88514');

        return $response->toObject();
    }

}
