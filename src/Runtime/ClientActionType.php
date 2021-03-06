<?php

namespace SharePoint\PHP\Client;

/**
 * Action type
 */
abstract class ClientActionType
{
    const ReadEntity = 1;
    const CreateEntity = 2;
    const UpdateEntity = 4;
    const DeleteEntity = 8;
    const PostMethod = 16;
    const GetMethod = 32;
}