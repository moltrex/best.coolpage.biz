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

                <div class="row prf-user-data">
                    <? include 'includes/views/user/view-profile-data.php' ;?>  
                </div>
                <div class="row prf-user-menu">
                    <? include 'includes/views/user/view-profile-menu.php' ;?>
                </div>
                <div class="container prf-user-section">
                    <div class="nr prf-user-ads-wrap" id="prf-user-ads-wrap">
                        <div class="row pref-user-adds-filters">
                            <a href="javascript:;" class="pref-user-promo-add" data-placement="bottom" data-toggle="tooltip" data-original-title="Bifati mai jos anunturile care doriti sa le promovati, apoi dati click pe acest link.">Promoveaza anunt</a>
                            <button class="pref-user-delete-add" data-target=".gp-erase-adds" data-toggle="modal" type="button">Sterge anunturi selectate</button>
                            <button class="pref-user-activate-add" data-target=".gp-modal-activate-add" data-toggle="modal" type="button">Reactiveaza anunt</button>
                        </div>
                        <div class="row addsbox-wrap">
                            <div class="gp-list-item featured-pro">
                                <div class="row gp-top-bar">
                                    <span class="gp-checkbox-action">
                                        <input type="checkbox" name="reactiveaza-anunt">
                                    </span>
                                    <a href="javascript:void(0)" class="gp-add-featured" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt featured <?php echo '<br> salut'; ?> ">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a> 
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
                                    <a href="javascript:void(0)" class="gp-add-edit" data-placement="bottom" data-toggle="tooltip" data-original-title="Click pentru a edita acest anunt.">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-hide" data-placement="bottom" data-toggle="tooltip" data-original-title="Anuntul va disparea pana la reincarcarea paginii.">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-flag hidden" data-toggle="modal" data-target=".gp-modal-flag">
                                        <i class="fa fa-flag"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-active hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt activ">
                                        <i class="fa fa-check-circle"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="gp-add-inactive " data-placement="bottom" data-toggle="tooltip" data-original-title="Anunt inactiv">
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
                                    <a href="javascript:void(0)" class="gp-add-shortlist hidden" data-placement="bottom" data-toggle="tooltip" data-original-title="Adaoga la preferate">
                                        <i class="fa fa-heart-o"></i>
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
        <?php  include 'includes/views/template/view-footer.php'; ?>

        <?php  include 'includes/views/template/view-modal.php'; ?>
        <?php  include 'includes/views/template/view-js.php'; ?>
    </body>
</html>