<?php
/**
 * Cordial/Magento Integration RFP
 *
 * @category    Cordial
 * @package     Cordial_Sync
 * @author      Cordial Team <info@cordial.com>
 * @copyright   Cordial (http://cordial.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Cordial\Sync\Model\ResourceModel\Log;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'log_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Cordial\Sync\Model\Log::class,
            \Cordial\Sync\Model\ResourceModel\Log::class
        );
    }
}
