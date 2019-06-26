<?php
/**
 * 2016-2019 ROANJA.COM
 *
 * NOTICE OF LICENSE
 *
 *  @author Romell Jaramillo <integraciones@roanja.com>
 *  @copyright 2016-2019 ROANJA.COM
 *  @license GNU General Public License version 2
 *
 * You can not resell or redistribute this software.
 */
require_once _PS_MODULE_DIR_.'rj_employes/classes/InfoEmploye.php';

class AdminInfoEmployeController extends ModuleAdminController
{

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'rj_infoemploye';
        $this->className = 'InfoEmploye';
        $this->allow_export = true;
        $this->identifier = 'id_infoemploye';
        $this->_defaultOrderBy = 'id_infoemploye';
        $this->_defaultOrderWay = 'ASC';

        parent::__construct();

        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->addRowAction('view');

        if (!Tools::getValue('realedit')) {
            $this->deleted = false;
        }

        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->trans('Delete selected', array(), 'Admin.InfoEmploye.Rj_employe'),
                'confirm' => $this->trans('Delete selected items?', array(), 'Admin.InfoEmploye.Rj_employe'),
                'icon' => 'icon-trash'
            )
        );    
    }

    public function renderList()
    {
        $this->fields_list = array(
            'id_employe' => array(
                'title' => $this->trans('ID', array(), 'Admin.InfoEmploye.Rj_employe'),
                'align' => 'text-center',
                'class' => 'fixed-width-xs'
            ),
            'seguridad_social' => array(
                'title' => $this->trans('Seguridad social', array(), 'Admin.InfoEmploye.Rj_employe')
            ),
            'nacionalidad' => array(
                'title' => $this->trans('Nacionalidad', array(), 'Admin.InfoEmploye.Rj_employe'),
                'type' => 'select',
                'list' => $this->getNacionalidad(),
                'filter_key' => 'cl!id_nacionalidad',
            ),
            'discapacidad' => array(
                'title' => $this->trans('Discapacidad', array(), 'Admin.InfoEmploye.Rj_employe')
            ),
            'coordinador' => array(
                'title' => $this->trans('Coordinador', array(), 'Admin.InfoEmploye.Rj_employe'),
                'type' => 'select',
                'list' => Coordinador::getCoordinador(),
                'filter_key' => 'c!id_coordinador',
            ),
            'date_add' => array(
                'title' => $this->trans('Start Time', array(), 'Admin.InfoEmploye.Rj_employe')
            ),
            'date_upd' => array(
                'title' => $this->trans('End Time', array(), 'Admin.InfoEmploye.Rj_employe')
            )
        );
        $this->_select = 'cl.`nacionalidad` as nacionalidad, cu.`firstname` as coordinador';
        $this->_join = '
            LEFT JOIN `' . _DB_PREFIX_ . 'rj_nacionalidad` cl ON (cl.`id_nacionalidad` = a.`id_nacionalidad`)
            LEFT JOIN `' . _DB_PREFIX_ . 'rj_coordinador` c ON (c.`id_coordinador` = a.`id_coordinador`)
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` cu ON (c.id_customer = cu.id_customer)';
        return parent::renderList();
    }

    public function initContent()
    {
        parent::initContent();
    
    }

    public function getNacionalidad()
    { 
        $nacionalidades = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT `id_nacionalidad`, `nacionalidad`
            FROM '._DB_PREFIX_.'rj_nacionalidad           
            ORDER BY nacionalidad'
        );
        return $nacionalidades;
    }
}