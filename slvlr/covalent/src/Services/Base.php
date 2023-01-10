<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Base{

    public static function get_block()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/11297108109/block_v2/latest/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_block_heights()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/block_v2/2021-01-01/2021-01-03/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function contract_address()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/events/address/0xc0da01a04c3f3e0be433606045bb7017a7323e38/?starting-block=12115107&ending-block=12240004&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function topic_hashes()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/1/events/topics/0x804c9b842b2748a22bb64b345453a3de7ca54a6ca45ce00d415894979e22897a/?starting-block=12500000&ending-block=12500100&sender-address=0x7d2768dE32b0b80b7a3454c06BdAc94A69DDc7A9&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_all_chains()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/chains/?quote-currency=USD&format=JSON&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

    public static function get_all_chain_statuses()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/chains/status/?quote-currency=USD&format=JSON&key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

}
