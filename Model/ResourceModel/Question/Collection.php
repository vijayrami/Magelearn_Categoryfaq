<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magelearn\Categoryfaq\Model\ResourceModel\Question;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    const TABLE_NAME = 'magelearn_categoryfaq_category';

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Magelearn\Categoryfaq\Model\Question::class,
            \Magelearn\Categoryfaq\Model\ResourceModel\Question::class
        );
    }
    
    /**
     * Initialize select object
     *
     * @return Collection
     */
    protected function _initSelect()
    {
        parent::_initSelect();
        
        $this->addFilterToMap('id', 'main_table.id');
        $this->getSelect()->joinLeft(
            ['categories' => $this->getTable(self::TABLE_NAME)],
            'main_table.category_id = categories.id',
            ['name']
            )->columns(
                [
                    'categoryName' => 'categories.name',
                    'id' => 'main_table.id',
                    'created_at' => 'main_table.created_at',
                    'updated_at' => 'main_table.updated_at',
                    'status' => 'main_table.status'
                ]
                );
            
            return $this;
    }
}

