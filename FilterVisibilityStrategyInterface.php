<?php

/**
 * Interface FilterVisibilityStrategyInterface
 */
interface FilterVisibilityStrategyInterface
{

    /**
     * Returns bool depends on Filter Model
     * @param FilterModel $filterModel
     * @return bool
     */
    public function decide(FilterModel $filterModel);
}