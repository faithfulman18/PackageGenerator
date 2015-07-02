<?php
/**
 * File for class ApiStructArrayOfWebSearchOption
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
/**
 * This class stands for ArrayOfWebSearchOption Struct
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
class ApiStructArrayOfWebSearchOption extends ApiWsdlClass
{
    /**
     * The WebSearchOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $WebSearchOption;
    /**
     * Constructor method for ArrayOfWebSearchOption
     * @see parent::__construct()
     * @param array $webSearchOption
     */
    public function __construct(array $webSearchOption = array())
    {
        parent::__construct(array('WebSearchOption'=>$webSearchOption), false);
    }
    /**
     * Get WebSearchOption value
     * @return array
     */
    public function getWebSearchOption()
    {
        return $this->WebSearchOption;
    }
    /**
     * Set WebSearchOption value
     * @param array $webSearchOption
     * @return ApiStructArrayOfWebSearchOption
     */
    public function setWebSearchOption(array $webSearchOption = array())
    {
        $this->WebSearchOption = $webSearchOption;
        return $this;
    }
    /**
     * Returns the current element
     * @see ApiWsdlClass::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see ApiWsdlClass::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see ApiWsdlClass::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see ApiWsdlClass::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see ApiWsdlClass::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see ApiWsdlClass::add()
     * @uses ApiEnumWebSearchOption::valueIsValid()
     * @param string $item
     * @return ApiEnumWebSearchOption
     */
    public function add($item)
    {
        return ApiEnumWebSearchOption::valueIsValid($item) ? parent::add($item) : false;
    }
    /**
     * Returns the attribute name
     * @see ApiWsdlClass::getAttributeName()
     * @return string WebSearchOption
     */
    public function getAttributeName()
    {
        return 'WebSearchOption';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ApiWsdlClass::__set_state()
     * @uses ApiWsdlClass::__set_state()
     * @param array $array the exported values
     * @return ApiStructArrayOfWebSearchOption
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
