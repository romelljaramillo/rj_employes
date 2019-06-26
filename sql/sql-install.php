<?php
/**
 * 2016-2018 roanja.com
 *
 * NOTICE OF LICENSE
 *
 *  @author Romell Jaramillo <info@roanja.com>
 *  @copyright 2016-2018 roanja.com
 *  @license GNU General Public License version 2
 *
 * You can not resell or redistribute this software.
 */
$sql = array();
/* tablas tipos de turno*/
$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rj_infoemploye`;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rj_infoemploye`(
          `id_infoemploye` int(10) NOT NULL AUTO_INCREMENT,
          `id_customer` int(10) unsigned NOT NULL, 
          `id_nacionalidad` int(10) DEFAULT NULL,
          `id_coordinador` int(10) DEFAULT NULL,
          `id_estudios` int(10) DEFAULT NULL,
          `id_poblacion` int(10) DEFAULT NULL,
          `seguridad_social` varchar(15) DEFAULT NULL,
          `discapacidad` int(1) DEFAULT NULL,
          `porcen_discapacidad` int(10) DEFAULT NULL,
          `iban` varchar(24) DEFAULT NULL,
          `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,
          PRIMARY KEY (`id_infoemploye`),
          KEY `id_customer` (`id_customer`),
          KEY `id_coordinador` (`id_coordinador`),
          KEY `id_estudios` (`id_estudios`),
          KEY `id_poblacion` (`id_poblacion`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rj_infoemploye_shop`;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rj_infoemploye_shop`(
          `id_infoemploye` int(10) unsigned NOT NULL, 
          `id_shop` int(10) unsigned NOT NULL,        
          PRIMARY KEY (`id_infoemploye`, `id_shop`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rj_coordinador`;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rj_coordinador`(
          `id_coordinador` int(10) NOT NULL AUTO_INCREMENT, 
          `id_customer` int(10) unsigned NOT NULL, 
          `id_shop` int(10) unsigned NOT NULL,      
          `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,  
          PRIMARY KEY (`id_coordinador`, `id_shop`),
          KEY `id_customer` (`id_customer`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rj_coordinador_shop`;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rj_coordinador_shop`(
          `id_coordinador` int(10) unsigned NOT NULL, 
          `id_shop` int(10) unsigned NOT NULL,        
          PRIMARY KEY (`id_coordinador`, `id_shop`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

$sql[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'rj_nacionalidad`;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'rj_nacionalidad` (
            `id_nacionalidad` int(3) NOT NULL,
            `nacionalidad` varchar(30) NOT NULL,
            PRIMARY KEY (`id_nacionalidad`)
          ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';