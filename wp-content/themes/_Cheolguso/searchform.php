<div id="search_box">
    <form action="<?php echo home_url( '/' ); ?>" method="get">
        <i class="fa fa-search"></i><input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    </form>
</div>