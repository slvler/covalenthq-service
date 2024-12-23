<?php

namespace Slvler\Covalent\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Slvler\Covalent\Services\BaseApi;
use Slvler\Covalent\Tests\Unit\TestCase;

class CovalentServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Config::set('covalent.covalent.base_url', 'https://api.covalenthq.com/');
        Config::set('covalent.covalent.api_key', 'ckey_53c8ac62a5a64e929bdacb88514');
    }

    /**
     * @test
     */
    public function test_get_balances_for_address()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getBalancesForAddress('1', 'demo.eth'));
    }

    /**
     * @test
     */
    public function test_get_historical_portfolio()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getHistoricalPortfolio('1', 'demo.eth'));
    }

    /**
     * @test
     */
    public function test_get_er_c20_token()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getERC20token('1', '0x197e3eCCD00F07B18205753C638c3E59013A92bf', '0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48'));
    }

    /**
     * @test
     */
    public function test_get_token_holders()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getTokenHolders('1', '0x3883f5e181fccaf8410fa61e12b59bad963fb645'));
    }

    /**
     * @test
     */
    public function test_get_changes_in_token()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getChangesInToken('1', '0x3883f5e181fccaf8410fa61e12b59bad963fb645', '12500100', '13210000'));
    }

    /**
     * @test
     */
    public function test_get_nft_token_i_ds()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getNFTTokenIDs('1', '0xe4605d46fd0b3f8329d936a8b258d69276cba264'));
    }

    /**
     * @test
     */
    public function test_get_nft_transactions()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getNFTTransactions('1', '0xe4605d46fd0b3f8329d936a8b258d69276cba264', '123'));
    }

    /**
     * @test
     */
    public function test_get_nft_external_metadata()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getNFTExternalMetadata('1', '0xe4605d46fd0b3f8329d936a8b258d69276cba264', '123'));
    }

    /**
     * @test
     */
    public function test_get_transactions_address()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getTransactionsAddress('1', '0xa79E63e78Eec28741e711f89A672A4C40876Ebf3'));
    }

    /**
     * @test
     */
    public function test_get_transaction()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getTransaction('1', '0xbda92389200cadac424d64202caeab70cd5e93756fe34c08578adeb310bba254'));
    }

    /**
     * @test
     */
    public function test_get_block()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getBlock('11297108109', 'latest'));
    }

    /**
     * @test
     */
    public function test_get_block_heights()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getBlockHeights('1', '2021-01-01', '2021-01-03'));
    }

    /**
     * @test
     */
    public function test_get_contract_address()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getContractAddress('1', '0xc0da01a04c3f3e0be433606045bb7017a7323e38', '12115107', '12240004'));
    }

    /**
     * @test
     */
    public function test_get_topic_hashes()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getTopicHashes('1', '0x804c9b842b2748a22bb64b345453a3de7ca54a6ca45ce00d415894979e22897a', '12500000', '12500100', '0x7d2768dE32b0b80b7a3454c06BdAc94A69DDc7A9'));
    }

    /**
     * @test
     */
    public function test_get_all_chains()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getAllChains());
    }

    /**
     * @test
     */
    public function test_getall_chain_statuses()
    {
        $covalenthq = new BaseApi;
        $this->assertIsObject($covalenthq->getallChainStatuses());
    }
}
