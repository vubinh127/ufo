<?php
function pagination($query)
{ ?>
    <div class="paginate_links">
        <?php
        $pages = paginate_links(array(
            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'total'        => $query->max_num_pages,
            'current'      => max(1, get_query_var('paged')),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'array',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => '<span class ="fa fa-caret-left" aria-hidden="true"></span><span class="prev-text">Prev</span>',
            'next_text'    => '<span class="next-text">Next</span> <span class ="fa fa-caret-right" aria-hidden="true"></span>',
            'add_args'     => false,
            'add_fragment' => '',
        ));
 
        if (is_array($pages)) :
            foreach ($pages as $p) : ?>
                <?php echo $p; ?>
        <?php endforeach;
        endif; ?>
    </div>
<?php
}
 
function modify_product_cat_query($query)
{
    if (!is_admin() && $query->is_tax("product_cat")) {
        $query->set('posts_per_page', 2);
    }
}
add_action('pre_get_posts', 'modify_product_cat_query');

function panigation_css(){
?>
<style>
    /*paginate_links*/
  .paginate_links {
    overflow: hidden;
    text-align: center !important;
    display: flex;
    margin: 30px auto;
    width: 100% !important;
    justify-content: center;
  }
  .paginate_links .page-numbers {
    width: 32px;
    height: 32px;
    display: inline-block;
    float: left;
    margin: 0 5px 0 5px;
    padding-top: 5px;
    color: #007bb6;
    border: 1px solid #007bb6;
    /* margin-bottom: 5px; */
  }
  .paginate_links .page-numbers:hover {
    background: #007bb6;
    color: #fff;
  }
  .paginate_links .page-numbers.prev,
  .paginate_links .page-numbers.next {
    background: transparent;
    width: auto;
    border: none;
  }
  .paginate_links .page-numbers.prev:hover,
  .paginate_links .page-numbers.next:hover {
    text-decoration: underline;
    color: #007bb6;
  }
  .paginate_links .page-numbers.current {
    background: #007bb6;
    color: #fff;
  }
  /* .paginate_links {
      width: 100% !important;
      text-align: center !important;
      margin: 0 auto;
  } */
  /*End paginate_links*/

</style>
<?php
}
add_action('wp_footer', 'panigation_css');