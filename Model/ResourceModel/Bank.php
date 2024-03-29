<?php
/**
 * Copyright © IURCO and PRISMA. All rights reserved.
 */
declare(strict_types=1);

namespace Prisma\DecidirPromotions\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Bank extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'prisma_decidir_promotions_bank_resource_model';

    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init('prisma_decidir_promotions_bank', 'entity_id');
    }
}
