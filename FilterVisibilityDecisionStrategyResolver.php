<?php

/**
 * Class FilterVisibilityDecisionStrategyResolver
 */
class FilterVisibilityDecisionStrategyResolver
{

    /**
     * @param FilterVisibilityConditions $visibilityConditions
     * @return FilterVisibilityStrategyInterface
     */
    public function resolve(FilterVisibilityConditions $visibilityConditions)
    {
        switch ($visibilityConditions->getType()) {
            case FilterVisibilityConditions::TYPE_ALWAYS_VISIBLE:
                return new FilterVisibilityAlwaysVisible();
                break;
            case FilterVisibilityConditions::TYPE_DEPENDS_ON_PARENT_VALUE_EQUALS:
                return new FilterVisibilityDependsOnParentValueEquals();
                break;
            default:
                throw new InvalidArgumentException(sprintf('Given conditions type (%s) is not supported', $visibilityConditions->getType()));

        }
    }

}