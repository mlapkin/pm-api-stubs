<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for registering permissions
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_Permissions implements pm_Hook_Interface
{

    const PLACE_MAIN = 'main';

    const PLACE_ADDITIONAL = 'additional';

    /**
     * Retrieve the list of permissions
     *
     * ```php
     * [
     *     'unique_permission_id' => [
     *         'default' => false,
     *         'place' => self::PLACE_MAIN,
     *         'name' => 'Permission name',
     *         'description' => 'Permission description',
     *         'master' => 'master_permission_id',
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getPermissions();

}