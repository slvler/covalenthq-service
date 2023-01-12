# slvler - covalenthq Service
<!--
[![Latest Stable Version](http://poser.pugx.org/slvler/ether/v)](https://packagist.org/packages/slvler/ether)
[![License](https://img.shields.io/github/license/slvler/etherscan-service)](https://packagist.org/packages/slvler/ether)
-->


An api service for covalenthq.com


## Installation

To install this package tou can use composer:

```bash
    composer require slvler/covalent
```

## Usage

- First, you should extract the config/covalent.php file to the config folder.

```php
    php artisan vendor:publish --tag=covalenthq
```

- API key to be obtained from covalenthq.com address should be declared.

```php
    'covalent' => [
        'base_url' => 'https://api.covalenthq.com/',
        'api_key' => 'XXXXXXXXXXXXXXXXXXXXXXXX'
    ]
```

- This is how you can connect to the covalenthq service.
```php
    $covalenthq = new BaseApi();
```

- Given chain_id and wallet address, return current token balances along with their spot prices. This endpoint supports a variety of token standards like ERC20, ERC721 and ERC1155.
```php
    $covalenthq->getBalancesForAddress('1','demo.eth');
```
- Given chain_id and wallet address , return wallet value for the last 30 days at 24 hour interval timestamps.
```php
    $covalenthq->getHistoricalPortfolio('1','demo.eth');
```
- Given chain_id, wallet address and contract-address , return all ERC20 token contract transfers along with their historical prices at the time of their transfer.
```php
    $covalenthq->getERC20token('1','0x197e3eCCD00F07B18205753C638c3E59013A92bf','0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48');
```
- Given chain_id and wallet address, return a paginated list of token holders. If block-height is omitted, the latest block is used.
```php
    $covalenthq->getTokenHolders('1','0x3883f5e181fccaf8410fa61e12b59bad963fb645');
```
- Given chain_id and wallet address, return a paginated list of token holders and their current/historical balances, where the token balance of the token holder changes between starting-block and ending-block.
```php
    $covalenthq->getChangesInToken('1','0x3883f5e181fccaf8410fa61e12b59bad963fb645','12500100','13210000');
```


- Given chain_id and contract_address, return a list of all token IDs for the NFT contract on the blockchain.
```php
    $covalenthq->getNFTTokenIDs('1','0xe4605d46fd0b3f8329d936a8b258d69276cba264');
```
- Given chain_id,contract_address and token_id, return a list of transactions.
```php
    $covalenthq->getNFTTransactions('1','0xe4605d46fd0b3f8329d936a8b258d69276cba264','123');
```
- Given chain_id, contract_address and token_id, fetch and return the external metadata. Both ERC721 as well as ERC1155 standards are supported.
```php
    $covalenthq->getNFTExternalMetadata('1','0xe4605d46fd0b3f8329d936a8b258d69276cba264','123');
```


- Given chain_id and wallet address, return all transactions along with their decoded log events. This endpoint does a deep-crawl of the blockchain to retrieve all kinds of transactions that references the address including indexed topics within the event logs.
```php
     $covalenthq->getTransactionsAddress('1','0xa79E63e78Eec28741e711f89A672A4C40876Ebf3');
```
- Given chain_id and tx_hash, return the transaction data with their decoded event logs.
```php
     $covalenthq->getTransaction('1','0xbda92389200cadac424d64202caeab70cd5e93756fe34c08578adeb310bba254');
```


- Given chain_id and block_height, return a single block at block_height. If block_height is set to the value latest, return the latest block available.
```php
    $covalenthq->getBlock('11297108109','latest');
```
- Given chain_id, start_date and end_date, return all the block height(s) of a particular chain within a date range. If the end_date is set to latest, return every block height from the start_date to now.
```php
    $covalenthq->getBlockHeights('1','2021-01-01','2021-01-03');
```
- Given chain_id and contract address, return a paginated list of decoded log events emitted by a particular smart contract.
```php
    $covalenthq->getContractAddress('1','0xc0da01a04c3f3e0be433606045bb7017a7323e38','12115107','12240004');
```
- Given chain_id and topic hash(es), return a paginated list of decoded log events with one or more topic hashes separated by a comma.
```php
    $covalenthq->getTopicHashes('1','0x804c9b842b2748a22bb64b345453a3de7ca54a6ca45ce00d415894979e22897a','12500000','12500100','0x7d2768dE32b0b80b7a3454c06BdAc94A69DDc7A9');
```
- Returns a list of all chains.
```php
    $covalenthq->getAllChains();
```
- Returns a list of all chain statuses.
```php
    $covalenthq->getallChainStatuses();
```





### Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)


## License

The MIT License (MIT). Please see [License File](https://github.com/hs-qwerty/TMDB/blob/main/LICENSE.md) for more information.
