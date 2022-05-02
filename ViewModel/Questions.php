<?php

declare(strict_types=1);
 
namespace Magelearn\Categoryfaq\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magelearn\Categoryfaq\Model\ResourceModel\Question\CollectionFactory;
 
class Questions extends DataObject implements ArgumentInterface
{
    /*
     * This label won't be displayed in the frontend block
     */
    public const MAIN_LABEL = 'Default';
    
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;
    
    public function __construct(
        CollectionFactory $collectionFactory
        ) {
            $this->collectionFactory = $collectionFactory;
            parent::__construct();
    }
    
    /**
     * Get All Questions
     *
     * @return \Magento\Framework\DataObject[]
     */
    public function getItems()
    {
        $questionCollection = $this->collectionFactory->create();
        $questionCollection->addFieldToFilter('main_table.status', 1);
        $questionCollection->setOrder('categoryName', 'DESC');
        
        return $questionCollection->getItems();
    }
}