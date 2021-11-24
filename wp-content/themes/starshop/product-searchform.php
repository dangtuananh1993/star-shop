<?php
/**
 * Custom search form
 */
?>

<form role="search" method="GET" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
<div class="search-sl">
    <select name="s_cat" id="">
        <div class="option-cover">
        <option value="0">All Category</option>
        <?php if(get_field('category_header_menu','options')):?>
        <?php foreach(get_field('category_header_menu','options') as $item):?>
            
        <?php $term = get_term( $item['category_header_menu_link'], 'product_cat' ); ?>
            <option value="<?php echo $term->slug; ?>" <?php if(isset($_GET['s_cat']) &&  $_GET['s_cat']==$term->slug) {echo "selected";}?>> <?php echo get_the_category_by_ID(  $item['category_header_menu_link'] );?> </option>
        <?php endforeach?>
        <?php endif?>    
        </div>
    </select>
</div>
<div class="search-input">
    <input type="text"  name ="s" id="search" value="<?php if(isset($_GET['s'])) {echo $_GET['s'];}?>"  placeholder="<?php echo esc_attr_x('Search your product', 'placeholder', 'starshop'); ?>" value ="" name="s">
</div>
<div class="search-button">
    <button type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri() . '/' ?>img/Header and slider/icon-search.png" alt=""></button>
</div>
</form>