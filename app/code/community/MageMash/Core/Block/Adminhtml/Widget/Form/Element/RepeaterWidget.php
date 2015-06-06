<?php

class MageMash_Core_Block_Adminhtml_Widget_Form_Element_RepeaterWidget extends Varien_Data_Form_Element_Abstract
{
    protected $block;

    public function __construct($attributes=array())
    {
        $this->block = $attributes['block'];
        parent::__construct($attributes);
        $this->setType('label');
    }

    public function getElementHtml()
    {
        $block = Mage::app()->getLayout()
	        ->createBlock($this->block);

        $block->setFormValue($this->getValue());

        return $block->toHtml();
    }
}