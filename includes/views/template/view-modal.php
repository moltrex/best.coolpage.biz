
<div class="row modal-div">
   
    <!-- avatar edit modal -->
    <div class="modal fade gp-modal-edit-avatar" tabindex="-1" role="dialog" aria-labelledby="gpModalAvatarEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editeaza avatar</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-edit-avatar-wrap">
                            <div class="col-xs-12 col-sm-6 gp-add-new-avatar">
                                <div class="row action">
                                    <input type="file" id="file">
                                    <div class="row gp-add-new-avatar-row">
                                        <input type="button" class="btn btn-success" id="btnCrop" value="Crop" style="float: right">
                                        <input type="button" class="btn btn-primary" id="btnZoomIn" value="+" style="float: left">
                                        <input type="button"  class="btn btn-primary" id="btnZoomOut" value="-" style="float: left">
                                    </div>
                                </div>
                                <div class="imageBox">
                                    <div class="thumbBox"></div>
                                    <div class="spinner" style="display: none">Loading...</div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 gp-preview-new-avatar">
                                <span class="gp-preview-new-avatar-text">Incarcati imaginea dorita si apasati butonul crop pentru a obtine un preview al avatarului dumneavoastra.</span>
                                <div class="cropped">
                                    
                                </div>
                            </div>
                            <script type="text/javascript">
                                window.onload = function() {
                                    var options =
                                        {
                                            imageBox: '.imageBox',
                                            thumbBox: '.thumbBox',
                                            spinner: '.spinner',
                                            imgSrc: 'avatar.png'
                                        }
                                    var cropper;
                                    document.querySelector('#file').addEventListener('change', function(){
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            options.imgSrc = e.target.result;
                                            cropper = new cropbox(options);
                                        }
                                        reader.readAsDataURL(this.files[0]);
                                        this.files = [];
                                    })
                                    document.querySelector('#btnCrop').addEventListener('click', function(){
                                        var img = cropper.getDataURL()
                                        document.querySelector('.cropped').innerHTML += '<img src="'+img+'">';
                                    })
                                    document.querySelector('#btnZoomIn').addEventListener('click', function(){
                                        cropper.zoomIn();
                                    })
                                    document.querySelector('#btnZoomOut').addEventListener('click', function(){
                                        cropper.zoomOut();
                                    })
                                };
                            </script>
                        </div>
                        <div class="row gp-modal-submit">
                            <input type="submit" class="btn btn-primary gp-modal-avatar-submit-btn" value="trimite" />
                            <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">inchide</span></a>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- activate the add modal -->
    <div class="modal fade gp-modal-activate-add" tabindex="-1" role="dialog" aria-labelledby="gpModalAddActivate">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Activeaza anunt</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-modal-row">
                            <label>Anuntul tau va fi activ intre:</label> 
                            <p>30/08/2015 - 30/09/2015</p>
                        </div>
                        <div class="row gp-modal-row gp-modal-submit">
                            <input type="submit" class="btn btn-primary" value="trimite" />
                        </div>
                    </form>
                    <div class="row gp-modal-message success hidden">
                        <h1>Succes</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- flag an add modal -->
    <div class="modal fade gp-modal-flag" tabindex="-1" role="dialog" aria-labelledby="gpModalFlag">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Raporteaza anunt</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-modal-to-email">
                            <label>Email:</label> 
                            <input class="form-control gp-modal-send-msg-email" placeholder="Email" />
                        </div>
                        <div class="row gp-modal-author-name">
                            <label>Autor anunt:</label> <p class="gp-modal-author-name-text">octavian_aurel</p>
                        </div>
                        <div class="row gp-modal-add-title">
                            <label>Titlul anuntului:</label> 
                            <p class="gp-modal-add-title-text">Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                        </div>
                        <div class="row gp-modal-reason">
                            <label>Doresc sa raportez anuntul deoarece: </label>
                            <textarea class="form-control gp-modal-reason-text" cols="3" rows="3" placeholder="text motiv"></textarea>
                        </div>
                        <div class="row gp-modal-captcha">
                            <label>loc pt captcha</label> 
                        </div>
                        <div class="row gp-modal-submit">
                            <input type="submit" class="btn btn-primary gp-modal-flag-submit-btn" value="trimite" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- modal forget pass -->
    <div class="modal fade gp-modal-forget-pass" tabindex="-1" role="dialog" aria-labelledby="gpModalForgetPass">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Am uitat parola!</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-modal-to-email">
                            <label>Email:</label> 
                            <input class="form-control gp-modal-send-msg-email" placeholder="Email" />
                        </div>
                        <div class="row gp-modal-captcha">
                            <label>loc pt captcha</label> 
                        </div>
                        <div class="row gp-modal-submit">
                            <input type="submit" class="btn btn-primary gp-modal-flag-submit-btn" value="trimite" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- delete / erase add -->
    <div class="modal fade gp-erase-adds" tabindex="-1" role="dialog" aria-labelledby="gpModalErase">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Sterge anunt</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-modal-erase-title">
                            <label>Esti sigur ca vrei sa stergi anuntul(anunturile):</label> 
                            <p class="gp-modal-add-title-text">- Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                            <p class="gp-modal-add-title-text">- Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                            <p class="gp-modal-add-title-text">- Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                            <p class="gp-modal-add-title-text">- Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                            <p class="gp-modal-add-title-text">- Bluza fara maneci Dama G-Star Raw Verde 4971-TSD175</p>
                        </div>

                        <div class="row gp-modal-submit">
                            <input type="submit" class="btn btn-primary gp-modal-flag-submit-btn" value="trimite" />
                            <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">inchide</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- send message to add owner modal -->
    <div class="modal fade gp-modal-send-message" tabindex="-1" role="dialog" aria-labelledby="gpModalSendMessage">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Trimite un mesaj</h4>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row gp-modal-to-email">
                            <label>Email-ul tau:</label> 
                            <input class="form-control gp-modal-send-msg-email" placeholder="Email" />
                        </div>
                        <div class="row gp-modal-to-name">
                            <label>Catre utilizator:</label> 
                            <span class="gp-modal-add-title-text">iluca.silviu</span>
                        </div>
                        <div class="row gp-modal-to-name">
                            <label>In legatura cu anuntul:</label> 
                            <span class="gp-modal-add-title-text">CALCULATOR DESKTOP HP DC5750 AMD ATH X2 4400+/4GB/80GB/DVD-RW+CARD READER CADOU</span>
                        </div>
                        <div class="row gp-modal-send-msg">
                            <label>Text mesaj: </label>
                            <textarea class="form-control gp-modal-send-msg-text" cols="3" rows="3" placeholder="Scrie mesajul tau aici"></textarea>
                        </div>
                        <div class="row gp-modal-captcha">
                            <label>loc pt captcha</label> 
                        </div>
                        <div class="row gp-modal-submit">
                            <input type="submit" class="btn btn-primary gp-modal-flag-submit-btn" value="trimite" />
                            <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">nu</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal tags tutorial -->
    <div class="modal fade gp-modal-tags" tabindex="-1" role="dialog" aria-labelledby="gpModalErase">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Afla mai multe despre cuvintele cheie.</h4>
                </div>
                <div class="modal-body">
                    a    
                </div>
            </div>
        </div>
    </div>
</div>