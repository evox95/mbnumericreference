<?php

/**
 * 2015 Mateusz Bartocha
 * 
 * @module      MBNumericReference
 * @author      Mateusz Bartocha <contact@bestcoding.net>
 * @www         https://bestcoding.net
 */

if (!defined('_PS_VERSION_'))
    exit;

class MBNumericReference extends Module {

    public function __construct()
    {
        $this->name = 'mbnumericreference';
        $this->tab = 'other';
        $this->version = '1.0.0';
        $this->author = 'Mateusz Bartocha';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Numeric reference');
        $this->description = $this->l('With this module all your new order references will be numeric: 000000001, 000000002, 000000003 etc.');
    }

}
