# Display (in popup/diolog) flash message in cakephp 3.0

Please follow below steps for the basic integration,

Step 1 : put "gritter" folder in your webroot folder
Step 2: put "layout.php" file code in your cakephp layout file as per the instruction inside the file.


 <script>
        /*
         * For Notification with alert.
         * glitterCallAlert("Title","Message","HideSpeed","SlowSpeed","NotificationClassName");
         * E.g glitterCallAlert("Notification :","Mayur GOdhani",5000,500,"my-sticky-class");                
         */
        $(document).ready(function () {
            glitterCallAlert("Notification :", '<?php echo $flash_message; ?>');
        });
</script> 
