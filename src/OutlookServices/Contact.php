<?php

/**
 * A contact, which is an item in Outlook for users to organize and save information about the people and organizations
 * that they communicate with. Contacts are contained in contact folders.
 */
class Contact extends \SharePoint\PHP\Client\ClientObject
{


    /**
     * @var string
     */
    public $GivenName;


    /**
     * @var string
     */
    public $Surname;


    /**
     * @var string
     */
    public $JobTitle;


    /**
     * @var string
     */
    public $Department;


    /**
     * @var array
     */
    public $BusinessPhones;


    /**
     * @var string
     */
    public $MobilePhone1;


    /**
     * @var array
     */
    public $EmailAddresses;



}