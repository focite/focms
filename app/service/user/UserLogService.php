<?php

declare(strict_types=1);

namespace app\service\user;

class UserLogService
{
    /**
     * @var Log
     */
    private Log $log;

    /**
     * LogService constructor.
     *
     * @param  Log  $log
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }
}
