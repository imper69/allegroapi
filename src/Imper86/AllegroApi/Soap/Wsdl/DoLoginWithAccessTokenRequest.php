<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class DoLoginWithAccessTokenRequest
{

    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param string $accessToken
     * @param int $countryCode
     * @param string $webapiKey
     */
    public function __construct($accessToken = null, $countryCode = null, $webapiKey = null)
    {
      $this->accessToken = $accessToken;
      $this->countryCode = $countryCode;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
      return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoLoginWithAccessTokenRequest
     */
    public function setAccessToken($accessToken)
    {
      $this->accessToken = $accessToken;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoLoginWithAccessTokenRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoLoginWithAccessTokenRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
