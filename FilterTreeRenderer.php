<?php

/**
 * Class FilterTreeRenderer
 */
class FilterTreeRenderer extends FilterAbstractRenderer
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

        <label>Checkbox1
            <input type="checkbox"/>
        </label>
        <div>
            <label>Checkbox1.1
                <input type="checkbox"/>
            </label>
            <label>Checkbox1.2
                <input type="checkbox"/>
            </label>
            <label>Checkbox1.3
                <input type="checkbox"/>
            </label>
        </div>
EOF;

        $html .= sprintf('</%s>', $containerTag);
        return $html;
    }

}