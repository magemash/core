#MageMash_Core


##Description



##Installation
        
        $fieldset->addType('filters','MageMash_Core_Block_Adminhtml_Widget_Form_Element_RepeaterWidget');

        $fieldset->addField('filters', 'filters', array(
            'label'         => 'Filters',
            'block'         => 'magemash_core/adminhtml_filter_grid',
        ));

        $model->setFilters(
            array(
                array('id' => 1, 'title' => 'ddd', 'sss' => 'ssssssss', 'type' => 'order'),
                array('id' => 2, 'title' => 'ggg', 'sss' => 'gggg', 'type' => 'product'),
                array('id' => 3, 'title' => 'sdafadsf', 'sss' => 'dsafsdfas', 'type' => 'product'),
            )
        );

##Features


## Settings


### Notes

