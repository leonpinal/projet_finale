<?php
require_once 'views/page_top.php' ;
?>
<!--START main--->
<!-- LE grand contenur slider -->
<div id="slider">
    <!-- Inputs poul le controle du caroulsel, on va cacher ces inputs -->
    <input checked type="radio" name="slider" id="slide1">
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <!-- START le carousel -->
    <div id="slides">
        <!-- la fênetre -->
        <div id="overflow">
            <!-- START photos -->
            <div class="inner">
                <!-- Diapositive 01 -->
                <div class="photo">
                    <img src="images/carousel/brun.jpg" alt="Diapositive de ours brun">
                </div>
                <!-- Diapositive 02 -->
                <div class="photo">
                    <img src="images/carousel/panda.jpg" alt="Diapositive de panda">
                </div>
                <!-- Diapositive 03 -->
                <div class="photo">
                    <img src="images/carousel/polaire.jpg" alt="Diapositive de polaire">
                </div>

            </div><!-- END inner -->

        </div> <!-- END overflow -->

    </div> <!-- END slides -->

    <!-- div qui contient les boutons de control -->
    <div id="active">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
    </div><!-- END #active -->


</div><!-- END slider -->

<?php
require_once 'views/page_bottom.php' ;
?>
