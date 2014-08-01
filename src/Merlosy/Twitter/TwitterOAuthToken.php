<?php
namespace Twitter;

class TwitterOAuthToken {
    // access tokens and request tokens
    public $key;
    public $secret;

    /**
     * @param key String the Access Token
     * @param secret String the Access Token secret
     */
    function __construct($key, $secret) {
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
    * generates the basic string serialization of a token that a server
    * would respond to request_token and access_token calls with
    */
    function to_string() {
        return "oauth_token=" .
            TwitterOAuthUtil::urlencode_rfc3986($this->key) .
            "&oauth_token_secret=" .
            TwitterOAuthUtil::urlencode_rfc3986($this->secret);
    }

    function __toString() {
        return $this->to_string();
    }
}