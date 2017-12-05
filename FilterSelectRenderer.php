<?php

/**
 * Class FilterSelectRenderer
 */
class FilterSelectRenderer extends FilterAbstractRenderer
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
<select name="{$filterModel->getId()}">
    <option>Value 1</option>
    <option>Value 2</option>
    <option>Value 3</option>
</select>
EOF;

        $html .= sprintf('</%s>', $containerTag);
        return $html;
    }

}