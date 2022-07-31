<?php


Menu::create('sidebar_core', function($menu) {
    // URL, Title, Attributes

    $menu->dropdown('Customers', function ($sub) {
        $sub->url( url('admin/customers'), 'List Customer');
        $sub->url('admin/blog', 'Create New');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-people'
    ]);

    $menu->dropdown('Module Manager', function ($sub) {
        $sub->url( url('admin/module-explorer'), 'Explorer');
        $sub->url('admin/blog', 'Wishlist');
        $sub->url('admin/blog', 'Installed Modules');
    }, [
        'icon'=> 'c-sidebar-nav-icon cil-puzzle'
    ]);




});



