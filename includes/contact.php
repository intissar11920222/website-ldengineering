<section id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="row">		
            <div class="section-title text-center wow zoomIn">
                <h2>ENTRER EN <span>CONTACT</span></h2>
                <div></div>
            </div>					
            <div class="col-md-8 col-sm-8 center-block col-xs-12 wow fadeInRight">
                <div class="contact">
                    <form id="contact-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Nom" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Sujet" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="message" class="form-control" id="description" placeholder="Votre Message" required="required"></textarea>
                            </div>
                            <!-- captcha -->
                            <div class="form-group col-md-12">
                                <div class="g-recaptcha" data-sitekey="6LePaWAUAAAAACA9BVJue_QNb0g4xopm0LmwFlwT" data-expired-callback="recaptchaExpired" ></div>
                            </div> 


                            <div class="col-md-12">
                                <div class="actions">
                                    <input type="submit" value="Envoyer " name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Envoyer votre message!" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- END COL -->
        </div><!--- END ROW -->				
    </div><!--- END CONTAINER -->	
</section>

<!-- START MAP -->
<!-- map js 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>
<script>
        function initialize() {
          var mapOptions = {
                zoom: 10,
                
                scrollwheel: false,
                center: new google.maps.LatLng(48.866667, 2.333333),
                
          };
          var map = new google.maps.Map(document.getElementById('map'),
                  mapOptions);
          var marker = new google.maps.Marker({
                position: map.getCenter(),
                icon: 'assets/img/map_pin.png',
                map: map,
                
          });

        }
        google.maps.event.addDomListener(window, 'load', initialize);				
</script>
<div id="map"></div>
<!-- END MAP -->