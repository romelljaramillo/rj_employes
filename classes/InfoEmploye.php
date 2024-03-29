<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
class InfoEmpleado extends ObjectModel
{	
	public $id_customer;
	public $id_nacionalidad;
	public $id_coordinador;
	public $id_estudios;
	public $id_poblacion;
	public $seguridad_social;
	public $discapacidad;
	public $porcentaje_discapacidad;
	public $iban;
    public $date_add;
    public $date_upd;
	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'rj_infoemploye',
		'primary' => 'id_infoemploye',
		'multishop' => true,		
		'fields' => array(
			// Lang fields
			'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_nacionalidad' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_coordinador' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_estudios' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_poblacion' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
			'seguridad_social' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 15),
            'discapacidad' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'porcentaje_discapacidad' => array('type' => self::TYPE_INT, 'validate' => 'isPercentage'),
            'iban' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 32),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),		
		),
	);
	public	function __construct($id_infoemploye = null, $id_shop = null)
	{
		Shop::addTableAssociation('rj_infoemploye', array('type' => 'shop'));
       	 parent::__construct($id_infoemploye, $id_shop);
	}
}