<?php 
namespace PayTrust\Resources;

class Banking extends Resource
{  
    /**
     * @return \PayTrust\Http\Response
     */
    function bankList()
    {
        $endpoint = "https://api.paytrust88.com/v1/bank";

        return $this->client->request('get', $endpoint, null);
    }
    
    /**
     * @return \PayTrust\Http\Response
     */
    function bankAccountList()
    {
        $endpoint = "https://api.paytrust88.com/v1/account";

        return $this->client->request('get', $endpoint, null);
    } 

    /**
     * @return \PayTrust\Http\Response
     */
    function fxRates()
    {
        $endpoint = "https://api.paytrust88.com/v1/fxrates";

        return $this->client->request('get', $endpoint, null);
    }
}