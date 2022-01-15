<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<section class="section-404">
        <header class="error-header">
            <h1 class="head">404 File not found.</h1>
        </header>
        
        <section class="error-section">
            <h2 class="head">404</h2>
            <h3 class="txt-1">お探しのページは<br class="sp-onlyt">見つかりません</h3>
            <p class="txt-2 mgb-30">お探しのページは一時的にアクセスできない状況にあるか、<br class="pc-onlyt">移動もしくは削除された可能性があります</p>
            <a href="javascript:history.back();" class="f16">一つ前のページへ戻る</a>
        </section>
    </section>

<?php
get_footer();
