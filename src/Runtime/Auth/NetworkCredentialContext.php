<?php

namespace SharePoint\PHP\Client;

require_once('IAuthenticationContext.php');
require_once(__DIR__ . '/../Utilities/UserCredentials.php');

/**
 * Provides credentials for password-based authentication schemes such
 * as basic, digest, NTLM, and Kerberos authentication.
 */
class NetworkCredentialContext implements IAuthenticationContext
{

    /**
     * @var array
     */
    //private $cachedCookies = array();

    /**
     * @var UserCredentials
     */
    private $userCredentials;


    /**
     * @var int
     */
    public $AuthType;

    /**
     * NetworkCredentialContext constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password){
        $this->userCredentials = new UserCredentials($username,$password);
        $this->AuthType = CURLAUTH_BASIC; //default Auth schema
    }

    public function authenticateRequest(RequestOptions $options)
    {
        $options->AuthType = $this->AuthType;
        $options->UserCredentials = $this->userCredentials;
    }

}