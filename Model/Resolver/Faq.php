<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magelearn\Categoryfaq\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magelearn\Categoryfaq\Model\ResourceModel\Question\CollectionFactory;

class Faq implements ResolverInterface
{
    public function __construct(
        CollectionFactory $collectionFactory
        )
    {
        $this->collectionFactory = $collectionFactory;
    }
    
    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
        ) {
            $faqData = $this->getFaqData();
            return $faqData;
    }
    /**
     * @return array
     * @throws GraphQlNoSuchEntityException
     */
    private function getFaqData(): array
    {
        try {
            /* filter for all the pages */
            $questionCollection = $this->collectionFactory->create();
            $questionCollection->addFieldToFilter('main_table.status', 1);
            $questionCollection->setOrder('categoryName', 'DESC');
            
            $faqItems = $questionCollection->getItems();
            
            $faqRecord['allFaqs'] = [];
            
            foreach($faqItems as $item) {
                $faqId = $item->getId();
                $faqRecord['allFaqs'][$faqId]['title'] = $item->getTitle();
                $faqRecord['allFaqs'][$faqId]['answer'] = html_entity_decode(nl2br($item->getAnswer()));
                $faqRecord['allFaqs'][$faqId]['status'] = $item->getStatus();
                $faqRecord['allFaqs'][$faqId]['categoryName'] = $item['categoryName'];
            }
        } catch (NoSuchEntityException $e) {
            throw new GraphQlNoSuchEntityException(__($e->getMessage()), $e);
        }
        return $faqRecord;
    }
}
