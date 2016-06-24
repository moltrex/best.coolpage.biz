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
                
                <!-- CAROUSEL -->
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 bp-product-pic-slider">
                    <ul class="rslides">
                        <li>
                            <img class="bp-product-slider-image" src="includes/userpic/01-650.jpg" alt="">
                        </li>
                        <li>
                            <img class="bp-product-slider-image" src="includes/userpic/02-650.jpg" alt="">
                        </li>
                        <li>
                            <img class="bp-product-slider-image" src="includes/userpic/03-650.jpg" alt="">
                        </li>
                        <li>
                            <img class="bp-product-slider-image" src="includes/userpic/04-650.jpg" alt="">
                        </li>
                        <li>
                            <img class="bp-product-slider-image" src="includes/userpic/05-650.jpg" alt="">
                        </li>
                    </ul>
                </div>
                
                <!-- END CAROUSEL -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 bigads-page-wrap">
                    <div class="row bp-add-main-details">
                        <div class="col-xs-12">
                            <div class="row bp-product-data">
                                <span class="bp-product-id">ID anunt: 365895647</span>
                                <span class="bp-product-date">Data anunt: 15-12-2016</span>
                                <span class="bp-product-owner-label">Postat de:</span>
                                <a href="profile-ads.php" class="bp-product-owner-link">iluca.silviu</a>
                            </div>
                            <div class="row bp-product-title">
                                <span>CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU</span>
                            </div>
                            <div class="row form-group bp-tag-wrap">
                                <span class="search-tags-words">schimb</span>
                                <span class="search-tags-words">inchiriez</span>
                                <span class="search-tags-words">caut chirie</span>
                                <span class="search-tags-words">caut coleg(a)</span>
                            </div>
                            <div class="row bp-primary-details">
                                <div class="bp-primary-details-price">
                                    <span class="row bp-prod-price">1700 RON</span>
                                </div>
                                <div class="bp-add-to-fav">
                                    <a href="javascript:void(0)" class="" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                                <div class="bp-product-flag">
                                    <a href="javascript:void(0)" class="" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                </div>
                            </div>



                            <div class="row bp-product-text-wrap">
                                <div class="bp-product-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <p>Nam faucibus egestas lorem, sed efficitur felis ultrices blandit. </p>
                                    <p>Vivamus laoreet ultricies nibh, eget imperdiet sem auctor tincidunt. Integer pulvinar sed eros vel malesuada. </p>
                                    <p>Pellentesque euismod sit amet lorem vitae tincidunt. Sed non dui finibus, eleifend mi blandit, convallis arcu. </p>
                                    <p>Phasellus accumsan feugiat scelerisque. Sed facilisis, dui eget cursus mollis, risus turpis vestibulum erat, eu dictum libero justo nec lacus. </p>
                                    <p>Donec porta urna augue, sit amet condimentum arcu congue et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bp-add-technical">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-horizontal">
                                    <div class="col-xs-12 col-sm-6 col-lg-6 form-group">
                                        <label for="inputEmail3" class="col-xs-5 control-label">Autor anunt</label>
                                        <div class="col-xs-7">
                                            <span class="form-control">Proprietar</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6 form-group">
                                        <label for="inputEmail3" class="col-xs-5 control-label">Numar anunt</label>
                                        <div class="col-xs-7">
                                            <span class="form-control">368953641</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6 form-group">
                                        <label for="inputEmail3" class="col-xs-5 control-label">Adaugat pe</label>
                                        <div class="col-xs-7">
                                            <span class="form-control">20 Oct 2015</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6 form-group">
                                        <label for="inputEmail3" class="col-xs-5 control-label">Localitate</label>
                                        <div class="col-xs-7">
                                            <span class="form-control">Constanta</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bp-primary-details-buttons">
                        <div class="col-xs-12">
                            <button data-target=".gp-modal-send-message" data-toggle="modal" class="btn btn-primary btn-lg bp-author-send-message" type="button">Trimite mesaj</button>
                            <span data-original-title="Click pentru a vedea nr de talefon" data-toggle="tooltip" class="btn btn-success btn-lg bp-auth-phone">07********</span>
                        </div>
                    </div>

                </div>
            </div>


            <div class="push"></div>
        </div>
        <?php  include 'includes/views/template/view-footer.php'; ?>

        <?php  include 'includes/views/template/view-modal.php'; ?>
        <?php  include 'includes/views/template/view-js.php'; ?>
    </body>
</html>