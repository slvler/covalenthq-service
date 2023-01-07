<?php

namespace slvlr\covalent\Services;



class CovalentService{

    public function __construct()
    {
        //$this->base_url = config('etherscan.ether.etherscan_url');
        //$this->api_key = config('etherscan.ether.etherscan_key');
        $this->base_url = 'https://api.covalenthq.com/v1/1/block_v2/5000000/';
        $this->api_key = 'ckey_53c8ac62a5a64e929bdacb88514';

        $this->client = new \GuzzleHttp\Client(
            ['base_uri' => $this->base_url]
        );
    }


}
