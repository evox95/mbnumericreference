<?php

/**
 * 2015 Mateusz Bartocha
 * 
 * @module      MBNumericReference
 * @author      Mateusz Bartocha <contact@bestcoding.net>
 * @www         https://bestcoding.net
 */

class Order extends OrderCore {
    
    const REFERENCE_LENGTH = 9;

    public static function generateReference()
    {
        $sql = 'SELECT `id_order` FROM `' . _DB_PREFIX_ . 'orders` '
                . 'ORDER BY `id_order` DESC ';
        $last_order_id = (int)Db::getInstance()->getValue($sql);
        $last_order_id += 1;

        return str_pad(((string)$last_order_id), self::REFERENCE_LENGTH, "0", STR_PAD_LEFT);

        //return strtoupper(Tools::passwdGen(9, 'NO_NUMERIC'));
    }

}
