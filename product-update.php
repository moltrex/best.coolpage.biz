<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test site</title>

        <?php  include 'includes/views/template/view-css.php'; ?>
    </head>
    <body>
        <div class="row site-wrap">
            <?php  include 'includes/views/template/view-top-bar.php'; ?>

            <div class="row main-content">
                <div class="row bp-product-pic">
                    <div class="col-xs-12">
                        <!-- The container for the list of example images -->
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="includes/userpic/03-100.jpg">
                                    <img src="includes/userpic/03-1000.jpg" alt="CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU">
                                </li>
                                <li data-thumb="includes/userpic/06-100.jpg">
                                    <img src="includes/userpic/06-1000.jpg"  alt="CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU">
                                </li>
                                <li data-thumb="includes/userpic/09-100.jpg">
                                    <img src="includes/userpic/09-1000.jpg" alt="CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU">
                                </li>
                                <li data-thumb="includes/userpic/12-100.jpg">
                                    <img src="includes/userpic/12-1000.jpg" alt="CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU">
                                </li>
                                <li data-thumb="includes/userpic/15-100.jpg">
                                    <img src="includes/userpic/15-1000.jpg" alt="CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row bp-primary-details-buttons">
                    <div class="container">
                        <div class="hidden-xs col-sm-6"></div>
                        <div class="hidden-xs col-sm-6 product-contact-user">
                            <button data-target=".gp-modal-send-message" data-toggle="modal" class="btn btn-primary btn-lg bp-author-send-message" type="button">Trimite mesaj</button>
                            <span data-original-title="Click pentru a vedea nr de talefon" data-toggle="tooltip" class="btn btn-success btn-lg bp-auth-phone">07********</span>    
                        </div>
                    </div>
                </div>    
                <div class="row prf-user-data">
                    <? include 'includes/views/user/view-profile-data.php' ;?>    
                </div>

                <div class="row prf-user-menu">
                    <? include 'includes/views/user/view-profile-menu.php' ;?>
                </div>

                <div class="container prf-user-section">


                </div>
            </div>


            <div class="push"></div>
        </div>
        <?php  include 'includes/views/template/view-footer.php'; ?>

        <?php  include 'includes/views/template/view-modal.php'; ?>
        <?php  include 'includes/views/template/view-js.php'; ?>
    </body>
</html>