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
                        <p>
                            <a href="aboutus.php">About us</a>| Email:<strong>dwitnews@deerwalk.edu.np</strong> | Facebook:<a href="https://www.facebook.com/dwitnews/">DWIT News</a>

                        </p>
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

    <script>
        window.onscroll = function() {
            growShrinkLogo()
        };

        function growShrinkLogo() {
            var Logo = document.getElementById("logo");
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                Logo.style.width = '150px';
            } else {
                Logo.style.width = '250px';
            }
        }
    </script>


</body>
</html>
