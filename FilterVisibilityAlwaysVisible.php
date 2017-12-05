<?php

/**
 * Class FilterVisibilityAlwaysVisible
 */
class FilterVisibilityAlwaysVisible implements FilterVisibilityStrategyInterface
{
    /**
     * @param FilterModel $filterModel
     * @return bool
     */
    public function decide(FilterModel $filterModel)
    {
        return true;
    }

}