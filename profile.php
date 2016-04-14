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
                    <div class="row prf-image-wrap">
                        <img src="includes/userpic/avatar/avatar.png" alt="">
                        <button type="button" data-target=".gp-modal-edit-avatar" data-toggle="modal" class="prf-image-edit">
                            <i class="fa fa-pencil"></i>
                        </button>
                    </div>
                    <div class="row prf-user-pref">
                        <div class="prf-my-name">
                            <span>iluca silviu gabriel</span>
                        </div>
                        <div class="prf-active-ads">
                            <span>6 anunturi active</span>
                        </div>
                        <div class="prf-active-since">
                            <span>Utilizator activ din 20 Oct 2015</span>
                        </div>
                    </div>  
                    <div class="row prf-primary-details-buttons">
                        <button data-target=".gp-modal-send-message" data-toggle="modal" class="btn btn-primary btn-lg bp-author-send-message" type="button">Trimite mesaj</button>
                        <span data-original-title="Click pentru a vedea nr de talefon" data-toggle="tooltip" class="btn btn-success btn-lg bp-auth-phone">07********</span>
                    </div> 
                </div>
                <div class="row prf-user-menu">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" data-original-title="Anunturi adaugate" data-toggle="tooltip" data-placement="bottom">
                            <a href="#prf-user-ads-wrap" aria-controls="prf-user-ads-wrap" role="tab" data-toggle="tab">
                                <i class="fa fa-bars"></i> <span class="prf-user-menu-text">Anunturi</span>
                            </a>
                        </li>
                        <li role="presentation" data-original-title="Anunturi favorite" data-toggle="tooltip" data-placement="bottom">
                            <a href="#prf-user-ads-fav" aria-controls="prf-user-ads-fav" role="tab" data-toggle="tab">
                                <i class="fa fa-heart"></i> <span class="prf-user-menu-text">Favorite</span>
                            </a>
                        </li>
                        <li role="presentation" data-original-title="Mesagerie" data-toggle="tooltip" data-placement="bottom">
                            <a href="#prf-user-inbox" aria-controls="prf-user-inbox" role="tab" data-toggle="tab">
                                <i class="fa fa-inbox"></i> <span class="prf-user-menu-text">Mesagerie</span>
                            </a>
                        </li>
                        <li role="presentation" data-original-title="Despre" data-toggle="tooltip" data-placement="bottom">
                            <a href="#prf-user-about" aria-controls="prf-user-about" role="tab" data-toggle="tab">
                                <i class="fa fa-user"></i> <span class="prf-user-menu-text">Despre</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="container prf-user-section">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="prf-user-ads-wrap">
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
                        <div role="tabpanel" class="tab-pane" id="prf-user-ads-fav">
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
                        <div role="tabpanel" class="tab-pane" id="prf-user-inbox">
                            <div class="row pref-user-adds-filters">
                                <input type="submit" class="pref-user-delete-add" value="Sterge" />
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-10 col-sm-11 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>
                                <div class="col-xs-1 col-sm-1 prf-msg-toggle">
                                    <a href="javascript:;" class="prf-msg-toggle-link" data-placement="bottom" data-toggle="tooltip" data-original-title="Vezi conversatia.">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="col-xs-12 col-sm-12 prf-msg-text-wrap">
                                    <div class="row prf-msg-text-original">
                                        <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                        <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                        <p>Ma poti suna si la numarul 0700 000 000</p>

                                        <a href="javascript:;" class="download-file">Download file: rezume.pdf</a>
                                    </div>
                                    <div class="row prf-msg-text-section">
                                        <div class="col-xs-12 prf-msg-text-user">
                                            <div class="row userProfileMyProfile">
                                                <a href="profile.php">
                                                    <img src="includes/userpic/avatar/avatar.png" class="userProfileImageSmall" alt="">
                                                    <span class="myName">iluca silviu gabriel</span>
                                                </a>
                                            </div>
                                        </div> 
                                        <div class="col-xs-12 prf-msg-text-message">
                                            <p>Da avem disponibil. </p>    
                                            <p>Nu e nici o problema te sun eu si iti explic exact. </p>   

                                            <!-- <a href="javascript:;" class="download-file">Download file: rezume.pdf</a>-->
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" class="btn btn-success prf-msg-reply">trimite mesaj</a>
                                <div class="row prf-msg-reply-wrap">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="prf-msg-reply-text">Mesajul tau</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>    
                                    </form>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                            <div class="row prf-msg-row">
                                <div class="col-xs-12 col-sm-10 prf-msg-from">
                                    <span>iluca.silviu@gmail.com</span> 
                                </div>
                                <div class="col-xs-1 col-sm-2 prf-msg-chk">
                                    <input type="checkbox" /> 
                                </div>
                                <div class="col-xs-11 col-sm-12 prf-msg-date">
                                    <span>20 Oct</span>
                                </div>



                                <div class="col-xs-12 col-sm-12 prf-msg-text">
                                    <p>Salut, ma intrebam daca mai disponibil anuntul, si daca poti sa imi explici mai exact pe unde e exact. </p>
                                    <p>Eu abia am venit in Iasi si nu prea ma pricep pe unde sunt toate locatiile.</p>
                                    <p>Ma poti suna si la numarul 0700 000 000</p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="prf-user-about">
                            <div class="row prf-user-about">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed orci quis nisl porttitor gravida. Duis nec posuere est. Curabitur faucibus erat nunc, ac suscipit ante semper sit amet. Mauris feugiat, libero ac gravida viverra, lacus lorem blandit ipsum, nec porttitor ligula turpis vitae nibh. Nulla quis turpis a massa aliquet finibus non vel orci. Maecenas nulla metus, sagittis interdum mi sed, sodales tempus mi. Duis nibh mi, porttitor ut scelerisque ac, sagittis in enim. Nulla fermentum eros in porttitor dapibus. Sed convallis et magna sed tincidunt.</p>
                                <p>Phasellus tempus tempor velit eu fringilla. Etiam fringilla blandit tellus, ut molestie risus rhoncus sit amet. Sed convallis enim eros, non vulputate orci rhoncus at. Nam sit amet nulla tristique, ullamcorper odio quis, ullamcorper libero. Quisque nec dui a felis molestie lacinia et in nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <p>Mauris interdum mauris quis nunc fringilla pulvinar. Pellentesque accumsan ante a erat fringilla, non sagittis felis accumsan. Praesent tempus dapibus mauris ac commodo. In at nunc vulputate, rhoncus nulla ac, posuere risus. Ut id mi non enim placerat rhoncus. </p>

                                <div class="row pref-user-usefull-links"> 
                                    <label>Linkuri utile</label>
                                    <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                                    <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                                    <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                                </div>

                                <div class="row pref-user-social">
                                    <label>Linkuri retele socializare</label>
                                    <div class="row pref-user-social-link">
                                        <a href="www.facebook.com" target="_blanck">
                                            <i class="fa fa-facebook-official"></i>
                                        </a>
                                    </div>
                                    <div class="row pref-user-social-link">
                                        <a href="www.twitter" target="_blanck">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="row pref-user-social-link">
                                        <a href="www.linkedin.com" target="_blanck">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
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