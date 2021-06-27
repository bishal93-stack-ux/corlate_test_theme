<?php
?>
<form role="form" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text"  autocomplete="off" placeholder="<?php esc_attr_e( 'Search', 'corlate' ); ?>" value="" name="s">
    <input type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'corlate' ); ?>" >
</form>

