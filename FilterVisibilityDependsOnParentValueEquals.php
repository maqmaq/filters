<?php

/**
 * Represents depends on parents value equals strategy
 * Class FilterVisibilityDependsOnParentValueEquals
 */
class FilterVisibilityDependsOnParentValueEquals implements FilterVisibilityStrategyInterface
{
    /**
     * @param FilterModel $filterModel
     * @return bool
     */
    public function decide(FilterModel $filterModel)
    {

        /*
         * some pseudo-code
         * return in_array($filterModel->getParent()->getValue()== $filterModel->getVisibilityConditions()->setExpectedValue());
         */
        return true;
    }

}