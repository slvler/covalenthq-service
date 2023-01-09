<?php

namespace slvlr\covalent\Services;

use slvlr\covalent\Http\Build;

Trait Base{

    public static function blockLatest()
    {
        $response = Build::build()
            ->baseUrl(config('covalent.covalent.base_url'))
            ->get('v1/11297108109/block_v2/latest/?key=ckey_53c8ac62a5a64e929bdacb88514');
        return $response->toObject();
    }

}
