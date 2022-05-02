<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magelearn\Categoryfaq\Api\Data;

interface QuestionInterface
{

    const CATEGORY_ID = 'category_id';
    const STATUS = 'status';
    const UPDATED_AT = 'updated_at';
    const ID = 'id';
    const TITLE = 'title';
    const ANSWER = 'answer';
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
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setId($id);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setTitle($title);

    /**
     * Get answer
     * @return string|null
     */
    public function getAnswer();

    /**
     * Set answer
     * @param string $answer
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setAnswer($answer);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setStatus($status);

    /**
     * Get sort_order
     * @return string|null
     */
    public function getSortOrder();

    /**
     * Set sort_order
     * @param string $sortOrder
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Get category_id
     * @return string|null
     */
    public function getCategoryId();

    /**
     * Set category_id
     * @param string $categoryId
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setCategoryId($categoryId);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
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
     * @return \Magelearn\Categoryfaq\Question\Api\Data\QuestionInterface
     */
    public function setUpdatedAt($updatedAt);
}

