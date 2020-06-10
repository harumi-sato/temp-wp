<?php get_header(); ?>
<main class="l-main">
<div class="l-contents">

<article class="p-error">
<h1 class="p-error__title">Not Found</h1>
<p class="p-error__sub">お探しのページは見つかりませんでした。</p>
<div class="p-error__entry">
<p>ご指定のページは削除されたか、移動した可能性がございます。</p>
<div class="p-error__back"><a href="<?php echo home_url( '/' ); ?>">トップページへ</a>／<a a="" href="#" onclick="history.back(); return false;">前のページへ戻る</a></div>
</div>
</article>

</div>
</main>
<?php get_footer(); ?>