<?php

/**
 * Class FilterRadioRenderer
 */
class FilterRadioRenderer extends FilterAbstractRenderer
{
    /**
     * @param FilterModel $filterModel
     * @return string
     */
    public function render(FilterModel $filterModel)
    {
        $containerTag = 'div';
        $html = sprintf('<%s>', $containerTag);
        $html .= <<<EOF
        <span>{$filterModel->getLabel()}</span>
<input type="radio" name="{$filterModel->getId()}[]" value="A" />
<input type="radio" name="{$filterModel->getId()}[]" value="B" />
<input type="radio" name="{$filterModel->getId()}[]" value="C" />
EOF;

        $html .= sprintf('</%s>', $containerTag);
        return $html;
    }


}