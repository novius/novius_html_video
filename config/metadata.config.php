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
    'name'      => 'Media Centre Video',
    'version'   => '5.0 (Elche)',
    'provider'  => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'Novius\HtmlVideo',
    'i18n_file' => 'novius_html_video::common',
    'launchers' => array(),
    'enhancers' => array(
        'novius_html_video' => array( // key must be defined
            'title'    => 'Media Centre Video',
            'desc'     => '',
            'enhancer' => 'novius_html_video/front/video/embed', // URL of the enhancer
            'dialog'   => array(
                'contentUrl' => 'admin/novius_html_video/enhancer/popup',
                'width'      => 650,
                'height'     => 550,
                'ajax'       => true,
            ), // URL of the enhancer
        ),
    ),
    'icons'     => array(
        64 => 'static/apps/novius_html_video/img/icon/64.png',
        32 => 'static/apps/novius_html_video/img/icon/32.png',
        16 => 'static/apps/novius_html_video/img/icon/16.png',
    ),
);
