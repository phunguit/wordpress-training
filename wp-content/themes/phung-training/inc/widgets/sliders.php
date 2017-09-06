<?php

Class Training_Theme_Widget_Sliders extends WP_Widget
{

    public function __construct()
    {
        $id_base = 'training-widge-sliders';
        $name = 'Sliders';
        $widget_options = array(
            'classname' => 'widget_wpex_tabs_widget',
            'description' => 'Sliders'
        );
        $control_options = array('width' => '250px');

        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    public function form($instance)
    {
        $htmlObj = new ZendvnHtml();

        $inputID = $this->get_field_id('title');
        $inputName = $this->get_field_name('title');
        $inputValue = @$instance['title'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Title'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('cat');
        $inputName = $this->get_field_name('cat');
        $inputValue = @$instance['cat'];
        $args = array(
            'show_option_all' => translate('All category'),
            'orderby' => 'ID',
            'order' => 'ASC',
            'show_count' => 1,
            'hide_empty' => 0,
            'child_of' => 0,
            'exclude' => '',
            'echo' => 0,
            'selected' => $inputValue,
            'hierarchical' => 1,
            'name' => $inputName,
            'id' => $inputID,
            'class' => 'widefat',
            'depth' => 0,
            'tab_index' => 0,
            'taxonomy' => 'category',
            'hide_if_empty' => false
        );
        $html = $htmlObj->label(translate('Categories'), array('for' => $inputID)) . wp_dropdown_categories($args);
        echo $htmlObj->pTag($html);

        $inputID = $inputID = $this->get_field_id('type');
        $inputName = $this->get_field_name('type');
        $inputValue = @$instance['type'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $options['data'] = array(
            'only' => 'Only cateory',
            'child' => 'Child Category'
        );

        $html = $htmlObj->label(translate('Getting posts in category'), array('for' => $inputID))
            . $htmlObj->selectbox($inputName, $inputValue, $arr, $options);
        echo $htmlObj->pTag($html);
    }

}

?>