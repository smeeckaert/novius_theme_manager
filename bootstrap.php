<?php

if (NOS_ENTRY_POINT === 'admin') {
    \View::redirect('nos::admin/html', 'novius_theme_manager::html');
}
