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

require_once _PS_MODULE_DIR_.'rj_employes/classes/Coordinador.php';

class AdminCoordinadorController extends ModuleAdminController
{
    protected $customers_firstname = array();
    protected $customers_lastname = array();
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'rj_coordinador';
        $this->className = 'coordinador';
        $this->allow_export = true;
        $this->identifier = 'id_coordinador';
        $this->_defaultOrderBy = 'id_coordinador';
        $this->_defaultOrderWay = 'ASC';
        parent::__construct();

        // $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->addRowAction('view');

        if (!Tools::getValue('realedit')) {
            $this->deleted = false;
        }
        
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
                'icon' => 'icon-trash'
            )
        );
    }


    public function renderList() 
    {
        $customers = Customer::getCustomers();

        foreach ($customers as $customer) {
            $this->customers_firstname[$customer['id_customer']] = $customer['firstname'];
            $this->customers_lastname[$customer['id_customer']] = $customer['lastname'];
        }

        $this->fields_list = array(
            'id_coordinador' => array(
                'title' => $this->l('ID'),
                'align' => 'text-center',
                'class' => 'fixed-width-xs'
            ),
            'firstname' => array(
                'title' => $this->l('Firstname'),
                'type' => 'select',
                'list' => $this->customers_firstname,
                'filter_key' => 'cl!id_customer',
            ),
            'lastname' => array(
                'title' => $this->l('Lastname'),
                'type' => 'select',
                'list' => $this->customers_lastname,
                'filter_key' => 'cl!id_customer',
            ),
            'date_add' => array(
                'title' => $this->l('Creation date')
            ),
            'date_upd' => array(
                'title' => $this->l('Modification date')
            )
        );

        $this->_select = 'cl.`firstname` as firstname, cl.`lastname` as lastname';        
        $this->_join = '
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` cl ON (cl.`id_customer` = a.`id_customer` AND cl.`id_lang` = ' . (int) $this->context->language->id . ')
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON a.id_customer = c.id_customer
        ';
        $this->_where = 'AND a.id_customer != 0 ' . Shop::addSqlRestriction(Shop::SHARE_CUSTOMER, 'c');
        $this->_use_found_rows = false;

        return parent::renderList();
    }

    public function renderView()
    {
        // $this->context->smarty->assign(array(
        //     'empleado' => $this->object,
            
        // ));
        // return $this->setTemplate($this->module->template_dir . 'view.tpl');
        // 
        $this->tpl_view_vars = array(
            'empleado' => $this->object
        );
        // if (version_compare(_PS_VERSION_, '1.5.6.0', '>')) {
            $this->base_tpl_view = 'view.tpl';
        // }
            // var_dump($this->base_tpl_view);
        return parent::renderView();
    }

    public function initPageHeaderToolbar()
    {
        if (empty($this->display)) {
            $this->page_header_toolbar_btn['new_coordinador'] = array(
                'href' => self::$currentIndex.'&addrj_coordinador&token='.$this->token,
                'desc' => $this->l('Add new Coordinador'),
                'icon' => 'process-icon-new'
            );
        }
        parent::initPageHeaderToolbar();
    }   

    public function renderForm()
    {  
        $customers = Customer::getCustomers();
        foreach ($customers as $customer) {
            $this->customers_list[] = array('id' => $customer['id_customer'], 'name' => $customer['firstname']. ' ' . $customer['lastname']);
        }
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Coordinador'),
                'icon' => 'icon-time'
            ),
            'input' => array(
                 array(
                    'type' => 'select',
                    'label' => $this->l('Coordinador'),
                    'name' => 'id_customer',
                    'options' => array(
                        'query' => $this->customers_list,
                        'id' => 'id',
                        'name' => 'name',
                        'default' => array(
                            'label' => $this->l('Coordinador'),
                            'value' => 0,
                        ),
                    ),
                ),
            ),
            
        );
        
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->l('Shop association'),
                'name' => 'checkBoxShopAsso',
            );
        } 
        $this->fields_form['submit'] = array(
            'title' => $this->l('Save')
        );
        return parent::renderForm();
    }
}