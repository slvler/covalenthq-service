<?php


namespace slvlr\covalent\Services;

class BaseApi{

    use Balance, Address, Base;

    public function getBalance()
    {
       return Balance::balance();
    }
    public function getContract()
    {
        return Balance::contract();
    }
    public function getAddres()
    {
        return Address::address();
    }


    /*
     * Base
     */

    public function getBlockLatest()
    {
        return Base::blockLatest();
    }


}
