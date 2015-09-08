<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link       http://www.novius-os.org
 */

$themeFiles = \Config::load('novius_theme_manager::themes', true);
$listThemes = array();
foreach ($themeFiles as $key => $theme) {
    $listThemes[$key] = $theme['name'];
}
return array(
    'fields' => array(
        'user__theme' => array(
            'label' => __('Theme'),
            'form'  => array(
                'type'    => 'select',
                'options' => $listThemes,
            )
        ),
    ),
);
