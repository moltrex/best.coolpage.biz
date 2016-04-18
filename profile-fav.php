<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test site</title>

        <?php  include 'includes/views/view-css.php'; ?>
    </head>
    <body>
        <div class="row site-wrap">
            <?php  include 'includes/views/view-top-bar.php'; ?>

            <div class="row main-content">

                <div class="row prf-user-data">
                    <? include 'includes/views/user/view-profile-data.php' ;?>    
                </div>
                <div class="row prf-user-menu">
                    <? include 'includes/views/user/view-profile-menu.php' ;?>
                </div>
                <div class="container prf-user-section">
                    
                    <div class="row prf-user-ads-fav" id="prf-user-ads-fav">
                        <div class="row pref-user-adds-filters">
                            <input type="submit" class="pref-user-delete-add" value="Sterge din lista de favorite" />
                        </div>
                        <div class="row addsbox-wrap">
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Becuri led bord B8.5D - leduri auto 1 SMD 5050 ALBASTRU">Becuri led bord B8.5D - leduri auto 1 SMD 5050 ALBASTRU</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item featured featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title featured">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price featured">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured hidden " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured hidden " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured hidden " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gp-list-item">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action ">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
                                        <i class="fa fa-circle"></i>
                                    </a>
                                </div>
                                <div class="row gp-image-wrap">
                                    <a href="#">
                                        <img src="includes/img/default-image.jpg" title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">
                                    </a>
                                </div>
                                <div class="row gp-title">
                                    <a href="#" class="gp-title-text" data-placement="bottom" data-toggle="tooltip" data-original-title="Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175">Bluza fara maneci Dama G-Star Raw Verde ...</a>
                                </div>
                                <div class="row gp-location" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Drobeta Turnu Severin">
                                    <span class="gp-location-text">Drobeta Turnu Severin</span>
                                </div>
                                <div class="row gp-tag-word-wrap">
                                    <span class="gp-tag-word">vand, inchiriez, schimb</span>
                                </div>
                                <div class="row gp-price">
                                    <span>89 ron</span>
                                </div>
                                <div class="row gp-bar-bot">
                                    <a class="gp-details" href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Vizualizare avansata">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-shortlist" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <div class="gp-date">
                                        <span>20</span> <span>Apr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>


            <div class="push"></div>
        </div>
        <?php  include 'includes/views/view-footer.php'; ?>

        <?php  include 'includes/views/view-modal.php'; ?>
        <?php  include 'includes/views/view-js.php'; ?>
    </body>
</html>