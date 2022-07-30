<?php



Menu::create('navbar', function($menu) {
    // URL, Title, Attributes

    $menu->dropdown('Blog', function ($sub) {
        $sub->url('admin/blog', 'Articles');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-book'
    ]);
});
