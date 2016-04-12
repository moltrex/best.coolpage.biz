<header class="nr top-bar-wrap">
    <div class="pull-left top-bar-brand">
        <a href="/" class="logo"><span>test site</span></a>
        <a href="javascript:;" class="sidebar-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="pull-right top-menu-wrap">
        <div class="btn-group menu-profile-dropdown" role="group" aria-label="userButtonsWrap">
            <button type="button" class="btn btn-default menu-profile-btn">
                <span class="top-user-register-icon"><i class="fa fa-unlock-alt"></i></span>
                <span class="top-user-register-text">contul meu</span>
                <span class="caret"></span>
            </button>
            <div class="nr menu-profile">
                <form action="" class="formLogin hidden">
                    <div class="nr">
                        <div class="col-xs-12">
                            <label class="title">Autentificare</label>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="col-xs-12">
                            <div class="divider borderGrey"></div>
                        </div>
                    </div>
                    <div class="nr userEmail">
                        <div class="col-xs-12">
                            <label>Email</label>
                        </div>
                        <div class="col-xs-12 column">
                            <input type="text" value="" id="userEmailInput" class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="nr userPassword">
                        <div class="col-xs-12">
                            <label>Parola</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" value="" id="userPasswordInput" class="form-control">
                        </div>
                    </div>
                    <div class="nr userRememberAccount">
                        <div class="col-xs-12">
                            <input type="checkbox" id="userRememberAccountCheckbox">
                            <label for="userRememberAccountCheckbox">Retine autentificarea</label>
                        </div>
                    </div>
                    <div class="nr userSubmit">
                        <div class="col-xs-6">
                            <input type="submit" value="Autentificare" class="btn btn-primary"
                                   id="userSubmit userLogin">
                        </div>
                        <div class="col-xs-6">
                            <a class="btn userRegisterLink" href="#">Inregistrare</a>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="col-xs-12">
                            <div class="divider borderGrey"></div>
                        </div>
                    </div>
                    <div class="nr forgetPassword">
                        <div class="col-xs-12">
                            <a href="#" class="forgetPasswordText"><i class="fa fa-bed"></i> Am uitat parola!</a>
                        </div>
                    </div>

                </form>
                <form action="" class="formRegister hidden">
                    <div class="nr">
                        <div class="col-xs-12">
                            <label class="title">Creare cont</label>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="col-xs-12">
                            <div class="divider borderGrey"></div>
                        </div>
                    </div>
                    <div class="nr userEmail">
                        <div class="col-xs-12">
                            <label>Email</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" value="" id="userEmailInput" class="form-control">
                        </div>
                    </div>
                    <div class="nr userName">
                        <div class="col-xs-12">
                            <label>Nume utilizator</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" value="" id="userNameInput" class="form-control">
                        </div>
                    </div>
                    <div class="nr userPhone">
                        <div class="col-xs-12">
                            <label>Numar telefon</label>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" value="" id="userPhoneInput" class="form-control">
                        </div>
                    </div>

                    <div class="nr capcha">
                        <div class="col-xs-12">
                            <!-- reChapcha -->
                            <label>capcha</label>
                        </div>
                    </div>
                    <div class="nr userAgreement">
                        <div class="col-xs-12">
                            <p>
                                Apasand pe butonul de "Creare cont", sunteti de acord cu <a class="topLink" href="javascript:;">Termenii de utilizare</a> ai site-ului Cautsa.ro.
                            </p>
                        </div>
                    </div>
                    <div class="nr userSubmit">
                        <div class="col-xs-6">
                            <input type="submit" value="Creare cont" class="btn btn-primary"
                                   id="userSubmit userRegister">
                        </div>
                        <div class="col-xs-6">
                            <a class="btn userLoginLink" href="#">Autentificare</a>
                        </div>
                    </div>
                </form>
                <div class="nr userProfileDropdown">
                    <div class="nr">
                        <div class="col-xs-12">
                            <label class="title"><span class="hiMessage">Bun venit,</span></label>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="divider borderGrey"></div>
                    </div>
                    <div class="nr userProfileMyProfile">
                        <a href="profile.php">
                            <img alt="" class="userProfileImageSmall" src="include/img/default-image.jpg">
                            <span class="myName">iluca silviu gabriel</span>
                        </a>
                    </div>
                    <div class="nr">
                        <div class="divider borderGrey"></div>
                    </div>
                    <div class="nr nopad userProfileDropdownHelp">
                        <div class="col-xs-12">
                            <a href="#">Ai nevoie de ajutor?</a>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="divider borderGrey"></div>
                    </div>
                    <div class="nr nopad userProfileDropdownMesajeAlerte">
                        <div class="col-xs-10">
                            <a href="#">Mesaje sau Alerte </a>
                        </div>
                        <div class="col-xs-2">
                            <span href="" class="userProfileAlertNumber pull-right">0</span>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="divider borderGrey"></div>
                    </div>
                    <div class="nr nopad userProfileFavourites">
                        <div class="col-xs-10">
                            <a href="#">Favorite</a>
                        </div>
                        <div class="col-xs-2">
                            <span href="" class="userProfileAlertNumber pull-right">5</span>
                        </div>
                    </div>
                    <div class="nr">
                        <div class="divider borderGrey"></div>
                    </div>
                    <div class="nr nopad userProfileDropdownLogOut">
                        <div class="col-xs-12">
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-group top-bar-new-add-wrap" aria-label="visitorsButtonNewAdd">
            <a title="" data-placement="bottom" data-toggle="tooltip" href="javascript:;"
               class="btn btn-default btn-success top-bar-new-add-wrap-link"
               data-original-title="Adaoga anuntul tau gratuit">
                <span class="top-bar-new-add-wrap-icon">
                    <i class="fa fa-plus-circle"></i>
                    <span class="top-bar-new-add-wrap-link-text">
                        test btn add
                    </span>
                </span>
            </a>
        </div>
    </div>
    <div class="nr visible-xs filters-wrap" data-original-title="Filtreaza rezultatele" data-toggle="tooltip" data-placement="bottom">
        <a href="javascript:;" class="filters-link">
            <span class="glyphicon glyphicon-tasks"></span>
        </a>
    </div>
    <div class="nr visible-xs search-mobile-wrap">
        <a href="javascript:;" class="search-mobile-link">
            <i class="fa fa-search"></i>    
        </a>
    </div>
    <div class="pull-left hidden-xs top-bar-input-group">
        <form>
            <div class="input-group col-xs-12 col-sm-6 top-bar-search-wrap">
                <input type="text" class="form-control search-text" id="exampleInputAmount"
                       placeholder="Incepe cautarea aici ...">
            </div>
            <div class="input-group col-xs-12 col-sm-4 search-location-text-wrap">
                <input type="text" class="form-control search-location-text" placeholder="cautati locatie ...">
                <a href="javascript:void(0)" class="search-location-cancel-btn hidden">
                    <i class="fa fa-times"></i>
                </a>
                <ul class="search-location-list-wrap hidden">
                    <li class="search-location-list-item">Harlau, Iasi</li>
                    <li class="search-location-list-item">Iasi, Iasi</li>
                    <li class="search-location-list-item">Pascani, Iasi</li>
                    <li class="search-location-list-item">Podu Iloaiei, Iasi</li>
                    <li class="search-location-list-item">Targu Frumoas, Iasi</li>
                </ul>
            </div>
            <div class="input-group col-xs-6 col-sm-1 btn-success search-submit-wrap">
                <input type="submit" class="search-submit" value="Cautare">
                <i class="fa fa-search"></i>
            </div>
            <div class="input-group hidden-xs col-sm-1 filters-wrap" data-original-title="Filtreaza rezultatele" data-toggle="tooltip" data-placement="bottom">
                <a href="javascript:;" class="filters-link">
                    <span class="glyphicon glyphicon-tasks"></span>
                </a>
            </div>
        </form>

    </div>
</header>