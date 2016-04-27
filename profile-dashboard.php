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
                    <div class="row prf-user-dashboard-wrap" id="prf-user-dashboard-wrap">
                        <div class="col-xs-12 col-sm-4 prf-user-dashboard-credits">
                            <div class="row prf-user-dashboard-section">
                                <div class="row prf-user-dashboard-title">
                                    <span>Credite disponibile</span>
                                    <span class="prf-user-dashboard-credits-text">3.72</span>
                                </div>
                                <a href="javascript:;" class="btn btn-success prf-user-dashboard-credtits-link">adaoga credite</a>
                                <form class="row prf-user-dashboard-form prf-user-dashboard-credits-form">
                                    <div class="form-group">
                                        <label>Cumpara credite</label>
                                        <input type="text" class="form-control prf-user-dashboard-credits-add-input" />
                                    </div>
                                    <div class="form-group">
                                        <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="cumpara credite" class="btn btn-success prf-user-dashboard-submit">
                                        <a class="btn btn-default prf-user-dashboard-credits-cancel" href="javascript:;">anuleaza</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="nr prf-user-dashboard-section">
                                <form class="form-horizontal prf-user-dashboard-user-data prf-user-dashboard-form editable-section">
                                    <div class="row prf-user-dashboard-title">
                                        <span>Date de contact</span>
                                    </div>
                                    <a class="prf-user-dashboard-edit" href="javascript:;">
                                        <i aria-hidden="true" class="fa fa-pencil"></i>
                                    </a>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Persoan Contact</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control prf-user-dashboard-form-input" disabled="" value="Iluca Silviu Gabriel" placeholder="Nume persoana contact">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Localitatea</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control prf-user-dashboard-form-input" disabled="" value="Iasi" placeholder="Localitatea">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Numar Telefon</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control prf-user-dashboard-form-input" disabled="" value="0728630399" placeholder="Numar telefon">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Skype</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control prf-user-dashboard-form-input" disabled="" value="iluca.silviu" placeholder="Skype ID">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Yahoo Messenger</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="text" class="form-control prf-user-dashboard-form-input" disabled="" value="iluca.silviu" placeholder="Messenger ID">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 prf-user-dashboard-btns">
                                            <input type="submit" value="salveaza" class="btn btn-success prf-user-dashboard-submit">
                                            <a class="btn btn-default prf-user-dashboard-cancel" href="javascript:;">anuleaza</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-8">
                            <div class="row prf-user-dashboard-section">
                                <form class="form-horizontal prf-user-dashboard-password-change prf-user-dashboard-form editable-section">
                                    <div class="row prf-user-dashboard-title">
                                        <span>Schimba parola</span>
                                    </div>
                                    <a class="prf-user-dashboard-edit" href="javascript:;">
                                        <i aria-hidden="true" class="fa fa-pencil"></i>
                                    </a> 
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Parola veche</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="password" class="form-control prf-user-dashboard-form-input" disabled="" value="000000" placeholder="Parola veche">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-4">
                                            <label>Parola noua</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <input type="password" class="form-control prf-user-dashboard-form-input" disabled="" value="000000" placeholder="Parola noua">
                                        </div>
                                        <div class="form-group">
                                            <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 prf-user-dashboard-btns">
                                            <input type="submit" value="salveaza" class="btn btn-success prf-user-dashboard-submit">
                                            <a class="btn btn-default prf-user-dashboard-cancel" href="javascript:;">anuleaza</a>
                                        </div>
                                    </div>
                                </form>
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