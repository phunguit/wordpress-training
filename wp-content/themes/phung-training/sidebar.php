<aside id="secondary" class="sidebar-container" role="complementary">
	<div class="sidebar-inner">
		<div class="widget-area">
            <?php
                if(is_dynamic_sidebar('primary-widge-area')) {
                    dynamic_sidebar('primary-widge-area');
                }
            ?>
		</div>
	</div>
</aside>