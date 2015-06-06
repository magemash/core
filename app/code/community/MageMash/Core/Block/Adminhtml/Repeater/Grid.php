<?php

abstract class MageMash_Core_Block_Adminhtml_Repeater_Grid extends Mage_Core_Block_Template
{
    protected $_template = 'magemash/core/repeater/grid.phtml';
    protected $form;
    protected $formName = '';
    protected $formId;
    protected $formValue;

    protected function _construct()
    {
	    parent::_construct();
    }

    public function getDeleteButtonHtml()
    {
        return $this->getChildHtml('delete_button');
    }

    public function setFormValue($value)
    {
        $this->formValue = $value;
    }

    public function getFormValue()
    {
        return $this->formValue;
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * @return string
     */
    public function getFormName()
    {
        return $this->formName;
    }

    /**
     * @param string $formName
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;
    }

    /**
     * @return mixed
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * @param mixed $formId
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    }
}