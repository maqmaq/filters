<?php

/**
 * Class FilterModel
 */
class FilterModel
{
    const TYPE_SELECT = 'select';
    const TYPE_TREE = 'tree';
    const TYPE_RADIO = 'radio';
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $data;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var array
     */
    protected $succesors;

    /**
     * @var FilterVisibilityConditions
     */
    protected $visibityConditions;

    /** @var  FilterModel|null */
    protected $parent;

    /**
     * FilterModel constructor.
     */
    public function __construct()
    {
        $this->succesors = [];
    }

    /**
     * @return FilterVisibilityConditions
     */
    public function getVisibilityConditions()
    {
        return $this->visibityConditions;
    }

    /**
     * @param FilterVisibilityConditions $visibityConditions
     */
    public function setVisibityConditions($visibityConditions)
    {
        $this->visibityConditions = $visibityConditions;
    }

    /**
     * @return FilterModel|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param FilterModel|null $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param FilterModel $filter
     */
    public function addSuccesor(FilterModel $filter)
    {
        $this->succesors[] = $filter;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return array
     */
    public function getSuccesors()
    {
        return $this->succesors;
    }
}



