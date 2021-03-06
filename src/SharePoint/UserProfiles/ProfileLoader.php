<?php

namespace SharePoint\PHP\Client\UserProfiles;


use SharePoint\PHP\Client\ClientRuntimeContext;
use SharePoint\PHP\Client\ClientObject;
use SharePoint\PHP\Client\ResourcePathEntity;

/**
 * Provides an alternate entry point to user profiles rather than calling methods directly.
 */
class ProfileLoader extends ClientObject
{

    public function __construct(ClientRuntimeContext $ctx)
    {
        parent::__construct($ctx,new ResourcePathEntity($ctx,null,"sp.UserProfiles.profileloader"));
    }




}