<?php
/**
 * This chunk is used to load GoogleAnalytics to a few main templates (main.tpl/mini.tpl etc.),
 * so there is no need to call it in ordinary content templates.
 *
 * This chunk is autoloaded in View class
 */
return function ($googleAnalyticsKey){
    //start of chunk
?>

    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?=$googleAnalyticsKey?>', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

<?php
}; //end of chunk
