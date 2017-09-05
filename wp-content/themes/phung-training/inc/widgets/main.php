<?php
	Class Training_Theme_Widget_Main {

		private $_widget_options = array();

		public function __construct() {
			$this->_widget_options = array(
				'searchForm' => true,
				'socialForm' => true,
                'tabs' => true
			);
			foreach($this->_widget_options as $key => $val) {
				if($val == true) {
					add_action('widgets_init', array($this, $key));
				}
			}
		}

		public function searchForm() {
			require_once WIDGET_DIR . '/searchForm.php';
			register_widget('Training_Theme_Widget_SearchFrom');
		}

		public function socialForm() {
			require_once WIDGET_DIR . '/socialForm.php';
			register_widget('Training_Theme_Widget_SocialForm');
		}

        public function tabs() {
            require_once WIDGET_DIR . '/tabs.php';
            register_widget('Training_Theme_widget_Tabs');
        }
	}
?>