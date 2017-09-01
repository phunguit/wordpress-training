<div class="social-widget-description clr"><?php echo $instance['content']; ?></div>

<ul class="clr color flat">
	<?php if ( ! empty( $instance['twitter'] ) ): ?>
    <li class="twitter">
        <a href="<?php echo $instance['twitter']; ?>" title="Twitter" target="_blank">
            <span class="fa fa-twitter"></span>
        </a>
    </li>
	<?php endif; ?>

	<?php if ( ! empty( $instance['facebook'] ) ): ?>
        <li class="facebook">
            <a href="<?php echo $instance['facebook']; ?>" title="Facebook" target="_blank">
                <span class="fa fa-facebook"></span>
            </a>
        </li>
	<?php endif; ?>

	<?php if ( ! empty( $instance['google'] ) ): ?>
        <li class="google-plus">
            <a href="<?php echo $instance['google']; ?>" title="Google+" target="_blank">
                <span class="fa fa-google-plus"></span>
            </a>
        </li>
	<?php endif; ?>
</ul>