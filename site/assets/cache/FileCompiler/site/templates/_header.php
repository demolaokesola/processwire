<section class="page-header" style="background-image: url(<?php echo $config->urls->templates ?>assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2><?php echo $page->title; ?></h2>
        <?php
        echo "<ul class='list-unstyled thm-breadcrumb'>";
        $parents = $page->parents;

        foreach ($parents as $parent) {
            $url = $parent->url;
            echo "<li><a href='$url'>{$parent->title}</a></li>";
        }

        echo "<li><span>{$page->title}<span></li>";
        echo "</ul>";

        ?>
    </div><!-- /.container -->
</section><!-- /.page-header -->