# Novius Theme Manager

This is a theme manager for novius os.

## Selecting a theme

This app extends noviusos_user. The configuration of the theme for a user will be located below the "change password"
section of the "Account" launcher.

## Creating a theme

To create a theme, create an application extending novius_theme_manager.

Then add the configuration of your theme in config/apps/novius_theme_manager.

The default css of novius os will be prepended to your files.

```php
return array(
    'key_name' => array(
        'name' => __('Flat'),
        'css'  => array(
            'minified' => array(
                "minfiedfile.css",
            ),
            'raw'      => array(
                "rawfile.css",
            ),
        ),
    ),
);
```
