<!--This source is useful only in CakePhp 3.0-->

<?php
$theme_folder = "/gritter";

//Put this to the Head
echo $this->Html->css("$theme_folder/css/jquery.gritter.css");//Put this to the Footer
echo $this->Html->script("$theme_folder/js/jquery.gritter.min.js");
?>


<!--//Add below section to the Footer-->
<?php $flash_message = strip_tags(trim($this->Flash->render())); ?>
<?php if (!empty($flash_message)) { ?>
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
<?php } ?>  