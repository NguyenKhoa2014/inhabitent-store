<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

	<fieldset>
		<a href="#" id="search-toggle" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" id="search-field" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>

</form>