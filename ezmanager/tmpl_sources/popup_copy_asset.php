

<!--
This popup appears when the user clicks on "copy this record".
It presents the user with a list of albums he can copy the asset to.

You should not have to use this template on its own. however, if you do, please
make sure $created_albums_with_descriptions is initialized and is an array containing the album names (without any suffix) as keys, and albums descriptions as values
for every album the user can create.
-->

<div class="popup" id="popup_copy_asset_<?php echo $asset_name; ?>">
    <h2>®Copy®</h2>
    <!-- If all albums have already been created, we display a message explaining the situation -->
    <?php if(empty($created_albums_list_with_descriptions)) {
        ?>
        ®No_albums_to_copy_asset_to®
        <?php
    }
    
    //Else, we display the album list
    else { ?>
       ®Copy_asset_message®<br/>
        <table>
        <?php 
        foreach($created_albums_list_with_descriptions as $destination_name => $destination_description) {
             // how to get this out of templates?
                // sortir des template...
                $course_code_public = ezmam_album_course_public_name_get($destination_course_name."-pub"); //get course name from private or public album, should be the same              
            ?>
            <tr>
            <!-- Note: upon clicking this link, the JS function defined in show_details_functions.js will call the web_index
                 with an action "create_album". Once the processing is over, this div will be updated with the confirmation message. -->
                <td class="album_name">
                    <a href="javascript:popup_asset_copy_callback('<?php echo $album; ?>', '<?php echo $destination_name.'-priv'; ?>', '<?php echo $asset_name; ?>');"><?php echo $course_code_public; ?> (®private®)</a>
                </td>
                <td class="album_description">
                    <a href="javascript:popup_asset_copy_callback('<?php echo $album; ?>', '<?php echo $destination_name.'-priv'; ?>', '<?php echo $asset_name; ?>');"><?php echo $destination_description; ?> (®Private_album®)</a>
                </td>
            </tr>
            <tr>
            <!-- Note: upon clicking this link, the JS function defined in show_details_functions.js will call the web_index
                 with an action "create_album". Once the processing is over, this div will be updated with the confirmation message. -->
                <td class="album_name">
                    <a href="javascript:popup_asset_copy_callback('<?php echo $album; ?>', '<?php echo $destination_name.'-pub'; ?>', '<?php echo $asset_name; ?>');"><?php echo $course_code_public; ?> (®public®)</a>
                </td>
                <td class="album_description">
                    <a href="javascript:popup_asset_copy_callback('<?php echo $album; ?>', '<?php echo $destination_name.'-pub'; ?>', '<?php echo $asset_name; ?>');"><?php echo $destination_description; ?> (®Public_album®)</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </table>   
        <?php
    }
    ?>
</div>