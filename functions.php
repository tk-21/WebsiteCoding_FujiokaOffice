<?php
add_action('init', function () {
    // アイキャッチ画像を使用可能にする
    add_theme_support('post-thumbnails');

    //メニューをサポート
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション',
    ]);
});


/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{ /* 設定後にパーマリンクを更新する */
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blogs'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* アーカイブページの表示件数を12件にセット */
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;

    if ($query->is_archive()) {
        $query->set('posts_per_page', '12');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');
