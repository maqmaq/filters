<?php

/**
 * Class FilterRenderer
 */
class FilterRendererService
{
    /**
     * @var FilterVisibilityDecisionManager
     */
    private $filterVisibilityDecisionManager;

    /**
     * FilterRendererService constructor.
     * @param FilterVisibilityDecisionManager $filterVisibilityDecisionManager
     */
    public function __construct(FilterVisibilityDecisionManager $filterVisibilityDecisionManager)
    {
        $this->filterVisibilityDecisionManager = $filterVisibilityDecisionManager;
    }


    /**
     * @param FilterModel $filterModel
     * @return mixed
     */
    public function renderFilter(FilterModel $filterModel)
    {

        if (!$this->isFilterVisible($filterModel)) {
            return '';
        };
        $typeRenderer = $this->getRenderedByType($filterModel->getType());
        $result = $typeRenderer->render($filterModel);

        foreach ($filterModel->getSuccesors() as $succesor) {
            $result .= $this->renderFilter($succesor);
        }
        return $result;
    }


    /**
     * @param string $type
     * @return FilterAbstractRenderer
     */
    protected function getRenderedByType($type)
    {
        // some factory or something
        switch ($type) {
            case FilterModel::TYPE_RADIO:
                return new FilterRadioRenderer();
                break;
            case FilterModel::TYPE_TREE:
                return new FilterTreeRenderer();
                break;
            case FilterModel::TYPE_SELECT:
                return new FilterSelectRenderer();
                break;
            default:
                throw new RuntimeException(sprintf('Unrecognized type given: %s'), $type);
        }
    }

    /**
     * @param FilterModel $filterModel
     * @return bool
     */
    protected function isFilterVisible(FilterModel $filterModel)
    {
        if (!$filterModel->getVisibilityConditions() instanceof FilterVisibilityConditions) {
            throw new RuntimeException('Visibility conditions must be set');
        }

        return $this->filterVisibilityDecisionManager->decide($filterModel);
    }

}