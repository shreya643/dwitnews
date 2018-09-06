<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 8/22/18
 * Time: 5:17 PM
 */?>

<footer>
<div class="container">
    <div class="row blue-border-top">
        <div class="col-md-12">
            <div class="footer">
                <div class="row">
                    <div class="offset-md-3"></div>
                    <div class="col-md-6 text-center">

                        &copy;<?php echo date("Y");?>
                    </div>
                    <div class="offset-md-3"></div>
                </div>

            </div>
        </div>
    </div>

</div>
</footer>
<script>
    $(document).ready(function($){
        var winWidth =  $(window).width();
        var maxWidth = 994;
        if(winWidth < maxWidth){
            $(".navbar-content").addClass("collapse");

        }

        $(window).resize(function(){

            var winWidth =  $(window).width();

            var maxWidth = 1199;

            if(winWidth < maxWidth){
                $(".navbar-content").addClass("collapse");
            }
            else{
                $(".navbar-content").removeClass("collapse");
            }
        });

    });
</script>

</body>
</html>
