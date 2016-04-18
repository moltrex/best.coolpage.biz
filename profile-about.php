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

                    <div class="row prf-user-about" id="prf-user-about">

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed orci quis nisl porttitor gravida. Duis nec posuere est. Curabitur faucibus erat nunc, ac suscipit ante semper sit amet. Mauris feugiat, libero ac gravida viverra, lacus lorem blandit ipsum, nec porttitor ligula turpis vitae nibh. Nulla quis turpis a massa aliquet finibus non vel orci. Maecenas nulla metus, sagittis interdum mi sed, sodales tempus mi. Duis nibh mi, porttitor ut scelerisque ac, sagittis in enim. Nulla fermentum eros in porttitor dapibus. Sed convallis et magna sed tincidunt.</p>
                        <p>Phasellus tempus tempor velit eu fringilla. Etiam fringilla blandit tellus, ut molestie risus rhoncus sit amet. Sed convallis enim eros, non vulputate orci rhoncus at. Nam sit amet nulla tristique, ullamcorper odio quis, ullamcorper libero. Quisque nec dui a felis molestie lacinia et in nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <p>Mauris interdum mauris quis nunc fringilla pulvinar. Pellentesque accumsan ante a erat fringilla, non sagittis felis accumsan. Praesent tempus dapibus mauris ac commodo. In at nunc vulputate, rhoncus nulla ac, posuere risus. Ut id mi non enim placerat rhoncus. </p>
                    </div>
                    
                    <div class="row prf-user-about">
                        <div class="row pref-user-usefull-links"> 
                            <label>Linkuri utile</label>
                            <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                            <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                            <div class="row"><a href="http://bestcompany.com" target="_blank">www.bestcompany.com</a></div>
                        </div>
                    </div>
                    
                    <div class="row prf-user-about">
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


            <div class="push"></div>
        </div>
        <?php  include 'includes/views/view-footer.php'; ?>

        <?php  include 'includes/views/view-modal.php'; ?>
        <?php  include 'includes/views/view-js.php'; ?>
    </body>
</html>