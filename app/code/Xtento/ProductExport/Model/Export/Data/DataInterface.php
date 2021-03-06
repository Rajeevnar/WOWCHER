<?php

/**
 * Product:       Xtento_ProductExport
 * ID:            nH0RbGUjtjA7eYYFruny569maB8neebht0E+W5DEN/g=
 * Last Modified: 2016-04-14T15:37:35+00:00
 * File:          app/code/Xtento/ProductExport/Model/Export/Data/DataInterface.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\ProductExport\Model\Export\Data;

interface DataInterface {
    public function getExportData($entityType, $collectionItem);
    public function getConfiguration();
}