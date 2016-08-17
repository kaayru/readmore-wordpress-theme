<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'readmore'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'readmore' ) . '" value="' . get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit" value=""><i class="fa fa-search"></i></button>
</form>