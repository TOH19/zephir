<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2017 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | https://zephir-lang.com/license.html                                     |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

namespace Zephir\Variable;

/**
 * Zephir\Variable\Globals
 *
 * Represents a central knowledge base on global variables.
 *
 * @package Zephir\Variable
 */
class Globals
{
    /**
     * The variables passed to the current script via the URL parameters.
     */
    const GET = '_GET';

    /**
     * The variables passed to the current script via the HTTP POST method.
     */
    const POST = '_POST';

    /**
     * An array in which the environment variable names are element keys,
     * and the environment variable value strings are element values.
     */
    const ENV = '_ENV';

    /**
     * The variables passed to the current script via HTTP Cookies.
     */
    const COOKIE = '_COOKIE';

    /**
     * Server and execution environment information, such as headers, paths, and script locations.
     */
    const SERVER = '_SERVER';

    /**
     * The session variables available to the current script.
     */
    const SESSION = '_SESSION';

    /**
     * By default contains the contents of $_COOKIE, $_GET, and $_POST.
     */
    const REQUEST = 'REQUEST';

    /**
     * The items uploaded to the current script via the HTTP POST method.
     */
    const FILES = 'FILES';

    /**
     * Names of superglobal variables.
     * @var array
     */
    protected $superglobals = [
        self::GET     => 1,
        self::POST    => 1,
        self::ENV     => 1,
        self::COOKIE  => 1,
        self::SERVER  => 1,
        self::SESSION => 1,
        self::REQUEST => 1,
        self::FILES   => 1,
    ];

    /**
     * Checks if a variable is a superglobal
     *
     * @param string $name
     * @return boolean
     */
    public function isSuperGlobal($name)
    {
        return isset($this->superglobals[$name]);
    }
}
