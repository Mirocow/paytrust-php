<?php 
namespace PayTrust\Resources;

class Payout extends Resource
{  
    /**
     * @param array $params Array of payout start.
     * @return \PayTrust\Http\Response
     */
    function start($params)
    {
        $endpoint = "https://api.paytrust88.com/v1/payout/start";

        $options['json'] = $params;

        return $this->client->request('post', $endpoint, $options);
    }
    
    /**
     * @param array $params Array of payout status.
     * @return \PayTrust\Http\Response
     */
    function status($params = [])
    {
        $endpoint = "https://api.paytrust88.com/v1/payout/status";

        $queryString = build_query_string($params);

        return $this->client->request('get', $endpoint, [], $queryString);
    }  
}