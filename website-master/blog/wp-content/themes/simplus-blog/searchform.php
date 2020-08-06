<?php
/**
* Search form
*
* @package Simplus Blog
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'simplus-blog' ) . '" value="' . get_search_query() ?>" name="s" />
        <span class="input-group-btn">
            <button class="btn btn-primary search-submit" type="submit"><?php esc_html_e( 'Search', 'simplus-blog' ); ?></button>
        </span>
    </div>
</form>