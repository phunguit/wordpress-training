<?php
	class Training_Theme_Widget_SocialForm extends WP_Widget {

		public function __construct() {
			$id_base         = 'training-widge-social-form';
			$name            = 'Social Form';
			$widget_options  = array(
				'classname'   => 'widget_wpex_social_widget',
				'description' => 'Social'
			);
			$control_options = array( 'width' => '250px' );
			parent::__construct( $id_base, $name, $widget_options, $control_options );
		}

		public function update( $new_instance, $old_instance ) {

			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['content'] = strip_tags($new_instance['content']);
			$instance['twitter'] = strip_tags($new_instance['twitter']);
			$instance['facebook'] = strip_tags($new_instance['facebook']);
			$instance['google'] = strip_tags($new_instance['google']);
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

			$inputID = $this->get_field_id('content');
			$inputName = $this->get_field_name('content');
			$inputValue = @$instance['content'];
			$arr = array('class' => 'widefat', 'id' => $inputID);
			$html = $htmlObj->label(translate('Content'), array('for' => $inputID))
			        . $htmlObj->textbox($inputName, $inputValue, $arr);
			echo $htmlObj->pTag($html);

			$inputID = $this->get_field_id('twitter');
			$inputName = $this->get_field_name('twitter');
			$inputValue = @$instance['twitter'];
			$arr = array('class' => 'widefat', 'id' => $inputID);
			$html = $htmlObj->label(translate('Twitter'), array('for' => $inputID))
			        . $htmlObj->textbox($inputName, $inputValue, $arr);
			echo $htmlObj->pTag($html);

			$inputID = $this->get_field_id('facebook');
			$inputName = $this->get_field_name('facebook');
			$inputValue = @$instance['facebook'];
			$arr = array('class' => 'widefat', 'id' => $inputID);
			$html = $htmlObj->label(translate('Facebook'), array('for' => $inputID))
			        . $htmlObj->textbox($inputName, $inputValue, $arr);
			echo $htmlObj->pTag($html);

			$inputID = $this->get_field_id('google');
			$inputName = $this->get_field_name('google');
			$inputValue = @$instance['google'];
			$arr = array('class' => 'widefat', 'id' => $inputID);
			$html = $htmlObj->label(translate('Google+'), array('for' => $inputID))
			        . $htmlObj->textbox($inputName, $inputValue, $arr);
			echo $htmlObj->pTag($html);
		}

		public function widget( $args, $instance ) {

			extract($args);
			$title = apply_filters('widget_title', $instance['title']);
			$content = apply_filters('widget_content', $instance['content']);

			echo $before_widget;

			if(!empty($title)) {
				echo $before_title . $title . $after_title;
			}

			require_once WIDGET_DIR . '/html/socialFormHtml.php';

			echo $after_widget;
		}
	}
?>