<?php

namespace Magelearn\Categoryfaq\Model\ResourceModel\Question\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magelearn\Categoryfaq\Model\ResourceModel\Question as ResourceModel;
use Magelearn\Categoryfaq\Model\ResourceModel\Category as CategoryResourceModel;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
    const TABLE_NAME = 'magelearn_categoryfaq_category';
    
    /**
     * Collection constructor.
     * @param EntityFactory $entityFactory
     * @param Logger $logger
     * @param FetchStrategy $fetchStrategy
     * @param EventManager $eventManager
     * @param string $mainTable
     * @param string $resourceModel
     * @param null $identifierName
     * @param null $connectionName
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = self::TABLE_NAME,
        $resourceModel = ResourceModel::class,
        $identifierName = null,
        $connectionName = null
    ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel,
            $identifierName,
            $connectionName
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
                'status' => 'main_table.status']
        );

        return $this;
    }
}