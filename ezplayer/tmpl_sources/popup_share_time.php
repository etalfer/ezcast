<?php
/*
 * EZCAST EZplayer
 *
 * Copyright (C) 2014 Université libre de Bruxelles
 *
 * Written by Michel Jansens <mjansens@ulb.ac.be>
 * 	      Arnaud Wijns <awijns@ulb.ac.be>
 *            Carlos Avidmadjessi
 * UI Design by Julien Di Pietrantonio
 *
 * This software is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this software; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */
?>
<div id="popup_share_time" class="reveal-modal left">
    <h2><?php echo print_info($asset_meta['title']); ?></h2>
    <br/><p>®Share_time_message®</p>
    <br/><p style="text-align:center; color: #333333;" id="share_time_link"><?php echo $share_time ?>0</p>
    <a class="close-reveal-modal">&#215;</a>
    <br/>

    <!--[if !IE]><!-->
    <div class="wrapper_clip" style="position:relative; text-align: center;">
        <span id="share_time" class="copy-to-clipboard-button">®Copy_to_clipboard®</span>
        <div id="share_clip"
             title="®Share_time®"
             onmouseout="getElementById('share_time').style.background='#333333'" 
             onmouseover="getElementById('share_time').style.background='#11acea'" 
             style="position:absolute; left:160px; top:0px; width:200px; height:30px; z-index:105; cursor: pointer;">
        </div>
    </div>
    <script> 
            if (document.getElementById('secondary_video')) {
        if (type == 'slide') {

            var video = document.getElementById('secondary_video');
        } else {

            var video = document.getElementById('main_video');
        }
    } else {
        var video = document.getElementById('main_video');
    }
    time = Math.round(video.currentTime);
    document.getElementById('share_time_link').innerHTML = '<?php echo $share_time; ?>' + time + '&type=' + type;

    copyToClipboard('#share_clip', '<?php echo $share_time; ?>'+ time +'&type='+type); </script>
    <!--<![endif]-->  

    <!--[if IE]>
    <a class="copy-to-clipboard-button" id="share_clip" href="#" onclick="window.clipboardData.setData('Text','<?php echo $share_time; ?>'+time+'&type='+type);"></a>
    <![endif]-->
</div>
