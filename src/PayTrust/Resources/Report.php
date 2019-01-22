<?php 
namespace PayTrust\Resources;

class Report extends Resource
{  
    /**
     * @return \PayTrust\Http\Response
     */
    function balance()
    {
        $endpoint = "https://api.paytrust88.com/v1/report/balance";

        return $this->client->request('get', $endpoint, null);
    }  

    /**
     * @param array $params Array of required parameters ['period_start', 'period_end'] (format : YYYY-MM-DD)
     * @return \PayTrust\Http\Response
     */
    function volume($params)
    {
        $endpoint = "https://api.paytrust88.com/v1/report/volume";

        $queryString = build_query_string($params);

        return $this->client->request('get', $endpoint, $queryString);
    }
}