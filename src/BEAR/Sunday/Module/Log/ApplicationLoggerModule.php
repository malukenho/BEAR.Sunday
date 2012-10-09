<?php
/**
 * This file is part of the BEAR.Framework package
 *
 * @package BEAR.Framework
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Sunday\Module\Log;

use Ray\Di\AbstractModule;
use Ray\Di\Di\Scope;

/**
 * Application logger module
 *
 * @package    BEAR.Framework
 * @subpackage Module
 */
class ApplicationLoggerModule extends AbstractModule
{
    /**
     * Configure
     *
     * @return void
     */
    protected function configure()
    {
        $this->bind('BEAR\Sunday\Application\LoggerInterface')->to('BEAR\Sunday\Application\Logger');
    }
}
