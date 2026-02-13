<?php
get_header();
?>
<div id="content">


    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                    _e('<h2>404 NOT FOUND</h2>', 'alpine');
                    _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'alpine');
                    ?>
                </div>
                <div class="col-lg-12">
                    <section class="section__form--search">
                        <div class="container">
                            <form class="row" action="<?php echo get_home_url(); ?>/" method="get">
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="s" name="s" value="" placeholder="Bạn muốn tìm gì?">
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

</div>
<?php
get_footer();
?>