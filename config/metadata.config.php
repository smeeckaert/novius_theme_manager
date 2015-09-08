<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link       http://www.novius-os.org
 */

return array(
    'name'       => 'Theme Manager',
    'version'    => '5.0.1 (Elche)',
    'provider'   => array(
        'name' => 'Smeeckaert Martin',
    ),
    'extends'    => array('noviusos_user'),
    'namespace'  => 'Novius\Theme\Manager',
    'permission' => array(),
    'launchers'  => array(),
    'enhancers'  => array(),
    'icons'      => array(
        16 => 'static/apps/novius_theme_manager/img/icon/16.png',
        32 => 'static/apps/novius_theme_manager/img/icon/32.png',
        64 => 'static/apps/novius_theme_manager/img/icon/64.png',
    ),
);
