<?php 

         $app_id = "YOUR_APP_ID";

         $canvas_page = "YOUR_CANVAS_PAGE_URL";

         $message = "Apps on Facebook.com are cool!";

         $feed_url = "http://www.facebook.com/dialog/feed?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["post_id"])) {
            echo("<script> top.location.href='" . $feed_url . "'</script>");
         } else {
            echo ("Feed Post Id: " . $_REQUEST["post_id"]);
         }
?>