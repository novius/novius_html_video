<?php

if (empty($args['media'])) {
    return;
}
$media = \Nos\Media\Model_Media::find($args['media']);

$align = \Arr::get($args, 'align', 'left');

$setup = array_filter(\Arr::get($config, 'setup', array()));
$id = uniqid('novius_video_');
$poster = null;
if (!empty($args['poster'])) {
    $poster = \Nos\Media\Model_Media::find($args['poster']);
}
?>
<noscript>
    <a href="<?= $media->url(false) ?>">Video</a>
    <?php
    if (!empty($poster)) {
        ?>
        <a href="<?= $poster->url(false) ?>">Poster</a>
        <?php
    }
    ?>
</noscript>
<div class="video-container"
     style="text-align:<?= $align ?>">
    <video
        id="<?= $id ?>"
        class="video-js vjs-big-play-centered"
        preload="auto"
        data-setup='<?= json_encode($setup) ?>'
        <?php

        if (!empty($args['width'])) {
            echo ' width="'.$args['width'].'" ';
        }
        if (!empty($args['height'])) {
            echo ' height="'.$args['height'].'" ';
        }


        if (!empty($args['autoplay'])) {
            echo ' autoplay="1"';
        }

        if (!empty($args['loop'])) {
            echo " loop='loop' ";
        }

        if (!empty($args['mute'])) {
            echo " muted='muted' ";
        }

        if (!empty($poster)) {
            echo " poster='".$poster->url(false)."' ";
        }

        ?>

        controls>
        <source src="<?= $media->url(false) ?>">
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
</div>