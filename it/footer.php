<footer id="footer" class="clearfix">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">

                <h2 class="text-center">Contattaci:</h2>
                <h4 class="text-center ">Mandaci un messaggio!</h4>

                <form role="form" method="post" id="reused_form">
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control" id="name" name="name" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required
                            maxlength="50">
                    </div>
                    <div class="form-group">

                        <textarea class="form-control" type="textarea" name="message" id="message"
                            placeholder="Your message  here!" maxlength="6000" rows="7"></textarea>
                    </div>
                    <div class="row" style="margin-bottom:30px;">
                        <div class="col-sm-5">
                            <img src="captcha.php" id="captcha_image" />
                            <br />
                            <a id="captcha_reload" href="#">reload</a>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Enter the code!" class="form-control" required id="captcha"
                                name="captcha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-default" id="btnContactUs">SEND</button>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h3>Sent your message successfully!</h3>
                </div>
                <div class="text-danger" id="error_message" style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3> Sorry there was an error sending your form.
                </div class="text-danger">

            </div>

        </div>
        <br>
        <div class="sharethis-inline-follow-buttons"></div>
        <br>
        <br>


        <div class="row footer-top clearfix">

            <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> CONTATTO</h4>

                <ul>
                    <li>
                        <h5>R.T.O. - Boris Ivančić </h5>
                    </li>
                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> <a href="tel:+385 (0)91 512 36 46">
                            +385 (0)91 512 36 46</a></li>
                    <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <script TYPE="text/javascript">
                        emailE = ('bivancic@' + 'yahoo.com')
                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')
                        </script>

                        <noscript>
                            <em>Email address protected by JavaScript.<BR>
                                Please enable JavaScript to contact me.</em>
                        </noscript>
                    </li>
                    <li>Zoranićeva 17, Pula</li>
                    <li> OIB: 46116579192 </li>
                    <li>MB Obrta: 90645405 </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3  footer-content ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> LINK UTILI</h4>
                <ul>
                    <li><a href="https://www.premantura.net/" target="_blank">premantura.net</a></li>
                    <li><a href="https://www.herole.de/" target="_blank">www.herole.de</a></li>
                    <li><a href="http://www.vows.at/" target="_blank">www.vows.at</a></li>
                    <li><a href="https://www.continentseven.com/" target="_blank">Continent seven</a></li>
                    <li><a href="https://www.pwaworldtour.com/index.php?id=920" target="_blank">PWA Worldtour</a></li>
                    <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>
                    <li><a href="http://www.hjs.hr/" target="_blank">HJS</a></li>
                    <li><a href="https://www.getmyboat.com/" target="_blank">GetMyBoat</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-content visible-xs hidden-sm visible-md visible-lg   ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> METEO</h4>
                <ul>
                    <li><a href="http://meteo.hr/index.php" target="_blank">meteo.hr</a></li>
                    <li><a href="http://www.arso.gov.si/vreme/napovedi%20in%20podatki/index.html"
                            target="_blank">www.arsov.gov.si</a></li>
                    <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>
                </ul>
                <h4 class="our-sites"> <span><i class="fa fa-caret-right"></i></span> OUR SITES</h4>
                <ul>
                    <li><a href="https://www.rentabikepremantura.com/" target="_blank"> rentabikepremantura.com</a>
                    </li>
                    <li><a href="https://www.kayakingpremantura.com/" target="_blank">kayakingpremantura.com</a>
                    </li>
                </ul>
                <!--  footer weather modal-->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-content visible-xs hidden-sm  visible-md visible-lg ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> ALLOGGIO</h4>
                <ul>
                    <li><a href="https://www.arenaturist.com/" target="_blank">arenaturist.com</a></li>
                    <li><a href="http://www.tzom.hr/" target="_blank">tzcom.hr</a></li>
                    <li><a href="http://medulin.hr/" target="_blank">medulin.hr</a></li>

                </ul>

            </div>
        </div> <!-- end of roow -->


        <div class="row footer-top2 visible-sm hidden-md hidden-lg">
            <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> METEO</h4>
                <ul>
                    <li><a href="http://meteo.hr/index.php" target="_blank">meteo.hr</a></li>
                    <li><a href="http://www.arso.gov.si/vreme/napovedi%20in%20podatki/index.html"
                            target="_blank">www.arsov.gov.si</a></li>
                    <li><a href="https://www.windguru.cz/21" target="_blank">windguru.cz</a></li>





                </ul>
                <!--  footer weather modal-->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-content ">
                <h4 class=""> <span><i class="fa fa-caret-right"></i></span> ALLOGGIO</h4>
                <ul>
                    <li><a href="https://www.arenaturist.com/" target="_blank">arenaturist.com</a></li>
                    <li><a href="http://www.tzom.hr/" target="_blank">tzcom.hr</a></li>
                    <li><a href="http://medulin.hr/" target="_blank">medulin.hr</a></li>

                </ul>

            </div>
        </div> <!-- footer-top2 -->

        <div class="container-fluid" id="footer-bottom">
            <div class="footer-bottom-left"><a href="index.php" target="_self">
                    <img src="../img/ws-logo-big-white-font.png" class="img-responsive" alt="ws-logo"></a>
            </div>
            <div class="footer-bottom-center">
                <p class="text-center">WINDSUFING PREMANTURA - MEDULIN &copy; <span class="hidden-sm">
                        <?php echo date("Y"); ?> </span> </p> </span> </p>
            </div>
            <div class="footer-bottom-right">
                <a href="https://www.cro-webdesign.com/" target="_blank">
                    <p class="text-center hidden-xs izradio">POWERED BY:<br>
                        <span class="cw-logo"></span>
                    </p>
                </a>
            </div>
        </div>
    </div> <!-- end of container -->

</footer>