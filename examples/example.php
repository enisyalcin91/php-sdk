<?php 

         $app_id = "197293250306853";

         $canvas_page = "http://apps.facebook.com/hisimborekpidecafe/";

         $message = "";

         $feed_url = "http://www.facebook.com/dialog/feed?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["post_id"])) {
            echo("<script> top.location.href='" . $feed_url . "'</script>");
         } else {
            echo ("Feed Post Id: " . $_REQUEST["post_id"]);
         }
?>