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
class Quadra_Atos_Model_Adminhtml_System_Config_Source_Payment_Cctype {

    public function toOptionArray() {
        $options = array(
            array('value' => 'CB', 'label' => 'CB'),
            array('value' => 'VISA', 'label' => 'Visa'),
            array('value' => 'MASTERCARD', 'label' => 'MasterCard'),
            array('value' => 'AMEX', 'label' => 'Amex')
        );

        return $options;
    }

    public function getCardValues() {
        return array('CB', 'VISA', 'MASTERCARD', 'AMEX');
    }

}
