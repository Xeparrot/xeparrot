<?php


Menu::create('sidebar_core', function($menu) {
    // URL, Title, Attributes

    $menu->dropdown('Module Manager', function ($sub) {
        $sub->url('admin/blog', 'Explorer');
        $sub->url('admin/blog', 'Wishlist');
        $sub->url('admin/blog', 'Installed Modules');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-puzzle'
    ]);


});



