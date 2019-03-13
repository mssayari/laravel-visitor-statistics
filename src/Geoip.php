<?php

namespace mssayari\Laravel\VisitorTracker;

use mssayari\Laravel\VisitorTracker\Geoip\Ipstack;
use mssayari\Laravel\VisitorTracker\Geoip\Userinfo;

class Geoip
{
    public $driver;

    /**
     * Creates an instance of a geoapi driver.
     *
     * @param string $driver
     */
    public function __construct($driver)
    {
        switch ($driver) {
            case 'userinfo.io':
                $this->driver = new Userinfo();
                break;
            case 'ipstack.com':
                $this->driver = new Ipstack();
                break;
            default:
                $this->driver = null;
        }
    }
}
