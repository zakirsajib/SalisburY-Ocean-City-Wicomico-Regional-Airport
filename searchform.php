<?php
/**
 * Template for displaying search forms in SBY
 *
 * @package WordPress
 * @subpackage SBY
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
	      <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'sby' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'sby' ); ?>" />
	      <span class="input-group-btn">
	        <button class="btn btn-primary" type="submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'sby' ); ?></span>Search</button>
	      </span>
	</div>
</form>
      


