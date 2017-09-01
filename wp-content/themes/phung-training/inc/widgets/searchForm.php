<?php

	Class Training_Theme_Widget_SearchFrom extends WP_Widget {

		public function __construct() {
			$id_base         = 'training-widge-search-form';
			$name            = 'Traning Search Form';
			$widget_options  = array(
				'classname'   => 'widget_search',
				'description' => 'Search form'
			);
			$control_options = array( 'width' => '250px' );
			parent::__construct( $id_base, $name, $widget_options, $control_options );

		}

		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			return $instance;
		}

		public function form( $instance ) {
			$htmlObj = new ZendvnHtml();
			$inputID = $this->get_field_id('title');
			$inputName = $this->get_field_name('title');
			$inputValue = @$instance['title'];
			$arr = array('class' => 'widefat', 'id' => $inputID);
			$html = $htmlObj->label(translate('Title'), array('for' => $inputID))
						. $htmlObj->textbox($inputName, $inputValue, $arr);

			echo $htmlObj->pTag($html);
		}

		public  function widget( $args, $instance ) {
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);

			echo $before_widget;

			if(!empty($title)) {
				echo $before_title . $title . $after_title;
			}
			require_once WIDGET_DIR . '/html/searchFormHtml.php';

			echo $after_widget;
		}
	}

?>