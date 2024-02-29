<?php
/*
 * Template Name: My Custom Category Page
 */

get_header(); // Include the WordPress header

global $wpdb;
$categories = $wpdb->get_results("SELECT DISTINCT category, category_slug FROM {$wpdb->prefix}bp_pages ORDER BY category", ARRAY_A);
?>

<div class="container txt">
    <div class="row row_title">
        <div class="col-lg-8" style="margin:auto; margin-bottom: 0px">
            <h1>Business Plans par secteur d'activité</h1>
            <p class="txt_sub">
                Explorez des guides spécialisés et des modèles pour élaborer le business plan idéal, adapté aux exigences uniques de votre secteur.
            </p>
            <hr>
            <div class="block_contenido" style="padding-bottom: 60px; margin-top: 30px">
                <h2>Secteurs</h2>
                <ul>
                    <?php foreach ($categories as $category) { ?>
                        <li>
                            <a href="/<?php echo esc_attr($category['category_slug']); ?>" style="text-decoration: none; font-weight: 300">
                                <?php echo esc_html($category['category']); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
get_footer(); // Include the WordPress footer
?>
