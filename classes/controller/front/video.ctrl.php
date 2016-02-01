<?php

namespace Novius\HtmlVideo;

class Controller_Front_Video extends \Nos\Controller_Front_Application
{

    public function action_embed($args = array())
    {
        $config = $this->config;
        return \View::forge('novius_html_video::front/video', compact('args', 'config'), false);
    }
}
