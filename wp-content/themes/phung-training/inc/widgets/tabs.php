<?php

Class Training_Theme_widget_Tabs extends WP_Widget
{

    public function __construct()
    {
        $id_base = 'training-widge-tabs';
        $name = 'Tabs';
        $widget_options = array(
            'classname' => 'widget_wpex_tabs_widget',
            'description' => 'Tabs form'
        );
        $control_options = array('width' => '250px');

        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    public function form($instance)
    {
        $htmlObj = new ZendvnHtml();

        $inputID = $this->get_field_id('popular_title');
        $inputName = $this->get_field_name('popular_title');
        $inputValue = @$instance['popular_title'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Popular title'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('popular_items');
        $inputName = $this->get_field_name('popular_items');
        $inputValue = @$instance['popular_items'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Popular items'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('recent_title');
        $inputName = $this->get_field_name('recent_title');
        $inputValue = @$instance['recent_title'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Recent title'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('recent_items');
        $inputName = $this->get_field_name('recent_items');
        $inputValue = @$instance['recent_items'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Recent items'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('comment_title');
        $inputName = $this->get_field_name('comment_title');
        $inputValue = @$instance['comment_title'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Comment title'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);

        $inputID = $this->get_field_id('comment_items');
        $inputName = $this->get_field_name('comment_items');
        $inputValue = @$instance['comment_items'];
        $arr = array('class' => 'widefat', 'id' => $inputID);
        $html = $htmlObj->label(translate('Comment items'), array('for' => $inputID))
            . $htmlObj->textbox($inputName, $inputValue, $arr);
        echo $htmlObj->pTag($html);
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['popular_title'] = strip_tags($new_instance['popular_title']);
        $instance['popular_items'] = strip_tags($new_instance['popular_items']);
        $instance['recent_title'] = strip_tags($new_instance['recent_title']);
        $instance['recent_items'] = strip_tags($new_instance['recent_items']);
        $instance['comment_title'] = strip_tags($new_instance['comment_title']);
        $instance['comment_items'] = strip_tags($new_instance['comment_items']);

        return $instance;
    }

    public function widget($args, $instance)
    {
        extract($args);

        echo $before_widget;
        require_once WIDGET_DIR . '/html/tabsHtml.php';
        echo $after_widget;
    }
}

?>