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

                    <div class="row prf-user-about">
                        <div class="col-sm-6 col-xs-12 prf-user-about-text">
                            <a href="javascript:;" class="prf-user-usefull-edit">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <div class="row prf-user-active">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed orci quis nisl porttitor gravida. Duis nec posuere est. Curabitur faucibus erat nunc, ac suscipit ante semper sit amet. Mauris feugiat, libero ac gravida viverra, lacus lorem blandit ipsum, nec porttitor ligula turpis vitae nibh. Nulla quis turpis a massa aliquet finibus non vel orci. Maecenas nulla metus, sagittis interdum mi sed, sodales tempus mi. Duis nibh mi, porttitor ut scelerisque ac, sagittis in enim. Nulla fermentum eros in porttitor dapibus. Sed convallis et magna sed tincidunt.</p>
                                <p>Phasellus tempus tempor velit eu fringilla. Etiam fringilla blandit tellus, ut molestie risus rhoncus sit amet. Sed convallis enim eros, non vulputate orci rhoncus at.</p>
                            </div>
                            <form class="prf-user-edit-form prf-user-about-edit-text-wrap">
                                <div class="form-group">
                                    <textarea class="form-control prf-user-about-edit-text" placeholder="Scrie o descriere maxim 300 caractere."></textarea>
                                </div>

                                <p class="alert-danger">Textul nu poate fi mai mare de 300 caractere!</p>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success prf-user-about-text-send" value="salveaza descriere">
                                    <a href="javascript:;" class="btn btn-default prf-user-about-text-cancel">anuleaza</a>
                                </div>

                            </form>
                            <span class="row prf-user-notext hidden">Utilizatorul nu a completat aceasta sectiune.</span>
                        </div>

                        <div class="col-sm-6 col-xs-12 prf-user-usefull-links"> 
                            <a href="javascript:;" class="prf-user-usefull-edit">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <div class="row prf-user-about-title">
                                <span>Linkuri utile</span>
                            </div>
                            <div class="row prf-user-active">
                                <div class="row prf-user-usefull-links-row">
                                    <a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a> <span class="prf-user-usefull-links-label"> - artist portfolio website</span>
                                </div>
                                <div class="row prf-user-usefull-links-row">
                                    <a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a> <span class="prf-user-usefull-links-label"> - artist portfolio website</span>
                                </div>
                                <div class="row prf-user-usefull-links-row">
                                    <a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a> <span class="prf-user-usefull-links-label"> - artist portfolio website</span>
                                </div>
                            </div>
                            <form class="form-horizontal prf-user-edit-form prf-user-usefull-form">
                                <div class="form-group prf-user-usefull-form-group">
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control prf-user-usefull-link-input" placeholder="link-ul d-voastra fara http://">
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control prf-user-usefull-label-input" placeholder="ce reprezinta link-ul">
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <a href="javascript:;" class="prf-user-usefull-add-group">
                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:;" class="prf-user-usefull-remove-group">
                                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>    
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="submit" value="salveaza linkuri" class="btn btn-success prf-user-about-useful-send">
                                        <a class="btn btn-default prf-user-about-usefull-cancel" href="javascript:;">anuleaza</a>
                                    </div>
                                </div>
                            </form>
                            <span class="row prf-user-notext hidden">Utilizatorul nu a completat aceasta sectiune.</span>
                        </div>

                        <div class="col-sm-12 col-xs-12 prf-user-social">
                            <a href="javascript:;" class="prf-user-usefull-edit">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <div class="row prf-user-about-title">
                                <span>Linkuri retele socializare</span>
                            </div>
                            <div class="row prf-user-active">
                                <div class="col-sm-3 col-xs-3 prf-user-social-link">
                                    <a href="www.facebook.com" target="_blanck">
                                        <i class="fa fa-facebook-official"></i>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xs-3 prf-user-social-link">
                                    <a href="www.twitter" target="_blanck">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="col-sm-3 col-xs-3 prf-user-social-link">
                                    <a href="www.linkedin.com" target="_blanck">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <form class="form-horizontal prf-user-edit-form">
                                <div class="form-group prf-user-usefull-social-group">
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control prf-user-facebook-link-input" placeholder="facebook link">
                                    </div>
                                    <div class="col-xs-3">
                                        <span class="prf-user-social-link">
                                            <i class="fa fa-facebook-official"></i>
                                        </span>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>    
                                    </div>

                                </div>
                                <div class="form-group prf-user-usefull-social-group">
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control prf-user-twitter-link-input" placeholder="twitter link">
                                    </div>
                                    <div class="col-xs-3">
                                        <span class="prf-user-social-link">
                                            <i class="fa fa-twitter"></i>
                                        </span>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>    
                                    </div>

                                </div>
                                <div class="form-group prf-user-usefull-social-group">
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control prf-user-linkedin-link-input" placeholder="twitter link">
                                    </div>
                                    <div class="col-xs-3">
                                        <span class="prf-user-social-link">
                                            <i class="fa fa-linkedin"></i>
                                        </span>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="alert-danger hidden">Textul nu poate fi mai mare de 300 caractere!</p>    
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="submit" value="salveaza linkuri" class="btn btn-success prf-user-about-useful-send">
                                        <a class="btn btn-default prf-user-about-social-cancel" href="javascript:;">anuleaza</a>
                                    </div>
                                </div>   
                            </form>
                            <span class="row prf-user-notext hidden">Utilizatorul nu a completat aceasta sectiune.</span>
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