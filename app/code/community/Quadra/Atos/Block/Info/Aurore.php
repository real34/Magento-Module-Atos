<?php

/**
 * 1997-2013 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to ecommerce@quadra-informatique.fr so we can send you a copy immediately.
 *
 * @author Quadra Informatique <ecommerce@quadra-informatique.fr>
 * @copyright 1997-2013 Quadra Informatique
 * @version Release: $Revision: 3.0.3 $
 * @license http://www.opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class Quadra_Atos_Block_Info_Aurore extends Mage_Payment_Block_Info {

    protected function _construct() {
        parent::_construct();
        $this->setTemplate('atos/info/aurore.phtml');
    }

}
