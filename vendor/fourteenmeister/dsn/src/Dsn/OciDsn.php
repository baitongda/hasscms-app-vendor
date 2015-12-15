<?php

namespace fourteenmeister\helpers\Dsn;
use fourteenmeister\helpers\Dsn;

/**
 * OciDsn
 *
 */
class OciDsn extends Dsn
{

    public function init()
    {
        $this->dsn = str_replace("dbname=", "", $this->dsn);
        parent::init();
    }

}