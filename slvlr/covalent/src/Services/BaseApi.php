<?php


namespace slvlr\covalent\Services;

class BaseApi{

    use Balance, NFT, Base, Transactions;

    /*
     * Balance
     */
    public function getBalancesForAddress($chain_id,$address)
    {
       return Balance::balances_for_address($chain_id,$address);
    }
    public function getHistoricalPortfolio($chain_id,$address)
    {
        return Balance::get_historical_portfolio($chain_id,$address);
    }
    public function getERC20token($chain_id,$address,$contractAddress)
    {
        return Balance::get_ERC20_token($chain_id,$address,$contractAddress);
    }
    public function getTokenHolders($chain_id, $address)
    {
        return Balance::get_token_holders($chain_id, $address);
    }
    public function getChangesInToken($chain_id,$address,$startingBlock,$endingBlock)
    {
        return Balance::get_changes_in_token($chain_id,$address,$startingBlock,$endingBlock);
    }
    /*
     * NFT
     */
    public function getNFTTokenIDs($chain_id,$contractAddress)
    {
        return NFT::get_NFT_token_IDs($chain_id,$contractAddress);
    }
    public function getNFTTransactions($chain_id,$contractAddress,$token_id)
    {
        return NFT::get_NFT_transactions($chain_id,$contractAddress,$token_id);
    }
    public function getNFTExternalMetadata($chain_id,$contractAddress,$token_id)
    {
        return NFT::get_NFT_external_metadata($chain_id,$contractAddress,$token_id);
    }
    /*
     * Transactions
     */
    public function getTransactionsAddress($chain_id,$contractAddress)
    {
        return Transactions::get_transactions_address($chain_id,$contractAddress);
    }
    public function getTransaction($chain_id,$tx_hash)
    {
        return Transactions::get_transaction($chain_id,$tx_hash);
    }
    /*
     * Base
     */
    public function getBlock($chain_id,$blockHeight)
    {
        return Base::get_block($chain_id,$blockHeight);
    }

    public function getBlockHeights($chain_id,$startDate,$endDate)
    {
        return Base::get_block_heights($chain_id,$startDate,$endDate);
    }

    public function getContractAddress($chain_id,$address,$startDate,$endDate)
    {
        return Base::contract_address($chain_id,$address,$startDate,$endDate);
    }

    public function getTopicHashes($chain_id,$address,$startDate,$endDate,$senderAddress)
    {
        return Base::topic_hashes($chain_id,$address,$startDate,$endDate,$senderAddress);
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
