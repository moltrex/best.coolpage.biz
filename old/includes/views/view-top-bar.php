<div class="row top-bar">
    <div class="logo-wrap">
        <a href="index.php" class="btn btn-default btn-logo">
            <span class="logo-simbol"></span>
            <span class="logo-text">test-site</span>
        </a>
    </div>
    <div class="user-option">
        <div class="visitor-wrap">
            <div class="btn-group menu-profile-dropdown" role="group" aria-label="visitorsButtonsWrap">
                <button type="button" class="btn btn-default dropdown-toggle menu-profile-btn">
                    <span class="top-user-register-icon"><i class="fa fa-unlock-alt"></i></span>
                    <span class="top-user-register-text">contul meu</span>
                    <span class="caret"></span>
                </button>
                <div class="menu-profile">
                    <form action="" class="formLogin hidden">
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="title">Autentificare</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="divider borderGrey"></div>
                            </div>
                        </div>
                        <div class="row userEmail">
                            <div class="col-xs-12">
                                <label>Email</label>
                            </div>
                            <div class="col-xs-12 column">
                                <input type="text" value="" id="userEmailInput" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="row userPassword">
                            <div class="col-xs-12">
                                <label>Parola</label>
                            </div>
                            <div class="col-xs-12">
                                <input type="text" value="" id="userPasswordInput" class="form-control">
                            </div>
                        </div>
                        <div class="row userRememberAccount">
                            <div class="col-xs-12">
                                <input type="checkbox" id="userRememberAccountCheckbox">
                                <label for="userRememberAccountCheckbox">Retine autentificarea</label>
                            </div>
                        </div>
                        <div class="row userSubmit">
                            <div class="col-xs-6">
                                <input type="submit" value="Autentificare" class="btn btn-primary"
                                       id="userSubmit userLogin">
                            </div>
                            <div class="col-xs-6">
                                <a class="btn userRegisterLink" href="#">Inregistrare</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="divider borderGrey"></div>
                            </div>
                        </div>
                        <div class="row forgetPassword">
                            <div class="col-xs-12">
                                <a href="#" class="forgetPasswordText"><i class="fa fa-bed"></i> Am uitat parola!</a>
                            </div>
                        </div>

                    </form>
                    <form action="" class="formRegister hidden">
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="title">Creare cont</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="divider borderGrey"></div>
                            </div>
                        </div>
                        <div class="row userEmail">
                            <div class="col-xs-12">
                                <label>Email</label>
                            </div>
                            <div class="col-xs-12">
                                <input type="text" value="" id="userEmailInput" class="form-control">
                            </div>
                        </div>
                        <div class="row userName">
                            <div class="col-xs-12">
                                <label>Nume utilizator</label>
                            </div>
                            <div class="col-xs-12">
                                <input type="text" value="" id="userNameInput" class="form-control">
                            </div>
                        </div>
                        <div class="row userPhone">
                            <div class="col-xs-12">
                                <label>Numar telefon</label>
                            </div>
                            <div class="col-xs-12">
                                <input type="text" value="" id="userPhoneInput" class="form-control">
                            </div>
                        </div>

                        <div class="row capcha">
                            <div class="col-xs-12">
                                <!-- reChapcha -->
                                <label>capcha</label>
                            </div>
                        </div>
                        <div class="row userAgreement">
                            <div class="col-xs-12">
                                <p>
                                    Apasand pe butonul de "Creare cont", sunteti de acord cu <a class="topLink"
                                                                                                href="#">Termenii de
                                        utilizare</a> ai site-ului Cautsa.ro.
                                </p>
                            </div>
                        </div>
                        <div class="row userSubmit">
                            <div class="col-xs-6">
                                <input type="submit" value="Creare cont" class="btn btn-primary"
                                       id="userSubmit userRegister">
                            </div>
                            <div class="col-xs-6">
                                <a class="btn userLoginLink" href="#">Autentificare</a>
                            </div>
                        </div>
                    </form>
                    <div class="row userProfileDropdown">
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="title"><span class="hiMessage">Bun venit,</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="divider borderGrey"></div>
                        </div>
                        <div class="row userProfileMyProfile">
                            <a href="profile.php">
                                <img alt="" class="userProfileImageSmall" src="includes/img/default-image.jpg">
                                <span class="myName">iluca silviu gabriel</span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="divider borderGrey"></div>
                        </div>
                        <div class="row nopad userProfileDropdownHelp">
                            <div class="col-xs-12">
                                <a href="#">Ai nevoie de ajutor?</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="divider borderGrey"></div>
                        </div>
                        <div class="row nopad userProfileDropdownMesajeAlerte">
                            <div class="col-xs-10">
                                <a href="#">Mesaje sau Alerte </a>
                            </div>
                            <div class="col-xs-2">
                                <span href="" class="userProfileAlertNumber pull-right">0</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="divider borderGrey"></div>
                        </div>
                        <div class="row nopad userProfileFavourites">
                            <div class="col-xs-10">
                                <a href="#">Favorite</a>
                            </div>
                            <div class="col-xs-2">
                                <span href="" class="userProfileAlertNumber pull-right">5</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="divider borderGrey"></div>
                        </div>
                        <div class="row nopad userProfileDropdownLogOut">
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
                    </span>
                    <span class="top-bar-new-add-wrap-text"><!--adauga anunt-->test buton</span>
                </a>
            </div>
        </div>
        <div class="user-wrap hidden"></div>
    </div>
</div>