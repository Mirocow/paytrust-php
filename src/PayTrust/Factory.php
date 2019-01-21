<?php

namespace PayTrust;

use PayTrust\Http\Client;

/**
 * Class Factory
 *
 * @method \PayTrust\Resources\Transaction transaction()
 */
class Factory
{
    /**
     * C O N S T R U C T O R ( ^_^)y
     *
     * @param  array $config An array of configurations. You need at least the 'key'.
     * @param  Client $client
     * @param array $clientOptions options to be send with each request
     * @param bool $wrapResponse wrap request response in own Response object
     */
    public function __construct($config = [], $client = null, $clientOptions = [], $wrapResponse = true)
    {
        $this->client = $client ?: new Client($config, null, $clientOptions, $wrapResponse);
    }

    /**
     * Return an instance of a Resource based on the method called.
     *
     * @param  string  $name
     * @param  array   $arguments
     * @return \PayTrust\Resources\Resource
     */
    function __call($name, $arguments = null)
    {
        $resource = 'PayTrust\\Resources\\' . ucfirst($name);

        return new $resource($this->client);
    }
}
