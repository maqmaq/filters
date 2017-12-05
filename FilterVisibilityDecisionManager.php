<?php

/**
 * Class FilterVisibilityDecisionManager
 */
class FilterVisibilityDecisionManager
{
    /**
     * @var FilterVisibilityDecisionStrategyResolver
     */
    private $filterVisibilityDecisionStrategyResolver;

    /**
     * FilterVisibilityDecisionManager constructor.
     * @param FilterVisibilityDecisionStrategyResolver $filterVisibilityDecisionStrategyResolver
     */
    public function __construct(FilterVisibilityDecisionStrategyResolver $filterVisibilityDecisionStrategyResolver)
    {
        $this->filterVisibilityDecisionStrategyResolver = $filterVisibilityDecisionStrategyResolver;
    }

    /**
     * @param FilterModel $filterModel
     * @return bool
     */
    public function decide(FilterModel $filterModel)
    {
        $visibilityConditions = $filterModel->getVisibilityConditions();

        $decisionStrategy = $this->filterVisibilityDecisionStrategyResolver->resolve($visibilityConditions);
        return $decisionStrategy->decide($filterModel);

    }
}