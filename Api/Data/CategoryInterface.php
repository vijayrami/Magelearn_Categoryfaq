<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magelearn\Categoryfaq\Api\Data;

interface CategoryInterface
{
    const STATUS = 'status';
    const NAME = 'name';
    const UPDATED_AT = 'updated_at';
    const DESCRIPTION = 'description';
    const ID = 'id';
    const CREATED_AT = 'created_at';
    const SORT_ORDER = 'sort_order';

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setId($id);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setName($name);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setDescription($description);

    /**
     * Get sort_order
     * @return string|null
     */
    public function getSortOrder();

    /**
     * Set sort_order
     * @param string $sortOrder
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setStatus($status);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Magelearn\Categoryfaq\Category\Api\Data\CategoryInterface
     */
    public function setUpdatedAt($updatedAt);
}

