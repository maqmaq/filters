<?php

/**
 * Class FilterVisibilityConditions
 */
class FilterVisibilityConditions
{

    CONST TYPE_ALWAYS_VISIBLE = 'always';
    const TYPE_DEPENDS_ON_PARENT_VALUE_EQUALS = 'parent_equals';
    const TYPE_DEPENDS_ON_PARENT_VALUE_IN_ARRAY = 'parent_in_array';

    /** @var  string */
    protected $type;

    /** @var array|null */
    protected $expectedValue;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getExpectedValue()
    {
        return $this->expectedValue;
    }

    /**
     * @param array|null $expectedValue
     * @return $this
     */
    public function setExpectedValue($expectedValue)
    {
        $this->expectedValue = $expectedValue;
        return $this;
    }


}