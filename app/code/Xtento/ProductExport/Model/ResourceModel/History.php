<?php

/**
 * Product:       Xtento_ProductExport
 * ID:            nH0RbGUjtjA7eYYFruny569maB8neebht0E+W5DEN/g=
 * Last Modified: 2016-04-14T15:37:57+00:00
 * File:          app/code/Xtento/ProductExport/Model/ResourceModel/History.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\ProductExport\Model\ResourceModel;

class History extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('xtento_productexport_profile_history', 'history_id');
    }
}
