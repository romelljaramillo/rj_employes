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
*  @author Roanja  <info@roanja.com>
*  @copyright  2015-2019 Roanja 
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * @since   1.0.0
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Rj_Employes extends Module implements WidgetInterface
{
    public function __construct()
    {
        $this->name = 'rj_employes';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Roanja';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->getTranslator()->trans('Roanja Employes', array(), 'Modules.RjEmployes.Admin');
        $this->description = $this->getTranslator()->trans('Custom manager employes.', array(), 'Modules.RjEmployes.Admin');
        $this->ps_versions_compliancy = array('min' => '1.7.4.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:rj_employes/views/templates/hook/menuemployes.tpl';
    }

        /**
     * @see Module::install()
     */
    public function install()
    {
        /* Adds Module */
        if (parent::install() &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('displayHome') &&
            $this->registerHook('actionShopDataDuplication')
        ) {
            $shops = Shop::getContextListShopID();
            $shop_groups_list = array();

            /* Setup each shop */
            foreach ($shops as $shop_id) {
                $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

                if (!in_array($shop_group_id, $shop_groups_list)) {
                    $shop_groups_list[] = $shop_group_id;
                }

                /* Sets up configuration */
                $res = Configuration::updateValue('RJ_EMPLOYES_VERSION', $this->version, false, $shop_group_id, $shop_id);                
            }

            /* Sets up Shop Group configuration */
            if (count($shop_groups_list)) {
                foreach ($shop_groups_list as $shop_group_id) {
                    $res &= Configuration::updateValue('RJ_EMPLOYES_VERSION', $this->version, false, $shop_group_id);                   
                }
            }

            /* Sets up Global configuration */
            $res &= Configuration::updateValue('RJ_EMPLOYES_VERSION', $this->version);            

            /* Creates tables */
            $res &= $this->createTables();

            /* Adds samples */
            if ($res) {
                $this->installSamples();
            }

            // Disable on mobiles and tablets
            $this->disableDevice(Context::DEVICE_MOBILE);

            return (bool)$res;
        }

        return false;
    }

}