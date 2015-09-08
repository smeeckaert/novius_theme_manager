<?php

Nos\I18n::current_dictionary('novius_theme_manager::common');

return array(
    'default' => array(
        'name' => __('Default'),
        'css' => array(
            'minified' => array(
                "static/novius-os/admin/novius-os/css/nos.min.css",
            ),
            'raw'      => array(
                "static/novius-os/admin/novius-os/css/laGrid.css",
                "static/novius-os/admin/novius-os/css/novius-os.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.ostabs.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.appdesk.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.listgrid.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.treegrid.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.thumbnailsgrid.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.preview.css",
                "static/novius-os/admin/novius-os/css/jquery.novius-os.datacatchers.css",
            ),
        ),
    ),
);