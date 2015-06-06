<?php

class MageMash_Core_Block_Adminhtml_Filter_Grid extends MageMash_Core_Block_Adminhtml_Repeater_Grid
{
    protected $form;
    protected $formName = "filters";
    protected $formId;
    protected $formValue;

    protected function _construct()
    {
	    parent::_construct();
        $this->formId = $this->formName . "[{{id}}]";
        $this->prepareForm();
    }

    protected function prepareForm()
    {
        $this->setChild('add_button',
            Mage::app()->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
                    'label' => 'Add New Filter',
                    'class' => 'add',
                    'id'    => 'add_new_filter'
                ))
        );

        $this->setChild('delete_button',
            Mage::app()->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
                    'label' => Mage::helper('catalog')->__('Delete Option'),
                    'class' => 'delete delete-'.$this->getFormName().' '
                ))
        );

        $form = new Varien_Data_Form();

        $form->addField('title', 'text', array(
            'label'     => 'Title',
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => $this->formId . '[title]',
            'value'     => "{{title}}"
        ));

        $form->addField('sss', 'text', array(
            'label'     => 'Title',
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => $this->formId . '[sss]',
            'value'     => "{{sss}}"
        ));

        $form->addField('type', 'select', array(
            'label'     => 'Grid Type',
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => $this->formId . '[type]',
            'values'    => array(
                array(
                    'value'     => 'product',
                    'label'     => 'product'
                ),
                array(
                    'value'     => 'order',
                    'label'     => 'order'
                )
            )
        ));

        $form->setUseContainer(false);
        $this->form = $form->setHtmlIdPrefix($this->formName.'_{{id}}_');
    }
}