<?php


namespace slvlr\covalent\Services;

class BaseApi{

    use Balance, NFT, Base, Transactions;


    /*
     * Balance
     */
    public function getBalancesForAddress()
    {
       return Balance::balances_for_address();
    }
    public function getHistoricalPortfolio()
    {
        return Balance::get_historical_portfolio();
    }
    public function getERC20token()
    {
        return Balance::get_ERC20_token();
    }
    public function getTokenHolders()
    {
        return Balance::get_token_holders();
    }
    public function getChangesInToken()
    {
        return Balance::get_changes_in_token();
    }

    /*
     * NFT
     */


    public function getNFTTokenIDs()
    {
        return NFT::get_NFT_token_IDs();
    }
    public function getNFTTransactions()
    {
        return NFT::get_NFT_transactions();
    }
    public function getNFTExternalMetadata()
    {
        return NFT::get_NFT_external_metadata();
    }

    /*
     * Transactions
     */

    public function getTransactionsAddress()
    {
        return Transactions::get_transactions_address();
    }

    public function getTransaction()
    {
        return Transactions::get_transaction();
    }


    /*
     * Base
     */

    public function getBlock()
    {
        return Base::get_block();
    }

    public function getBlockHeights()
    {
        return Base::get_block_heights();
    }

    public function getContractAddress()
    {
        return Base::contract_address();
    }

    public function getTopicHashes()
    {
        return Base::topic_hashes();
    }

    public function getAllChains()
    {
        return Base::get_all_chains();
    }

    public function getallChainStatuses()
    {
        return Base::get_all_chain_statuses();
    }

}
