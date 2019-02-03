<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <label for="s" class="screen-reader-text"><?php _e('Search for:','storefront-child'); ?></label>
    <input type="search" id="s" name="s" value="" placeholder="search for food" />

    <button type="submit" id="searchsubmit" ><?php _e('Search','storefront-child'); ?></button>
</form>