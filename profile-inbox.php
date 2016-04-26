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

                    <div class="row prf-user-inbox" id="prf-user-inbox">
                        <div class="row pref-user-adds-filters">
                            <input type="submit" class="pref-user-delete-add" value="Sterge" />
                        </div>
                        <div class="row prf-msg-row">
                            <div class="col-xs-12 prf-msg-text-title prf-msg-read">
                                <span>Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</span>
                            </div>
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
                                <a href="javascript:;" class="btn btn-success prf-msg-reply toggle">raspunde mesaj</a>
                                <div class="row prf-msg-reply-wrap">
                                    <form>
                                        <div class="form-group">
                                            <label for="prf-msg-reply-label">Mesajul tau</label>
                                            <textarea rows="4" cols="50" class="form-control prf-reply-text" value=""></textarea>
                                        </div> 
                                        <div class="form-group">
                                            <input type="file" class="prf-msg-file-upload">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success prf-msg-reply-send" value="trimite mesajul">
                                            <a href="javascript:;" class="btn btn-default prf-msg-reply-cancel">anuleaza</a>

                                        </div>
                                    </form>
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