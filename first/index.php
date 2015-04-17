<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
            $(function(){
                $('#menu-seo5').slicknav({
                    prependTo:'#navigation-menu-seo5'
                });
            });
            $(function(){
                $('#menu-seo6').slicknav({
                    prependTo:'#navigation-menu-seo6'
                });
            });
            $(function(){
                $('#menu-seo7').slicknav({
                    prependTo:'#navigation-menu-seo7'
                });
            });
            $(function(){
                $('#menu-seo8').slicknav({
                    prependTo:'#navigation-menu-seo8'
                });
            });
            $(function(){
                $('#menu-seo9').slicknav({
                    prependTo:'#navigation-menu-seo9'
                });
            });
            $(function(){
                $('#menu-seo10').slicknav({
                    prependTo:'#navigation-menu-seo10'
                });
            });
            $(function(){
                $('#menu-seo11').slicknav({
                    prependTo:'#navigation-menu-seo11'
                });
            });
            $(function(){
                $('#menu-seo12').slicknav({
                    prependTo:'#navigation-menu-seo12'
                });
            });
            $(function(){
                $('#menu-seo13').slicknav({
                    prependTo:'#navigation-menu-seo13'
                });
            });
            $(function(){
                $('#menu-seo14').slicknav({
                    prependTo:'#navigation-menu-seo14'
                });
            });
            $(function(){
                $('#menu-seo15').slicknav({
                    prependTo:'#navigation-menu-seo15'
                });
            });
            $(function(){
                $('#menu-seo16').slicknav({
                    prependTo:'#navigation-menu-seo16'
                });
            });
            $(function(){
                $('#menu-seo17').slicknav({
                    prependTo:'#navigation-menu-seo17'
                });
            });
            $(function(){
                $('#menu-seo18').slicknav({
                    prependTo:'#navigation-menu-seo18'
                });
            });
            $(function(){
                $('#menu-seo19').slicknav({
                    prependTo:'#navigation-menu-seo19'
                });
            });
            $(function(){
                $('#menu-seo20').slicknav({
                    prependTo:'#navigation-menu-seo20'
                });
            });
            $(function(){
                $('#menu-seo21').slicknav({
                    prependTo:'#navigation-menu-seo21'
                });
            });
            $(function(){
                $('#menu-seo22').slicknav({
                    prependTo:'#navigation-menu-seo22'
                });
            });
            $(function(){
                $('#menu-seo23').slicknav({
                    prependTo:'#navigation-menu-seo23'
                });
            });
            $(function(){
                $('#menu-seo24').slicknav({
                    prependTo:'#navigation-menu-seo24'
                });
            });
            $(function(){
                $('#menu-seo25').slicknav({
                    prependTo:'#navigation-menu-seo25'
                });
            });
            $(function(){
                $('#menu-seo26').slicknav({
                    prependTo:'#navigation-menu-seo26'
                });
            });
            $(function(){
                $('#menu-seo27').slicknav({
                    prependTo:'#navigation-menu-seo27'
                });
            });
            $(function(){
                $('#menu-seo28').slicknav({
                    prependTo:'#navigation-menu-seo28'
                });
            });
            $(function(){
                $('#menu-seo29').slicknav({
                    prependTo:'#navigation-menu-seo29'
                });
            });
            $(function(){
                $('#menu-seo30').slicknav({
                    prependTo:'#navigation-menu-seo30'
                });
            });
            $(function(){
                $('#menu-seo31').slicknav({
                    prependTo:'#navigation-menu-seo31'
                });
            });
            $(function(){
                $('#menu-seo32').slicknav({
                    prependTo:'#navigation-menu-seo32'
                });
            });


			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>

		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">

            <h1>Powered by <a href="http://mobilegrows.com/" rel="external" >MobileGrows </a>|<a href="http://www.fivepointsdentistry.com/" rel="external"> Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  	<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slide1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slide4.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slide5.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slide6.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>


				<div data-role="collapsible-set">
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>Our Team</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#drthomas" data-transition="<?php echo $transitionefect ?>">Meat Dr. Thomas</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#drPavicic" data-transition="<?php echo $transitionefect ?>">Meat Dr. Pavicic</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#drGot" data-transition="<?php echo $transitionefect ?>">Meat Dr. Got</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#meatourteam" data-transition="<?php echo $transitionefect ?>">Meat Our Team</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.fivepointsdentistry.com/blog/"  rel="external">Our Blog</a>
                    </div>
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>New Patients</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#oficeVisit" data-transition="<?php echo $transitionefect ?>">Office Visits</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#financial" data-transition="<?php echo $transitionefect ?>">Financial Information</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#oficetour" data-transition="<?php echo $transitionefect ?>">Office Tour</a>
					</div>


                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>General Dentistry</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures </a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disiase</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disiase and Overall Health</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventiv Care</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a>

                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>Services</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a>
                    </div>
				</div>



            </div>

            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-calendar ui-btn-icon-left buttons-radius" href="https://www.vcita.com/v/403bc8b68e1bf7ae/online_scheduling?dm=true&mobile=true&o=ZHVkYV9jYWxlbmRhcl93aWRnZXQ%3D&preview=false&service_id=sqrqnq0nrf5vc2pz&widget=false" data-transition="<?php echo $transitionefect ?>">Set an Appointment</a></div>
            </div>

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   

		  
		 
		</div>
   

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <!--OUR TEAMDr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

          <div data-role="page" id="drthomas" data-theme="<?php echo $theme ?>">
              <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                  <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                      <section id="navigation-menu-seo5">
                          <ul id="menu-seo5" class="naziv">
                              <li><a href="#drPavicic" data-transition="<?php echo $transitionefect ?>">Meat Dr. Pavicic</a></li>
                              <li><a href="#drGot" data-transition="<?php echo $transitionefect ?>">Meat Dr. Got</a></li>
                              <li><a href="#meatourteam" data-transition="<?php echo $transitionefect ?>">Meat Our Team</a></li>
                              <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                          </ul>
                      </section>
                      <h2 class="nenad">Dr. Thomas Thomas</h2>


                          <div><img src="img/meet-dr-thomas.jpg" width="100%" height="300"alt="Dr. Thomas Thomas" class="team-photo"></div>

                          <h2>Meet Dr. Thomas</h2>
                          <p>It’s sometimes hard to believe that I’ve been practicing dentistry for almost 20 years, but I truly enjoy what I do, and to this day,
                              I am happy that I chose to become a dentist. Dentistry allows me to combine my love of the sciences with my artistic abilities and
                              my desire to change other peoples’ lives. I am proud of my team and our shared commitment to help our patients improve their health
                              by providing the best dental care possible.</p>

                          <h2>Education</h2>

                          <ul>
                              <li>One-year Advanced Education in General Dentistry (AEGD) program - Case Western Reserve University School of Dentistry</li>
                              <li>Dental degree - Case Western Reserve University School of Dentistry</li>
                              <li>Undergraduate degree - Ohio State University</li>
                          </ul>

                          <h2>Continuing education</h2>

                          <p>Change is constant in our practice, and in order to stay current with all the changes, my team and I regularly participate in
                              continuing education. We’re always looking for ways to improve and add to the services we provide, and by participating in
                              continuing education courses, our practice is able to offer our patients a wide range of traditional and advanced treatment options.</p>

                          <h2>A practice dedicated to its patients</h2>

                          <p>I don’t think I will be alone in saying that I always appreciate good, old-fashioned customer service. No matter where I am,
                              I like knowing that I’m going to be taken care of, and when I leave I will be 100 percent satisfied with my experience.
                              When it comes to my practice, I want my patients to feel the same way after each appointment. I want them to leave our
                              practice thinking “WOW, that was a great experience!”</p>

                          <p>My staff and I enjoy finding ways to make our patients’ time with us more enjoyable. We have fun planning all kinds
                              of office activities and seeing the smiles on our patients’ faces. We listen to our patients’ ideas and recommendations
                              on how we can make our practice a better place, and we feel good knowing that our patients are comfortable enough with us to share with us what they need.</p>


                          <h2>Dr. Thomas stays smiling</h2>

                          <p>I am originally from Middleburg Heights, and have lived in Strongsville for over 20 years. My wife Lisa and I have two daughters,
                              Anelise and Allisun, and a Welsh corgi dog named Shelby. I feel fortunate to be raising my family in this wonderful community;
                              this is truly a great place to live and work. I actively participate in several community organizations, including the Strongsville
                              Chamber of Commerce, Honor Flight Cleveland, Relay for Life, and Business Networking Organization of Strongsville.</p>

                          <p>Outside of the practice, I enjoy collecting World War Two memorabilia, volunteering with local World War Two veteran programs,
                              going fishing, and camping with my kids. I have a been a member of the Honor Flight Cleveland program for more than three years,
                              and I have the privilege of flying World War Two veterans from Ohio to Washington, DC, to visit the memorial.</p>









                  </div>

              </div>


          </div>


          <!--OUR TEAM Dr. Thomas///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--OUR TEAMDr. Dr.Pavicic///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="drPavicic" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo6">
                        <ul id="menu-seo6" class="naziv">
                            <li><a href="#drthomas" data-transition="<?php echo $transitionefect ?>">Meat Dr. Thomas</a></li>
                            <li><a href="#drGot" data-transition="<?php echo $transitionefect ?>">Meat Dr. Got</a></li>
                            <li><a href="#meatourteam" data-transition="<?php echo $transitionefect ?>">Meat Our Team</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Dr. Mario Pavicic</h2>

                        <div <div><img alt="Dr. Mario Pavicic"  class="team-photo" src="img/meet-dr-pavicic.jpg"width="100%" height="300"></div>

                            <h2>Meet Dr. Pavicic</h2>

                            <p>I have been working in dentistry for almost 20 years, and every day feels
                                like a blessing to me. I love working in dentistry, being able to do so many
                                different things that help improve and maintain my patients’ health and
                                appearance. Over the years, my patients have become my friends. We share
                                stories, and life experiences, and I get to hear about all of the successes as
                                they go through their lives, as well as provide comfort when they are facing
                                tough times. The bonds I have formed during my time as a dentist are
                                irreplaceable. I cannot think of a more rewarding profession than being a
                                dentist.</p>

                            <h2>Education</h2>

                            <ul>
                                <li>Doctor of Dental Surgery (DDS) degree - Case Western Reserve University
                                    School of Dental Medicine</li>

                                <li>Bachelor of Science degree - Case Western Reserve University</li>
                            </ul>

                            <h2>Continuing education</h2>

                            <p>I believe in continuing education as a way to stay current with the latest
                                advances in dentistry, and also as a way to share my experiences and knowledge
                                with others. I regularly attend continuing education opportunities throughout
                                the year, including Invisalign and implant restoration seminars. I give
                                lectures on high-tech dentistry and CEREC, as well as being a professor at Case
                                Western Reserve University School of Dental Medicine.</p>

                            <h2>A practice dedicated to its patients</h2>

                            <div><img alt="Dr. Mario Pavicic" class="team-photo" src="img/meet-dr-pavicic2.jpg" width="100%" height="250"></div>

                            <p>I enjoy being a dentist and I particularly love how down-to-earth and
                                genuine my patients are. They care about their dental health, and they want to
                                receive the best care possible. As their dentist, I believe it is my duty to
                                provide each one of my patients with the experience and the care they expect.
                                Our practice is a fun place to be. We make it our priority to make our patients
                                feel comfortable and excited about being here. When our patients leave our
                                practice, we want to make sure that they leave with a big smile on their faces,
                                looking forward to their next appointment.</p>

                            <h2>Dr. Pavicic stays smiling</h2>

                            <p>I was born in Croatia, but I came to America when I was one year old. I grew
                                up in Brooklyn and have lived in Parma the last 16 years. I have three
                                wonderful children: Julianna, Matthew, and Nicholas. When I’m not at the
                                practice, I enjoy golfing, playing basketball, photography, coaching basketball
                                and golf teams, and traveling. I am also an avid Dallas Cowboys fan!</p>

                            <p>I believe in giving back to my community for all of the care and support
                                I’ve received over the years. I am involved in coaching sports teams at my
                                children’s school. I am also the founder of the Boris Pavicic Leukemia
                                Foundation, which helps raise money to aide community members battling with
                                cancer.</p>


                    </div>
                </div>
            </div>
        </div>


        <!--OUR TEAM Dr.Pavicic///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--OUR TEAM Dr. Jessica Gott ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="drGot" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo7">
                        <ul id="menu-seo7" class="naziv">
                            <li><a href="#drthomas" data-transition="<?php echo $transitionefect ?>">Meat Dr. Thomas</a></li>
                            <li><a href="#drPavicic" data-transition="<?php echo $transitionefect ?>">Meat Dr. Pavicic</a></li>
                            <li><a href="#meatourteam" data-transition="<?php echo $transitionefect ?>">Meat Our Team</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Dr. Jessica Gott</h2>



                            <div><img src="imG/meet-dr-gott.jpg" width="100%" height="300"></div>

                            <h2>Meet Dr. Gott</h2>
                            <p>I decided I wanted to become a dentist after shadowing multiple professions. From this, I found that dentistry was a profession that
                                offers a way to work closely with others, deliver a quality product, incorporate an artistic skill, and of course put a smile on one’s face.
                                I couldn’t be happier that I joined the field of dentistry. Everyday, I find another reason to love my career. </p>

                            <h2>Education</h2>

                            <ul>
                                <li>One-year Advanced Education In General Dentistry (AEGD) program—Arizona School of Dentistry and Oral Health</li>
                                <li>Dental Degree (DDS)- The Ohio State College of Dentistry</li>
                                <li>Undergraduate Degree (BS)- Baldwin-Wallace University</li>
                            </ul>

                            <h2>Continuing education</h2>

                            <p>I believe that continuing education and experience are the fundamentals to create a great dentist. This is why I have done over 150
                                credit hours of continuing education in the past year, six times the state requirement. I enjoy and take pride in being able to expand
                                quality services offered to patients.</p>

                            <h2>A practice dedicated to its patients</h2>

                            <p>As a new dentist, I can say that I have looked long and hard for the perfect place to start my career. I have actively searched for
                                somewhere with personality, priority for quality dental care, and above all a high value for continuing education.
                                I am proud to say that Five Points Dentistry has all of these traits and more. I am fortunate and excited to be a part of such a
                                stand up place.</p>

                            <h2>Dr. Gott stays smiling</h2>

                            <p>I am originally from Wellington, Ohio. Now, I’m excited to call Strongsville my home. I enjoy staying active outside of the office.
                                I have participated in half marathons and even the Tough Mudder, which supports the Wounded Warrior Project. Currently,
                                I am active as a CrossFit member, a national bone marrow donor for over nine years, a monthly contributor to the Hope for Paws charity,
                                and an Academy of General Dentistry member. I am always looking for ways to get involved in my community, so feel free to seek me out
                                as a volunteer!</p>
                    </div>
                </div>
            </div>
        </div>
        <!--OUR TEAM Dr. Jessica Gott ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--OUR TEAM Meet Our Team ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="meatourteam" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo8">
                        <ul id="menu-seo8" class="naziv">
                            <li><a href="#drthomas" data-transition="<?php echo $transitionefect ?>">Meat Dr. Thomas</a></li>
                            <li><a href="#drPavicic" data-transition="<?php echo $transitionefect ?>">Meat Dr. Pavicic</a></li>
                            <li><a href="#drGot" data-transition="<?php echo $transitionefect ?>">Meat Dr. Got</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                       <h2 class="nenad" style="font-size: 1.5em">Meet Our Team</p></h2>






                            <p>Our friendly, dedicated, and energetic team is committed to working with you and your family to create a positive experience every time
                                you visit our practice.</p>
                            <h3 class="nenad">We welcome you with warm smiles to our practice!</h3>



                            <div><img src="img/anita.jpg" alt="Anita" class="team-photo"></div>
                            <h2>Anita</h2>
                            <h3>Office Manager</h3>
                            <p>I love working in dentistry, and especially at a practice that is so in tune with what their patients expect. As Office Manager I am able
                                to interact with our patients on a daily basis to help make their dental experiences positive. My duties include helping our patients with
                                financial arrangements, billing, coordinating with insurance providers and answering any questions our patients may have. I also enjoy
                                working with Dr. Thomas &amp; Dr. Pavicic. Each doctor encourages our team to participate in continuing education, and they provide a
                                postive work environment which makes it easy and fun to come to work each day. </p>

                            <p>Outside of the practice, I enjoy gardening, going bowling, and line dancing. My husband, John, and I have two grown sons. I also love
                                to play Band Hero with my family and friends - rock on!</p>

                            <div class="hr"><hr></div>

                            <div><img src="img/jessica.jpg" alt="Jessica" class="team-photo"></div>
                            <h2>Jessica</h2>
                            <h3>Receptionist</h3>
                            <p>I started working in the dental field 9 years ago. I moved to Medina and started working at Five Points in November 2013. I'm one of the
                                first faces patients see when they come to the office. I make sure our patients can easily schedule visits and and answer any questions
                                they may have before a visit. I really like this office because everyone works together to make sure the patients have the best possible
                                experience.
                            </p>
                            <p>
                                Outside of the office I like to Pinterest new recipes to try or home improvement &amp; decorating ideas. In the summer my boyfriend and
                                I have a garden and like to visit Ohio wineries.</p>

                            <div class="hr"><hr></div>



                            <div><img src="img/angie.jpg" alt="Angie" class="team-photo"></div>
                            <h2>Angie</h2>
                            <h3>Registered Dental Hygienist</h3>
                            <p>I am so fortunate to be a part of such an amazing dental team! I have been working in the dental field for close to ten years, starting as
                                a dental assistant and a hygienist for the past two years. I also hold a license to administer local anesthetic. My mission at this practice
                                is to get to know my patients on a personal level, and make them as comfortable as possible while educating them as well. My main goal is
                                to see you smile! I'm always looking to continue my education while keeping up with the latest technologies. </p>
                            <p>Outside of work I enjoy spending time with my husband of two years and doing anything outdoors with our shiba inu puppies. I am very close
                                with my family and enjoy sports, working out especially kickboxing.</p>
                            <div class="hr"><hr></div>

                            <div><img src="img/jen.jpg" alt="Jen" class="team-photo"></div>
                            <h2>Jen</h2>
                            <h3>Dental Assistant</h3>
                            <p>I'm so excited to be part of such an amazing and caring dental practice. I have been working as a dental assistant for 11 years and love my job.
                                I strive to help patients enjoy their time in our office and do my best to help put them at ease.</p>

                            <p>Outside of the office I recently bought a house in Brunswick, with my husband of 1 year. I have a boxer named Harvey that I adore,
                                and love spending time with my family and friends. Being the youngest of 7 kids means we are always having fun.</p>
                            <div class="hr"><hr></div>


                            <div><img src="img/sara.jpg" alt="Sara" class="team-photo"></div>
                            <h2>Sara</h2>
                            <h3>Registered Dental Hygienist</h3>
                            <p>Before becoming a dental hygienist, I worked as a dental assistant, so I have tons of experience helping patients with all kinds of dental
                                needs. I enjoy working in dentistry, and making our patients feel comfortable while educating them about their dental health.
                                Every day I strive to treat our patients in a warm, compassionate manner; I want them to enjoy smiling, and to smile often! Working with Dr.
                                Thomas and Dr. Pavicic is wonderful. Both doctors stay up to date with technology and they treat our staff with respect.
                                It feels good to come to work knowing that the doctors have confidence in the care we provide and want to help us succeed as a team for
                                the betterment of our patients. When you come to our practice, you will leave with a smile!</p>

                            <p>Outside of the practice my husband Nathan and I enjoy spending our time with our daughters Claire and Mary.</p>
                            <div class="hr"><hr></div>


                            <div><img src="img/stacie.jpg" alt="Stacie" class="team-photo"></div>
                            <h2>Stacie</h2>
                            <h3>Registered Dental Hygienist </h3>
                            <p>I'm one of the dental hygienist in the office and I make it my business to get to know our patients. I enjoy assisting them in maintaining
                                good oral health. I have been in the hygiene field for 20 years and graduated from Ohio State University. I'm originally from Columbus
                                but moved to Strongsville in 2012, and love working at our office. We all get along so great and strive to be at the top of our game
                                for the patients. The doctors are truly awesome to work with and they really care about their patients. </p>

                            <p>Outside of work I'm married with 3 children. Most weekends are spent attending my kids sporting events. I love to traveling and
                                I am a die hard Buckeyes fan.</p>
                            <div class="hr"><hr></div>



                            <div><img src="img/sylvia.jpg" alt="Sylvia" class="team-photo"></div>
                            <h2>Sylvia</h2>
                            <h3>Certified Dental Assistant</h3>
                            <p>I love this office! We are always having fun, smiling and laughing, and the technology we use to treat our patients is top of the line. Our patients are great,
                                and I enjoy making them smile. From saying hello to my patients when they arrive for appointments, until they leave, it is my top priority to make sure that they feel comfortable.
                                I am focused on my patients from start to finish; explaining procedures, making them feel at home with a movie or warm neck pillow, and I’m always ready to answer their questions.
                                I began working with Dr. Thomas and Dr. Pavicic as an intern and had a wonderful experience. They are very patient and informative, and it’s obvious that they love what they do.</p>
                            <p>I live in Broadview Hts. with my best friend. In my spare time I love to spend time and run around with my niece Izabelle. When I’m not at the practice,
                                I enjoy playing volleyball and softball! Outside of the practice I love going to concerts especially all of the country concerts with my friends in the
                                summer time! When it’s sunny, you will almost always find me outside enjoying the nice weather.  </p>
                            <div class="hr"><hr></div>

                            <div><img src="img/tracy.jpg" alt="Tracy" class="team-photo"></div>
                            <h2>Tracy</h2>
                            <h3>Dental Assistant</h3>

                            <p>I have been working in the dental field for over 13 years and I love it. I have even gone back to school and receieved my LPN degree which I use to work part-time for an oral
                                surgery practice. I enjoy working at Five Points Dentistry because we use up to date technology and always put our patients first!</p>
                            <p> Outside of the practice I enjoy spending time with my husband, Andrew and our dog, Dakota. I love to travel, workout(especially Zumba), going to concerts and spending time with my family.
                            </p>
                            <div class="hr"><hr></div>




                        </div><!-- /diy editable -->







                </div>

            </div>


        </div>
        <!--OUR TEAM Meet Our Team ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--NEW PATIENTS Office Visits ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


        <div data-role="page" id="oficeVisit" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo9">
                        <ul id="menu-seo9" class="naziv">
                            <li><a href="##financial" data-transition="<?php echo $transitionefect ?>">Financial Information</a></li>
                            <li><a href="#oficetour" data-transition="<?php echo $transitionefect ?>">Office Tour</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Office Visits</h2>
                        <img src="img/office-visits.jpg" width="80%" height="200" alt="photo of smiling young man" class="auto">

                        <div>

                            <h2>Your first visit</h2>
                            <p>Your first visit to our office typically includes an X-ray that allows us to view the structure of the jaw, the position of any teeth that have not yet erupted,
                                malformed roots, and tooth decay.</p>
                            <p>The initial visit involves a   review of your medical history. When you share your medical history, be sure to provide complete, up-to-date information on your health.
                                Inform our office if you have experienced a recent hospitalization or surgery, or if you have been ill. Also tell us the names, doses, and frequency of any
                                medications you are taking — whether prescription or over-the-counter products — and the name of your physician. Inform us of any changes in your health or medications.
                                This information will help us select the safest and most effective method of treatment for you.</p>
                            <h2>Regular checkups</h2>
                            <p>We encourage regular checkups for individuals age four and up. Regular checkups are important to:</p>
                            <ul>
                                <li>Check for problems you might not see or feel</li>
                                <li>Find early signs of decay</li>
                                <li>Treat oral health problems early, while they are still manageable</li>
                            </ul>
                            <p>Regular checkups include a thorough cleaning and polishing, and an oral exam by the doctor. During the oral exam, your doctor will check the health of your mouth,
                                teeth, gums, an oral cancer screening, and check your existing fillings and restorations, because constant pressure from  chewing, grinding, or clenching can cause
                                them to wear away, chip, or crack.</p>
                            <p>Regular checkup appointments typically take about 60 minutes. Patients are seen by appointment only. We make every effort to be on time for our patients,
                                and we ask that you extend the same courtesy to us. If you cannot keep an appointment, please notify us at least 24 hours prior to your scheduled appointment time.</p>




                        </div><!-- /diy editable -->


                        <p class="sub_nav"><a class="office-visits" href="#oficeVisit">Office Visits</a>
                            <span>/</span> <a class="financial-information active" href="#financial">Financial Information</a>
                            <span>/</span> <a class="office-tour" href="#oficetour">Office Tour</a>
                            <br>  <br> </p>

                    </div>


                </div>

            </div>


        </div>











        <!--NEW PATIENTS Office Visits ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--NEW PATIENTS Financial Information ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="financial" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo10">
                        <ul id="menu-seo10" class="naziv">
                            <li><a href="#oficeVisit" data-transition="<?php echo $transitionefect ?>">Office Visits</a></li>
                            <li><a href="#oficetour" data-transition="<?php echo $transitionefect ?>">Office Tour</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <div id="content">

                        <h2 class="nenad">Financial Information</h2>
                        <img src="img/financial-information.jpg" width="100%" height="200" alt="photo of smiling young man" class="auto">

                        <div class="editable">


                            <p>The cost of your treatment may vary depending on your individual needs and treatment plan. During your visit, we’ll discuss the cost of your
                                treatment and each of your available payment plan options with you, so you are able to make the best choice for you, your smile, and your family.</p>


                            <h2>Insurance</h2>
                            <p>Our office staff is always available to help you with insurance claims and paperwork. We’ll work with your insurance provider and make sure you understand your insurance benefits.</p>

                            <h2>Affordable payment plans</h2>
                            <p>Your smile is yours forever, and we want to make it as easy as possible for you to receive the best care whenever you need it.</p>

                            <p>Our practice accepts most major credit cards and insurance plans, plus we offer affordable third-party financing options through
                                <a href="http://www.carecredit.com">CareCredit</a>.
                                With third-party financing, you can: </p>

                            <div>
                                <a href="http://www.carecredit.com"><img src="http://media.sesamehost.com/images/logos/carecredit.gif" class="right" alt="CareCredit" style="padding: 4px 24px; background:#fff;"></a>
                            </div>

                            <ul>
                                <li>Start treatment immediately</li>
                                <li>Enjoy low monthly payments</li>
                                <li>Finance up to 100% of the treatment cost</li>
                                <li>Choose between several payment options</li>
                                <li>Pay no costs up front</li>
                                <li>Pay no annual fees</li>
                            </ul>





                            <!-- UNCOMMENT THIS IF THE SITE HAS A PATIENT LOGIN
                            <h2>Convenient Online Services</h2>
                            <p>With just the simple click of a mouse, our secure online service allows you to:</p>
                            <ul>
                            <li>View your appointment and account information any time</li>
                            <li>Sign up for email or text appointment reminders</li>
                            <li>Check your payment history and see current charges</li>
                            <li>Print out flex spending reimbursement and tax receipts</li>
                            </ul>
                            <p>If you do not have a patient login and would like to begin viewing your account information online and from the comfort of your own home, please
                            <a href="////////////// ADD PATIENT LOGIN LINK /////////////" title="click here to sign up for your own personal account">click here</a>
                            to sign up for your own personal account.</p>
                            -->

                            <p>Please let us know if you have any questions about your insurance coverage or payment options, and let us know how we can help to make your entire dental experience a pleasant one.</p>


                            <div style="clear: both;"></div>


                        </div><!-- /diy editable -->


                        <p class="sub_nav"><a class="office-visits" href="#oficeVisit">Office Visits</a>
                            <span>/</span> <a class="financial-information active" href="#financial">Financial Information</a>
                            <span>/</span> <a class="office-tour" href="#oficetour">Office Tour</a>
                            <br>  <br> </p>

                    </div>



                </div>

            </div>


        </div>
        <!--NEW PATIENTS Financial Information ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



        <!--NEW PATIENTS Office Tour ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="oficetour" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo11">
                        <ul id="menu-seo11" class="naziv">
                            <li><a href="#oficeVisit" data-transition="<?php echo $transitionefect ?>">Office Visits</a></li>
                            <li><a href="##financial" data-transition="<?php echo $transitionefect ?>">Financial Information</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <div id="content">
                                        <h2 class="nenad">Office Tour</h2>

                                        <div>

                                            <p>Move your mouse over the thumbnails below to view larger version.</p>
                                            <div>


                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-01.jpg" width="100%" height="250">
                                                        </a>

                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-03.jpg" width="100%" height="250">
                                                        </a>

                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-05.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-06.jpg" width="100%" height="250">

                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-07.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-08.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-09.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-11.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-12.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-13.jpg" width="100%" height="250">
                                                        </a>
                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-14.jpg" width="100%" height="250">
                                                        </a>

                                                        <a href="#css-office-tour">
                                                            <img src="img/web-design/image-04.jpg" width="100%" height="250">

                                                        </a>


                                            </div>




                        <p class="sub_nav"><a class="office-visits" href="#oficeVisit">Office Visits</a>
                            <span>/</span> <a class="financial-information active" href="#financial">Financial Information</a>
                            <span>/</span> <a class="office-tour" href="#oficetour">Office Tour</a>
                            <br>  <br> </p>

                    </div>
                </div>
                </div>
            </div>
        </div>

            <!--NEW PATIENTS Office Tour ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <!--General Dentistry Common Procedures /////////////////////////////////////////////////////////////////////////////////////////////////-->
            <div data-role="page" id="comonprocedure" data-theme="<?php echo $theme ?>">
                <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <section id="navigation-menu-seo12">
                            <ul id="menu-seo12" class="naziv">
                                <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                                <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                                <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                                <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                                <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                                <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                                <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                                <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                                <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                                <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                            </ul>
                        </section>

                        <div>

                        <h2 class="nenad">Common Procedures</h2>
                        
                        <div><img src="img/web-design/smiling-man.jpg" width="100%" height="200"></div>
                        <h2 id="exams-cleanings">Regular exams and cleanings</h2>
                        <p>Regular exams are an important part of maintaining your oral health. During your regular exam, we will:</p>
                        <ul>
                            <li>Check for any problems you may not see or feel</li>
                            <li>Look for cavities or other signs of tooth decay</li>
                            <li>Inspect your teeth and gums for gingivitis and signs of periodontal disease</li>
                            <li>Perform a thorough teeth cleaning</li>
                        </ul>
                        <p>Your regular exam will take about 45 minutes. Each regular exam includes a detailed teeth cleaning, during which we will
                            clean, polish, and rinse your teeth to remove any tartar and plaque that have built up on the tooth’s surface.</p>
                        <p>Visiting our office every six months gives you the chance to ask the doctor any questions you may have about your
                            oral health. Regular exams are offered by appointment only, so please contact our practice today to schedule your
                            next dental exam and teeth cleaning.</p>





                        
                        <h2 id="bonding">Bonding</h2>
                        <p><img src="img/web-design/bonding.jpg" alt="bonding" class="right">Bonding is a conservative way to repair slightly chipped,
                            discolored, or crooked teeth. During dental bonding, a white filling is placed on your tooth to improve its appearance.
                            The filling “bonds” with your tooth. Because it comes in a variety of tooth-colored shades, it closely matches the
                            appearance of your natural teeth.</p>
                        <p>Tooth bonding can also be used for tooth fillings instead of amalgam fillings. Many patients prefer bonded fillings
                            because the white color is much less noticeable than the silver amalgam. Bonding fillings can be used on front and back teeth depending on the location and extent of tooth decay.</p>
                        <p>Bonding is less expensive than other cosmetic treatments and can usually be completed in one visit to our office.
                            However, bonding can stain and is easier to break than other cosmetic treatments, such as porcelain veneers.
                            If it does break or chip, tell your doctor. The bonding can generally be patched or repaired easily in one visit.</p>





                        
                        <h2 id="bridges">Bridges</h2>
                        <p><img src="img/web-design/bridges.jpg" alt="bridges" class="right">A bridge may be used to replace missing teeth,
                            help maintain the shape of your face, and alleviate stress on your bite.</p>
                        <p>A bridge replaces missing teeth with artificial teeth, looks great, and literally bridges the gap where one or
                            more teeth may have been. Your bridge can be made from gold, alloys, porcelain, or a combination of these
                            materials and is bonded onto surrounding teeth for support.</p>
                        <p>The success of any bridge depends on its foundation — the other teeth, gums, or bone to which it is attached.
                            Therefore, it’s very important to keep your existing teeth, gums, and jaw healthy and strong.</p>





                        
                        <h2 id="cadcam">CAD/CAM</h2>
                        <p><img src="img/web-design/fillings.jpg" alt="fillings" class="right">We can create customized fittings of crowns,
                            inlays, onlays, and other dental restorations using Computer-Aided Design (CAD) and Computer-Aided Manufacturing(CAM).
                            Through the CAD/CAM technology, our office can provide you with the most precise restorations possible.</p>

                        <p>By using CAD/CAM, your dentist is able to create durable, well-fitting, individual, or multiple tooth restorations.
                            CAD/CAM technology also delivers advantages when it comes to office visits; for instance,
                            traditional tooth restorations may take several days and multiple office visits, but with CAD/CAM technology,
                            we are able to perform single-visit tooth restorations! In just one visit you can have a beautiful, healthy smile.</p>

                        <p>To find out more about CAD/CAM technology and how it can benefit you, please contact our practice and schedule an
                            appointment to learn more.</p>





                        
                        <h2 id="crowns">Crowns</h2>
                        <p>Crowns are a restorative procedure used to improve your tooth’s shape   or to strengthen a tooth. Crowns are most often
                            used for teeth that are   broken, worn, or have portions destroyed by tooth decay.</p>
                        <p>A crown is a “cap” cemented onto an existing tooth that usually   covers the portion of your tooth above the gum line.
                            In effect, the   crown becomes your tooth’s new outer surface. Crowns can be made of   porcelain, metal, or both.
                            Porcelain crowns are most often preferred   because they mimic the translucency of natural teeth and are very   strong.</p>
                        <p>Crowns or onlays (partial crowns) are needed when there is   insufficient tooth strength to hold a filling. Unlike
                            fillings, which apply the restorative material directly into your mouth,   a crown is fabricated away from your mouth.
                            Your crown is created in a   lab from your unique tooth impression, which allows a dental laboratory
                            technician to examine all aspects of your bite and jaw movements. Your   crown is then sculpted just for you so your
                            bite and jaw movements   function normally once the crown is placed.</p>





                        
                        <h2 id="dentures">Dentures</h2>
                        <p><img src="img/web-design/dentures.jpg" alt="dentures" class="right">Dentures are natural-looking replacement
                            teeth that are removable. There are two types of dentures: full and partial. Full dentures are given to patients
                            when all the natural teeth have been removed. Partial dentures are attached to a metal frame that is connected to
                            your natural teeth and are used to fill in where permanent teeth have been removed. Just like natural teeth,
                            dentures need to be properly cared for. Use a gentle cleanser to brush your dentures, always keep them moist
                            when they’re not in use, and be sure to keep your tongue and gums clean as well. </p>





                        
                        <h2 id="xrays">Digital X-rays</h2>
                        <p><img src="img/web-design/digital-xray.jpg" alt="x-ray" class="right">Using the most advanced dental technology is just
                            as important as staying up-to-date on the latest treatment techniques. Because our practice is dedicated to providing
                            you with the safest and most convenient treatment options available, we utilize advanced digital X-ray technology in
                            our office.</p>
                        <p>Digital X-rays provide several advanced imaging options that are designed to save time, provide clearer dental photos,
                            and expose patients to less radiation than traditional X-ray technology.</p>
                        <p>Our practice is focused on making your dental experience as comfortable as possible. At your next appointment,
                            we’ll be happy to answer any questions you may have.</p>





                        
                        <h2 id="extractions">Extractions</h2>
                        <p><img src="img/web-design/extractions.gif" alt="extractions" class="right">There are times when it is necessary to remove
                            a tooth. Sometimes a baby tooth has misshapen or long roots that prevent it from falling out as it should, and the tooth
                            must be removed to make way for the permanent tooth to erupt. At other times, a tooth may have so much decay that it puts
                            the surrounding teeth at risk, so your doctor may recommend removal and replacement with a bridge or implant. Infection,
                            orthodontic correction, or problems with a wisdom tooth can also require removal of a tooth.</p>
                        <p>When it is determined that a tooth needs to be removed, your dentist may extract it during a regular checkup or request
                            another visit for this procedure. The root of each tooth is encased within your jawbone in a “tooth socket,” and your
                            tooth is held in that socket by a ligament. In order to extract a tooth, your dentist must expand the socket and separate
                            the tooth from the ligament holding it in place. While this procedure is typically very quick, it is important to share
                            with your doctor any concerns or preferences for sedation.</p>
                        <p>Once a tooth has been removed, neighboring teeth may shift, causing problems with chewing or with jaw joint function.
                            To avoid these complications, your dentist may recommend you replace the extracted tooth.</p>





                        
                        <h2 id="fillings">Fillings</h2>
                        <p><img src="img/web-design/crowns.jpg" alt="crowns" class="right">Traditional dental restoratives, or fillings, may include
                            gold, porcelain, or composite. Newer dental fillings include ceramic and plastic compounds that mimic the appearance of
                            natural teeth. These compounds, often called composite resins, are typically used on the front teeth where a natural
                            appearance is important.</p>
                        <p>There are two different kinds of fillings: direct and indirect. Direct fillings are placed into a prepared cavity during
                            a single visit. Indirect fillings generally require two or more visits. These include inlays, and  veneers fabricated
                            with ceramics or composites.</p>





                        
                        <h2 id="implants">Implant restoration</h2>
                        <p><img src="img/web-design/implant-model.jpg" alt="implants" class="right">If you are missing teeth, it is crucial to replace
                            them. Without all your teeth, chewing and eating can destabilize your bite and cause you discomfort. When teeth are missing,
                            your mouth can shift and even cause your face to look older. Implants are a great way to replace your missing teeth, and if properly maintained, can last a lifetime!</p>
                        <p>An implant is a new tooth made of metal and porcelain that looks just like your natural tooth. It’s composed of two main
                            parts: One is the titanium implant body that takes the place of the missing root, and the other is the tooth-colored
                            crown cemented on top of the implant. With implant treatment, you can smile confidently, knowing  no one will ever
                            suspect you have a replacement tooth.</p>
                        <p>In addition to tooth replacement, implants may be used to anchor dentures, especially lower dentures that tend to shift
                            when you talk or chew. For patients with removable partial dentures, implants can replace missing teeth so  you have a
                            more natural-looking smile.</p>





                        
                        <h2 id="intraoralcamera">Intraoral camera</h2>
                        <p><img src="img/web-design/intraoral-camera.jpg" alt="intra-oral camera at the dentist" class="right">You know the importance
                            of prevention when it comes to your  dental health, and we’re always looking for new, improved ways to help you  achieve a
                            healthy smile for life. While X-rays provide valuable information,  they don’t give a complete view of everything going on
                            inside your  mouth. With the use of an intraoral camera, we can see every aspect of your  teeth and mouth with incredible
                            detail, uncovering cracked teeth, plaque  deposits, cavities next to fillings, and excessive wear. When we can discover
                            oral problems early on, your treatment is much less invasive and much more cost-effective. </p>
                        <p>Our intraoral camera is small — about the size  of the mirror we use during your regular hygiene appointments.
                            You probably  wouldn’t even notice we’re using it, except that with the intraoral camera, you  have the opportunity
                            to see everything we see on a monitor. This is a great  tool to help you become more informed about your dental health,
                            as it gives you  a clear understanding of your teeth’s condition, and it allows you to make a  more informed decision
                            regarding your treatment options.</p>





                        
                        <h2 id="fluoride">Fluoride</h2>
                        <p>Fluoride is effective in preventing cavities and tooth decay. It also prevents plaque from building up and hardening on the
                            tooth’s surface. A fluoride treatment in your dentist’s office takes just a few minutes. After the treatment, patients may
                            be asked not to rinse, eat, or drink for at least 30 minutes in order to allow the teeth to absorb the fluoride.
                            Depending on your oral health or your doctor’s recommendation, you may be required to have a fluoride treatment every three,
                            six, or 12 months.</p>





                        
                        <h2 id="laser">Laser dentistry</h2>
                        <p>Laser therapy in dentistry provides patients with a more comfortable dental treatment experience. Using laser dentistry, your dentist is able to deliver a precise treatment
                            that is more comfortable, quicker, and provides more stunning results. There are two different types of laser dentistry: hard tissue and soft tissue. Hard tissue
                            includes treatments such as cavity detection, dental fillings, and improving tooth sensitivity. Soft tissue treatments include gum reshaping, gum surgery, and improving muscle attachment.</p>
                        <p>There are several benefits to receiving a laser therapy dental treatment.</p>
                        <ul>
                            <li>Many laser treatments do not require anesthesia, and the recovery time is much quicker than with traditional treatment methods.</li>
                            <li>Treatments are more comfortable.</li>
                            <li>There is less potential chance for bacterial infection because laser treatments are so precise.</li>
                        </ul>





                        
                        <h2 id="mouthguards">Mouthguards</h2>
                        <p><img src="img/web-design/mouthguard.jpg" alt="mouthguard" class="right">Whether you wear braces or not, protecting your smile while playing sports is essential. Mouthguards help
                            protect your teeth and gums from injury. If you participate in any kind of full-contact sport, the American Dental Association recommends you wear a mouthguard.</p>
                        <p>Choosing the right mouthguard is essential. There are three basic types of mouthguards: the pre-made mouthguard, the “boil-and-bite” fitted mouthguard, and a custom-made mouthguard
                            from your dentist. When you chose a mouthguard, be sure to pick one that is tear-resistant, comfortable and well-fitted for your mouth, easy to keep clean, and does not prevent you
                            from breathing properly.</p>
                        <p>Your dentist can show you how to wear a mouthguard properly and how to choose the right mouthguard to protect your smile.</p>





                        
                        <h2 id="root-canals">Root canals</h2>
                        <p><img src="img/web-design/root-canals.gif" alt="root canals" class="right">In the past, if you had a tooth with a diseased nerve, you'd probably lose that tooth. Today, with a
                            special dental procedure called “root canal treatment,” your tooth can be saved. When a tooth is cracked or has a deep cavity, bacteria can enter the pulp tissue and germs can
                            cause an infection inside the tooth. If left untreated, an abscess may form. If the infected tissue is not removed, pain and swelling can result. This can not only injure your jawbones,
                            but it is also detrimental to your overall health.</p>
                        <p>Root canal treatment involves one to three visits. During treatment, your general dentist or endodontist (a dentist who specializes in problems with the nerves of the teeth)
                            removes the affected tissue. Next, the interior of the tooth will be cleaned and sealed. Finally, the tooth is filled with a dental composite. If your tooth has extensive decay,
                            your doctor may suggest placing a crown to strengthen and protect the tooth from breaking. As long as you continue to care for your teeth and gums with regular brushing, flossing,
                            and checkups, your restored tooth can last a lifetime.</p>





                        
                        <h2 id="sealants">Sealants</h2>
                        <p><img src="img/web-design/sealants.gif" alt="sealants" class="right">Sometimes brushing is not enough, especially when it comes to those hard-to-reach spots in your mouth.
                            It is difficult for your toothbrush to get between the small cracks and grooves on your teeth. If left alone, those tiny areas can develop tooth decay. Sealants give your teeth
                            extra protection against decay and help prevent cavities.</p>
                        <p>Dental sealants are plastic resins that bond and harden in the deep grooves on your tooth’s surface. When a tooth is sealed, the tiny grooves become smooth and are less likely
                            to harbor plaque. With sealants, brushing your teeth becomes easier and more effective against tooth decay.</p>
                        <p>Sealants are typically applied to children’s teeth as a preventive measure against tooth decay after the permanent teeth have erupted. However, adults can also receive sealants
                            on healthy teeth. It is more common to seal “permanent” teeth rather than “baby” teeth, but every patient has unique needs, and your dentist will recommend sealants on a case-by-case basis.</p>
                        <p>Sealants last from three to five years, but it is fairly common to see adults with sealants still intact from their childhood. A dental sealant only provides protection when
                            it is fully intact, so if your sealants come off, let your dentist know, and schedule an appointment for your teeth to be re-sealed. </p>




                        
                        <h2 id="veneers">Veneers</h2>
                        <p><img src="img/web-design/veneers.jpg" alt="veneers" class="right">You no longer need to hide your smile because of gaps, chips, stains, or misshapen teeth. With veneers, you
                            can easily correct your teeth’s imperfections to help you have a more confident, beautiful smile. Veneers are natural in appearance, and they are a perfect option for patients
                            wanting to make minor adjustments to the look and feel of their smile.</p>
                        <p>Veneers are thin, custom-made shells made from tooth-colored materials (such as porcelain), and they are designed to cover the front side of your teeth. To prepare for veneers,
                            your doctor will create a unique model of your teeth. This model is sent to the dental technician to create your veneers. Before placing your new veneer, your doctor may need to conservatively prepare your tooth to achieve the desired aesthetic result.</p>
                        <p>When placed, you’ll be pleased to see that veneers look like your natural teeth. While veneers are stain resistant, your doctor may recommend that you avoid coffee, tea, red wine,
                            and tobacco to maintain the beauty of your new smile. </p>




                        <!--
                        <div class="hr"><hr /></div>
                        <h2 id="wisdom">Wisdom Teeth</h2>
                        <p><img src="images/common-procedures/wisdom-teeth-illus.jpg" alt="wisdom teeth" class="right-no-border" />Wisdom teeth are types of molars found in the very back of your mouth. These teeth usually appear in late teens or early twenties, but they may become impacted (fail to erupt) due to lack of room in the jaw or angle of entry.  When a wisdom tooth is impacted, it may need to be removed. If it is not removed, you may develop gum tenderness, swelling, or even severe pain. Impacted wisdom teeth that are partially or fully erupted tend to be quite difficult to clean and are susceptible to tooth decay, recurring infections, and even gum disease.</p>
                        <p>Wisdom teeth are typically removed in the late teens or early twenties because there is a greater chance that the teeth's roots have not fully formed and the bone surrounding the teeth is less dense. These two factors can make extraction easier as well as shorten the recovery time.</p>
                        <p>In order to remove a wisdom tooth, your dentist first needs to numb the area around the tooth with a local anesthetic. Since the impacted tooth may still be under the gums and imbedded in your jaw bone, your dentist will need to remove a portion of the covering bone to extract the tooth. In order to minimize the amount of bone that is removed with the tooth, your dentist will often &quot;section&quot; your wisdom tooth so that each piece can be removed through a small opening in the bone.
                        Once your wisdom teeth have been extracted, the healing process begins. Depending on the degree of difficulty related to the extraction, healing time varies. Your dentist will share with you what to expect and provide instructions for a comfortable, efficient healing process.</p>
                        -->



                        </div>
                    </div>
                </div>
            </div>
            <!--General Dentistry Common Procedures /////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Cosmetic Dentistry /////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="cosmeticDentistry" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo13">
                        <ul id="menu-seo13" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div>

                        <h2 class="nenad">Cosmetic Dentistry</h2>
                        <img src="img/web-design/cosmetic-dentistry.jpg" width="100%" height="250" alt="photo of smiling young man" class="auto">





                            <p>Your smile is one of your most important features. Dentistry is continuously evolving, and with a variety of advanced treatment options, patients of all ages can easily achieve
                                a beautiful, healthy, and aesthetic smile.</p>

                            <h2>Are you ready for a smile makeover?</h2>

                            <p>If you’re considering cosmetic dental treatment, ask yourself a few simple questions:</p>

                            <ul>
                                <li>Do you hesitate when you smile?</li>
                                <li>Would you like to increase your self-confidence?</li>
                                <li>Do you want to look your best in social or professional situations?</li>
                                <li>Are you ready to reverse any dental imperfections you may have?</li>
                            </ul>

                            <p>If you’ve answered yes to any of these questions, cosmetic dentistry may be the answer you’ve been looking for!</p>

                            <h2>Cosmetic dentistry is an art and a science</h2>

                            <p>Let us help you achieve your smile goals! Cosmetic dentistry is different from general dental care; it is both an art and a science. By providing cosmetic dental care, your dentist
                                is able to offer smile enhancement, restoration, and maintenance treatments for optimal dental health. Using cutting-edge techniques and advanced materials, our office proudly
                                offers you a beautiful, natural smile and all the benefits that come with it.</p>

                            <p>Feel more confident about your appearance with a new smile that is as beautiful as it is healthy. You no longer have to suffer from missing, chipped, discolored, or crooked teeth.
                                <a href="appointment-request.php">Contact our practice</a> today and schedule your smile makeover!</p>




                    </div>
                </div>
            </div>
        </div>
        <!--General Dentistry Cosmetic Dentistry /////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Gum Disease /////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="gumdisiase" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo14">
                        <ul id="menu-seo14" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div>

                        <h2 class="nenad">Gum Disease</h2>





                            <img src="img/web-design/healthy-gums.gif" alt="healthy gums" width="100%" height="210">
                            <img src="img/web-design/gingivitis.gif" alt="gingivitis"width="100%" height="210" >
                            <img src="img/web-design/periodontitis.gif" alt="periodontitis" width="100%" height="210">

                            <p>Gum disease, also known as periodontal disease, is an infection of the gums that surround your teeth. It is one of the primary causes of tooth loss in adults.
                                Because it is virtually pain-free, many patients do not know they have the disease. During each regular checkup, your dentist will check for signs
                                of periodontal disease
                                by measuring the space between your teeth and gums. </p>
                            <h2>What causes gum disease?</h2>

                            <p>Gum disease is caused by a build-up of plaque, a sticky form of bacteria that forms on the teeth. If the plaque is not removed (by flossing, brushing, and regular dental checkups),
                                it will continue to build and create toxins that can damage the gums. Periodontal disease forms just below the gum line and creates small pockets that separate the gums from the teeth.
                                It has two stages:  gingivitis and periodontitis.</p>
                            <ul>
                                <li><strong>Gingivitis </strong>— This is the early stage of gum disease, when the gums become red and swollen, and bleed easily. At this stage, the disease is treatable and can
                                    usually be eliminated by daily brushing and flossing.</li>

                                <li><strong>Periodontitis </strong>— If left untreated, gingivitis will advance into periodontitis, and the gums and bone that support the teeth will become seriously and
                                    irreversibly damaged. Gums infected with periodontitis can cause teeth to become loose, fall out, or require removal by a dentist.</li>
                            </ul>
                            <h2>Certain factors can increase a patient’s risk of developing periodontal disease, including:</h2>
                            <ul>
                                <li>Smoking or using chewing tobacco</li>
                                <li>Diabetes</li>
                                <li>Certain types of medication, such as steroids, anti-epilepsy drugs, cancer therapy drugs, calcium channel blockers, and oral contraceptives</li>
                                <li>Bridges that no longer fit properly</li>
                                <li>Crooked teeth</li>
                                <li>Old fillings</li>
                                <li>Pregnancy</li>
                            </ul>
                            <h2>While it is possible to have periodontal disease and not know it, some symptoms can include:</h2>
                            <ul>
                                <li>Gums that bleed easily</li>
                                <li>Red, swollen, tender gums</li>
                                <li>Gums that have pulled away from the teeth</li>
                                <li>Persistent bad breath or unpleasant taste in the mouth </li>
                                <li>Pus between your teeth and gums</li>
                                <li>Loose or separating permanent teeth </li>
                                <li>Any change in the way your teeth fit together when you bite</li>
                                <li>Any change in the fit of partial dentures</li>
                            </ul>


                            <h2>Treating gum disease</h2>

                            <p>Depending on the severity of each individual case, treatments for gum disease can vary. Typical treatments include:</p>

                            <ul>
                                <li>Non-surgical treatments, including at-home periodontal trays and scaling and root planning (deep cleaning)</li>
                                <li>Periodontal surgery and laser gum surgery</li>
                                <li>Dental implants</li>
                            </ul>

                            <h2>Preventing gum disease</h2>

                            <p>Regular dental checkups and periodontal examinations are important for maintaining your health and the health of your smile. You don’t have to lose teeth to periodontal disease,
                                and by practicing good oral hygiene at home, you can significantly reduce your chances of ever getting gum disease. Remember to brush regularly, clean between your teeth,
                                eat a balanced diet, and schedule regular dental visits to help keep your smile healthy. </p>




                    </div>
                </div>
            </div>
        </div>
        <!--General Dentistry Gum Disease /////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Gum Disease and Overall Health //////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="overalHealth" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo15">
                        <ul id="menu-seo15" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div>

                        <h2 class="nenad">Gum Disease and Overall Health</h2>
                        <img src="img/web-design/gum-disease-and-overall-health.jpg" width="100%" height="250" alt="stock photo of two young girls" class="auto">




                            <p>Advanced, untreated gum disease degrades the tissues and bone structures surrounding the teeth and very often causes tooth loss. But the effects of gum disease can be felt
                                well beyond the mouth and jaw. Research links gum disease to a variety of systemic conditions that affect overall health, including heart disease, diabetes, and osteoporosis.
                                We refer to this as the mouth-body connection. </p>

                            <p>In some cases, gum disease can cause problems in other parts of the body, while in other instances, conditions seemingly unrelated to the mouth can contribute to the development
                                or advancement of gum disease. </p>

                            <p>It's important to let us and your general dentist know about any illnesses or conditions you are experiencing. An awareness of difficulties outside your mouth can help us treat
                                certain problems related to your teeth and gums.  In turn, we may be able to identify diseases affecting other areas of your body based on the symptoms we observe inside your
                                mouth. Following is a list of conditions known to be related to gum disease. </p>

                            <h2>Diabetes</h2>
                            <p>If you have diabetes, it is especially important to take good care of your teeth and gums, because gum disease and diabetes can affect each other adversely. Diabetes can disrupt
                                the immune system's ability to fight infection, making diabetics more susceptible to gum disease, which is essentially an infection of the tissue surrounding the teeth. Also,
                                advanced gum disease can boost the level of blood sugar in the body, further complicating diabetes. </p>

                            <h2>Heart Disease and Stroke</h2>
                            <p>The American Academy of Periodontology cites research indicating that people with gum disease are nearly twice as likely to suffer from coronary artery (heart) disease as those
                                without gum disease. Currently, the actual link between the two diseases is not entirely clear, though some scientists believe that bacteria from the mouth travel through the
                                blood stream to affect the arteries in the heart. Other research points to a link between gum disease and stroke, with one study finding higher instances of oral infection in
                                a group of stroke survivors than in a control group. </p>

                            <h2>Osteoporosis</h2>
                            <p>In a normal body, bone growth slows over time, and bone density decreases due to age and other circumstances. But in people with osteoporosis, bones are weakened to the point
                                that they are fragile enough to fracture easily and frequently. Although we most commonly hear of hip or back fractures, all bones are affected, including the jaw. A jaw with
                                decreased bone density can't support the teeth as well as a healthy jaw, which leaves those suffering from both gum disease and osteoporosis with a heightened risk of tooth loss.
                                If you think you might be at risk for osteoporosis, talk to your doctor about having a bone density test. If this condition is identified early enough, treatment can help. </p>

                            <h2>Respiratory Diseases</h2>
                            <p>Research indicates that bacteria from the mouth – including those present in someone suffering from gum disease – can be inhaled down into the lungs, leading to respiratory
                                diseases such as pneumonia. Smoking is a primary cause of respiratory diseases and it is also a risk factor in gum disease. Quitting smoking can improve your health in myriad ways.
                                Please get in touch with us or your general dentist if you are looking for help with kicking the habit.  </p>

                            <h2>Pregnancy</h2>
                            <p>During pregnancy and other phases of increased hormone levels (puberty, menstrual cycle, menopause) the risk of oral health problems is higher than normal, due to increased
                                gum sensitivity. Some studies have linked gum disease to low birth weight and premature labor. If you are planning to become pregnant, be sure to assess your oral health first
                                and begin treatment if you have gingivitis or periodontitis.</p>

                            <div style="clear: both;"></div>





                    </div>


                </div>

            </div>


        </div>
        <!--General Dentistry Gum Disease and Overall Health /////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Periodontal Treatments /////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="PeriodontalTreatments" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo16">
                        <ul id="menu-seo16" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Periodontal Treatments</h2>
                        <img src="img/web-design/periodontal-treatments.jpg" width="80%" height="250" >





                            <h2>Treatment Options</h2>
                            <p>If you've been diagnosed with gum disease, there are a variety of   treatment options depending on the particulars of your situation and the   severity of the problem.
                                We always start with the least invasive   options, which are non-surgical. However, in more serious cases, surgery   may be necessary. </p>

                            <h2>Non-Surgical Treatment</h2>
                            <p>The first line of defense against the presence of gum disease is a   unique type of cleaning called “scaling and root planing”. In this   procedure, an ultrasonic cleaning
                                device is used to remove plaque and   tartar from your teeth where regular cleaning devices can't reach: under   the gum line on the tooth and the root. Then, the rough
                                surface of the   tooth and the root are smoothed out (planed). This provides a healthy,   clean surface that makes it easier for the gum tissue to reattach to the   tooth. </p>
                            <p>If you address your gum disease before it becomes severe, scaling and   root planing may be the only treatment you need. However, as with any   dental procedure, after-care
                                is vital. In order to keep your teeth in   good shape and resist future occurrences of gum disease, you must brush   and floss daily, eat a healthy diet, avoid tobacco use,
                                and have   regular dental checkups. Even after a successful scaling and root   planing, if you don't attend to your teeth properly, it's quite likely   that you'll develop
                                gum disease again.</p>
                            <p>Some  non-surgical periodontal treatment services we offer are:</p>
                            <ul>

                                <li>
                                    <p><strong>Scaling and Root Planing</strong> This is the removal of hard and soft deposits from the teeth and roots   of  teeth. This includes bacterial plaque (germs)
                                        and the toxins they   produce and  the mineralized form of plaque called calculus (tartar). It   is these deposits  that cause irritation and infection of the gums
                                        and   bone loss around the teeth.  Scaling and root planing is a very   technique-sensitive procedure that uses a  combination of sonic,   ultrasonic, and hand
                                        instruments.</p>
                                </li>
                                <li>
                                    <p><strong>Chemotherapeutic Irrigation</strong> This is the direct delivery of an antibacterial or antimicrobial   solution into  an infected area.
                                        This procedure is often done in   conjunction with scaling and  root planing. </p>
                                </li>

                                <li>
                                    <p><strong>Direct Delivery of Antibiotics</strong> This is the placement of antibiotic or antimicrobial fibers, chips,   or gels  into an infected area or areas.
                                        Unlike irrigation, these   antibiotic containing  vehicles remain in the infected site for several   days exerting their effect.</p>
                                </li>
                                <li>
                                    <p><strong>Supportive Periodontal Maintenance</strong> Once your gums have been brought back to health it is imperative that   a maintenance schedule be designed to
                                        fit your needs. Typically your teeth will be cleaned, scaled, and polished every three months. Three-month intervals help keep the plaque levels around the gums
                                        minimal and thus significantly reduce your risk of re-infection. Maintenance is the key to successful treatment. </p>
                                </li>
                            </ul>
                            <h2>Surgical Treatment Options</h2>
                            <p>If the tissue or bone surrounding your teeth is too damaged to be   repaired with non-surgical treatment, several surgical procedures are   available to prevent severe damage
                                and restore a healthy smile. We will   recommend the procedure that is best suited to the condition of your   teeth and gums. Following is a list of common types of periodontal
                                surgery.</p>

                            <ul>
                                <li>
                                    <p><strong>Pocket Depth Reduction</strong> In a healthy mouth, the teeth are firmly surrounded by gum tissue and   securely supported by the bones of the jaw.
                                        Periodontal disease damages   these tissues and bones, leaving open spaces around the teeth that we   call pockets. The larger these pockets are, the easier it is for
                                        bacteria to collect inside them, leading to more and more damage over   time. Eventually the supportive structure degrades to the point that the   tooth either falls
                                        out or needs to be removed. </p>
                                    <p>During pocket reduction procedures (also known as “flap surgery”), we   fold back the gum tissue and remove the bacteria hiding underneath, as
                                        well as the hardened plaque and tartar that have collected. We may also   remove any tissue that is too damaged to survive. We then sew the
                                        healthy tissue back into place. Now that the tooth and root are free of   bacteria, plaque and tartar, and the pockets have been reduced, the gums
                                        can reattach to the teeth.</p>
                                </li>
                                <li>

                                    <p><strong>Regeneration</strong> When the bone and tissue supporting the teeth has been lost due to   severe gum disease, we can restore these areas with a regeneration
                                        procedure. During this process, we begin by folding back the gum tissue   and removing the bacteria, plaque, and tartar. Depending on your   situation,
                                        we may then perform a bone graft to stimulate new bone   growth, or we may place a special kind of protein that stimulates tissue
                                        growth to repair the areas that have been destroyed by the disease.</p>
                                </li>
                                <li>
                                    <p><strong>Soft-Tissue Graft</strong> A frequent symptom of gum disease is gum recession (also called gingival   recession). As the gums recede, more of the roots are revealed.
                                        This   can make teeth appear longer and can also create sensitivity to hot or   cold liquids or food. It also exposes the tooth to increased damage from   gum disease,
                                        as bacteria, plaque, and tartar attack the surface of the   tooth and the root. </p>
                                    <p>During a soft-tissue graft, tissue from the top of your mouth or   another source is sewed to the gum area, covering the roots and   restoring the gum line to its original,
                                        healthy location. This procedure   can also be performed for cosmetic reasons.</p>

                                </li>
                                <li>
                                    <p><strong>Bone Grafting/Tissue Regeneration</strong> This surgical procedure replaces bone that has been lost around the   teeth as a result of advancing gum disease. Various types of bone   grafting materials are used from synthetically derived bone to   collagen-type materials to the patient's own bone. Often a "membrane" of   some type is used to help contain the graft within the prepared bone   site and help the graft to heal properly. </p>
                                </li>
                                <li>
                                    <p><strong>Gum Grafting</strong> A surgical procedure designed to add protective gum around the root   of a tooth. Protective gum is often lost as a result of recession of the   gum or trauma. Most often, the protective gum used for the graft is   taken from another area of the patient's own mouth where the   protective-type gum is abundant. Once the graft heals, the area will   continually maintain the new protective gum. Gum grafts are very   predictable and usually need to be done only once. </p>

                                </li>
                                <li>
                                    <p><strong>Root Coverage Procedures</strong> These types of gum grafts are designed to cover the roots of teeth   that have been exposed due to recession or trauma. These procedures are   often done as cosmetic procedures in areas of aesthetic concern. . </p>
                                </li>
                                <li>
                                    <p><strong>Crown Lengthening</strong> This surgical procedure is designed to assist your restorative   dentist in getting a restoration (cap or filling) to properly fit your   tooth. When decay or tooth fracture goes beneath the gum line, your   dentist may require that more tooth structure be exposed surgically so   that he or she may properly restore the tooth. </p>

                                </li>
                                <li>
                                    <p><strong>Cosmetic Gum Sculpting</strong> This procedure is generally done for cosmetic purposes to eliminate a   “gummy smile” and to even out the gum line prior to cosmetic dentistry. </p>
                                </li>
                            </ul>
                    </div>
                </div>

            </div>
        </div>

        <!--General Dentistry Gum Periodontal Treatments /////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Pediatric Dentistry /////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Pediatric" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo17">
                        <ul id="menu-seo17" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Pediatric Dentistry</h2>
                        <img src="img/web-design/pediatric-dentistry.jpg" width="80%" height="250" alt="photo of smiling boy" class="auto">





                            <p>A child’s first visit to the dentist should be enjoyable. Children are not born with a natural fear of the dentist, but they can fear the unknown.
                                Our office makes a special effort to use pleasant, non-frightening, and simple words to describe each treatment. We want you and your child to feel at ease
                                from the moment your family arrives at our office. The more you and your child know about the first visit, the better you will feel.</p>

                            <h2>The American Academy of Pediatric Dentistry recommends</h2>

                            <p>Children should visit the dentist by their first birthday. It is important that your child’s newly-erupted teeth (emerging at six to 12 months of age)
                                receive proper dental care and benefit from proper oral hygiene habits right from the beginning.</p>

                            <p>Getting to know your teeth is fun! </p>

                            <p><a href="http://media.sesamehost.com/docs/dynamite-dental-fun-kit.pdf">Download our Dynamite Dental Fun Kit!</a></p>

                            <h2>When new teeth arrive</h2>

                            <p>Your child’s primary teeth, also know as “baby” teeth, will begin to erupt between the ages of six to 12 months and continue to erupt until about age three.
                                During this time, your child’s gums may feel tender and sore. To help alleviate this discomfort, we recommend you soothe the gums by rubbing a clean finger
                                or a cool, wet cloth across them. You may also choose to make use of a teething ring. When your child has finished teething, you can expect a total of 20 primary teeth!</p>

                            <p>Your child’s primary teeth are shed at various times throughout childhood. His or her permanent teeth begin erupting at age six and continue until age 21.
                                Adults have 28 permanent teeth — 32, including wisdom teeth.</p>

                            <h2>Adopting healthy oral hygiene habits</h2>

                            <p>As your child’s teeth erupt, be sure to examine them every two weeks, checking for lines and discoloration that may be caused by decay. Remember, sugary foods
                                and liquids can attack a new tooth, so take care that your child brushes his or her teeth after feeding or eating. We recommend brushing twice a day for optimal
                                oral hygiene: after breakfast and at bedtime.</p>

                            <p>Brushing can be fun, and your child should brush as soon as the first tooth arrives. When a baby’s tooth erupts, parents should brush it with a soft-bristled
                                toothbrush and a pea-sized amount of toothpaste. For children younger than two, do not use fluoride toothpaste unless advised to do so by your dentist or other
                                healthcare professional. We suggest reviewing proper tooth brushing procedures with your child.</p>

                            <p>Flossing is also a part of good oral hygiene habits, and your doctor will discuss with you the right time to start flossing. If you notice signs of decay,
                                contact your dentist immediately.</p>


                            <h2>Preventing tooth decay with regular checkups</h2>

                            <p>Tooth decay is caused by sugars that are left in your mouth. They turn into an acid that can break down your teeth. Children are at high risk for tooth decay for a
                                simple reason: many children and adolescents do not practice regular, good oral hygiene habits. Proper brushing and flossing routines that are combined with regular
                                dental visits help keep tooth decay away.</p>

                            <p>Your child should visit the dentist every six months for regular dental cleanings and checkups. Along with regular cleanings, we recommend fluoride treatments twice a
                                year to keep teeth their strongest. Tooth sealants are also recommended because they “seal” the deep grooves in your child’s teeth, preventing decay from forming in
                                these hard-to-reach areas. Sealants last for several years, but they will be monitored at your regular checkups.</p>

                    </div>
                </div>
            </div>
        </div>
        <!--General Dentistry Pediatric Dentistry//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Preventive Care/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Preventiv" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo18">
                        <ul id="menu-seo18" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Preventive Care</h2>
                        <img src="img/web-design/preventive-care.jpg" width="80%" height="245" alt="stock photo of a happy family" class="auto">





                            <p>Preventive dental care is important throughout your life, regardless of your age. By practicing good oral hygiene at home and scheduling regular checkups with
                                your dentist, you can help keep your smile bright and healthy for many years to come. Here are a few simple ways  you can prevent the build-up of plaque and cavities:</p>
                            <ul>
                                <li>Brush your teeth at least twice a day with a soft-bristled toothbrush. Use fluoride toothpaste to remove food particles and plaque from the tooth surfaces.
                                    Also, be sure to brush the top surface of your tongue; this will remove any extra plaque-causing food particles and help keep your breath fresh! </li>
                                <li>Clean between your teeth by flossing at least once a day. You can also use a mouthwash to help kill bacteria and freshen your breath.
                                    Decay-causing bacteria can linger between teeth where toothbrush bristles can't reach. Floss and mouthwash will help remove plaque and food particles from between
                                    the teeth and under the gum line. <a href="#flossing">Flossing Instructions</a></li>
                                <li>Eat a balanced diet, and try to avoid extra-sugary treats. Nutritious foods such as raw vegetables, plain yogurt, cheese, or fruit can help keep your smile healthy.</li>
                                <li>Remember to schedule regular checkups with your dentist every six months for a professional teeth cleaning.</li>
                                <li>Ask your dentist about dental sealant — a protective plastic coating that can be applied to the chewing surfaces of the back teeth where decay often starts.</li>
                                <li>If you play sports, be sure to ask your dentist about special mouthguards that are designed to protect your smile.</li>
                            </ul>

                            <p>If it’s been six months since your last dental checkup, then it’s time to contact our practice and schedule your next appointment!</p>
                            <div class="hr"><hr></div>
                            <p><a href="http://media.sesamehost.com/docs/brushing-and-flossing-dental.pdf">Download printable instructions for brushing and flossing.</a></p>
                            <div class="hr"><hr></div>

                            <h2 id="brushing">Brushing instructions</h2>

                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/brushing_1.gif" class="left border" alt="brushing diagram">
                            <h3>Brushing: Step 1</h3>
                            <p class="cf">Place your toothbrush at a 45-degree angle to your gum.</p>

                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/brushing_2.gif" class="left border" alt="brushing diagram">
                            <h3>Brushing: Step 2</h3>
                            <p class="cf">Brush gently in a circular motion.</p>

                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/brushing_3.gif" class="left border" alt="brushing diagram">
                            <h3>Brushing: Step 3</h3>
                            <p class="cf">Brush the outer, inner, and chewing surfaces of each tooth.</p>

                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/brushing_4.gif" class="left border" alt="brushing diagram">
                            <h3>Brushing: Step 4</h3>
                            <p class="cf">Use the tip of your brush for the inner surface of your front teeth.</p>


                            <div class="hr"><hr></div>

                            <h3 id="flossing">Flossing instructions</h3>

                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/flossing_1.gif" class="left border" alt="flossing diagram">
                            <h3>Flossing: Step 1</h3>
                            <p class="cf">Wind about 18 inches of floss around your fingers as shown. Most of it should be wrapped around one finger, and as the floss is used, the other finger takes it up.</p>


                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/flossing_2.gif" class="left border" alt="flossing diagram">
                            <h3>Flossing: Step 2</h3>
                            <p class="cf">Use your thumbs and forefingers to guide about one inch of floss between your teeth.</p>


                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/flossing_3.gif" class="left border" alt="flossing diagram">
                            <h3>Flossing: Step 3</h3>
                            <p class="cf">Holding the floss tightly, gently saw it between your teeth. Then curve the floss into a C-shape against one tooth and gently slide it beneath your gums.</p>


                            <img src="http://media.sesamehost.com/images/brushing-and-flossing-dental/flossing_4.gif" class="left border" alt="flossing diagram">
                            <h3>Flossing: Step 4</h3>
                            <p>Slide the floss up and down, repeating for each tooth.</p>


                            <div style="clear: both;"></div>
                    </div>


                </div>

            </div>


        </div>
        <!--General Dentistry Preventive Care////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry TMJ/TMD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Tmj" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo19">
                        <ul id="menu-seo19" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">TMJ/TMD</h2>
                        <img src="img/web-design/tmj-tmd.jpg" width="80%" height="250" alt="stock photo of a mature woman" class="auto">





                            <h2>Temporomandibular Disorder (TMD)</h2>

                            <p>Millions of Americans suffer from chronic facial and neck pain as well as recurring headaches. In some cases, this pain is due to Temporomandibular Disorder, or TMD.</p>

                            <p>Your temporomandibular joints (TMJ) connect your lower jawbone to your skull. These joints get a lot of use throughout the day as you speak, chew,
                                swallow, and yawn. Pain in and around these joints can be unpleasant and may even restrict movement.</p>

                            <h2>Symptoms of TMD include:</h2>

                            <ul>
                                <li>Pain in the jaw area</li>
                                <li>Pain, ringing, or stuffiness in the ears</li>
                                <li>Frequent headaches or neck aches</li>
                                <li>Clicking or popping sound when the jaw moves</li>
                                <li>Swelling on the sides of the face</li>
                                <li>Muscle spasms in the jaw area</li>
                                <li>A change in the alignment of top and bottom teeth</li>
                                <li>Locked jaw or limited opening of the mouth</li>
                            </ul>

                            <p>Should you notice any of these symptoms, let your doctor know. Your dentist can help indicate the presence of TMD and create an effective treatment just for you.</p>

                            <p>There are a few simple steps you can take at home or work to prevent TMD from becoming more severe or from even occurring at all:</p>
                            <ul>
                                <li>Relax your face — remember the rule: “Lips together, teeth apart.”</li>
                                <li>Avoid grinding your teeth</li>
                                <li>Avoid constant gum chewing</li>
                                <li>Don’t cradle the phone receiver between your head and shoulder — either use a headset or hold the receiver to your ear with your hand </li>
                                <li>Chew food evenly on both sides of your mouth</li>
                                <li>Do not sit with your chin resting on your hand</li>
                                <li>Practice good posture — keep your head up, back straight, and shoulders squared</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--General Dentistry TMJ/TMD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry Emergency Dental Care////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Emergency" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo20">
                        <ul id="menu-seo20" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Emergency Dental Care</h2>
                        <img src="img/web-design/emergency-dental-care.jpg" width="80%" height="250" alt="stock photo of a mom and son" class="auto">





                            <p>If you experience a dental emergency, be sure to call our practice as soon as possible. If you need immediate attention after hours, call our
                                emergency phone number, and our on-call staff member will help you. In an extreme emergency, please visit a hospital emergency room.</p>

                            <p>We are here to help you at any time, on any day. When your dental health is at risk, we’ll do everything we can to make sure you’re treated as soon as possible.
                                While dental emergencies are rare, they can happen, and it’s important to know how to take care of your teeth no matter what. Common dental emergencies include:</p>

                            <ul>
                                <li>Severe toothache</li>
                                <li>Broken or cracked tooth/teeth</li>
                                <li>Permanent tooth knocked out</li>
                                <li>Object caught between teeth</li>
                            </ul>








                    </div>


                </div>

            </div>


        </div>






        <!--General Dentistry Emergency Dental Care///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--General Dentistry FAQs///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Faq" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo21">
                        <ul id="menu-seo21" class="naziv">
                            <li><a href="#comonprocedure" data-transition="<?php echo $transitionefect ?>">Common Procedures</a></li>
                            <li><a href="#cosmeticDentistry" data-transition="<?php echo $transitionefect ?>">Cosmetic Dentistry</a></li>
                            <li><a href="#gumdisiase" data-transition="<?php echo $transitionefect ?>">Gum Disease</a></li>
                            <li><a href="#overalHealth" data-transition="<?php echo $transitionefect ?>">Gum Disease and Overall Health</a></li>
                            <li><a href="#PeriodontalTreatments" data-transition="<?php echo $transitionefect ?>">Periodontal Treatments</a></li>
                            <li><a href="#Pediatric" data-transition="<?php echo $transitionefect ?>">Pediatric Dentistry</a></li>
                            <li><a href="#Preventiv" data-transition="<?php echo $transitionefect ?>">Preventive Care</a></li>
                            <li><a href="#Tmj" data-transition="<?php echo $transitionefect ?>">TMJ/TMD</a></li>
                            <li><a href="#Emergency" data-transition="<?php echo $transitionefect ?>">Emergency Dental Care</a></li>
                            <li><a href="#Faq" data-transition="<?php echo $transitionefect ?>">FAQs</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">FAQs</h2>
                        <img src="img/web-design/faqs.jpg" width="80%" height="250" alt="photo of smiling mother and daughter" class="auto">





                            <h2>Why is visiting the dentist so important?</h2>

                            <p>Visiting the dentist regularly not only will  help keep your teeth and mouth healthy but will also help keep the rest of your body healthy.
                                Dental care is important because it:</p>

                            <ul>
                                <li>Helps prevent tooth decay</li>
                                <li>Protects against periodontal (gum) disease, which can lead to tooth and bone loss</li>
                                <li>Prevents bad breath; brushing, flossing, and seeing the dentist regularly will help reduce the amount of bad breath-causing bacteria in your mouth</li>
                                <li>Gives you a more attractive smile and increases your self-confidence</li>
                                <li>Helps keep teeth looking bright by preventing them from becoming stained by food, drinks, and tobacco</li>
                                <li>Strengthens your teeth so  you can enjoy healthy, beautiful smiles for the rest of your life!</li>
                            </ul>

                            <h2>My teeth feel fine — do I still need to see a dentist?</h2>

                            <p>Your teeth may feel fine, but it’s still important to see the dentist regularly because problems can exist without your knowing. Your smile’s appearance
                                is important, and your dentist can help keep it healthy and looking beautiful. With so many advances in dentistry, you no longer have to settle for stained,
                                chipped, missing, or misshapen teeth. Today’s dentists offer many treatment choices that can help you smile with confidence, including:</p>

                            <ul>
                                <li>Professional teeth whitening</li>
                                <li>Fillings that mimic the appearance of natural teeth</li>
                                <li>Tooth replacement and full smile makeovers</li>
                            </ul>

                            <h2>What should I look for when choosing the right dentist for me?</h2>

                            <p>Choosing a dentist who “clicks” with you and your family is important, and you may wish to consider several dentists before making your final decision.
                                During your first visit, you should be able to determine if the dentist is right for you. During your appointment, consider the following:</p>

                            <ul>
                                <li>Is the appointment schedule convenient?</li>
                                <li>Is the office easy to get to and close by?</li>
                                <li>Does the office appear to be clean and orderly?</li>
                                <li>Was your medical and dental history recorded and placed in a permanent file?</li>
                                <li>Does the dentist explain techniques for good oral health?</li>
                                <li>Is information about cost presented to you before treatment is scheduled?</li>
                                <li>Is your dentist a member of the ADA (American Dental Association)?</li>
                            </ul>

                            <h2>How can I take care of my teeth between dental checkups?</h2>

                            <ul>
                                <li>ALWAYS remember to brush your teeth at least twice a day and floss at least once!</li>
                                <li>Make sure to use toothpaste that contains fluoride, and ask your dentist if you need a fluoride rinse. This will help prevent cavities.</li>
                                <li>Avoid foods with a lot of sugar (which increases the amount of bacteria that grows in your mouth, causing more plaque and potential cavities)
                                    and avoid tobacco (which can stain your teeth, cause gum disease, and  lead to oral cancer).</li>
                                <li>Don’t be afraid to brush your tongue! By brushing your tongue, you will remove food particles and reduce the amount of plaque-causing bacteria.
                                    Tongue brushing also helps keep your breath fresh.</li>
                                <li>Be sure to schedule your routine checkup. It is recommended that you visit the dentist every six months.</li>
                            </ul>

                            <h2>At what age should I start taking my child to see the dentist?</h2>

                            <p>The American Academy of Pediatric Dentistry (AAPD) recommends that children first see a dentist as early as six months of age and no
                                later than one year. During this time, your child’s baby teeth will be coming in, and your dentist can examine the health of your
                                child’s first few teeth. After the first visit, be sure to schedule regular checkups every six months.</p>

                            <h2>How often should I see the dentist?</h2>

                            <p>Children, teens, and adults should all see the dentist for a regular checkup at least once every six months.
                                Patients who are at a greater risk for oral cancer or gum disease may be required to see the dentist more than just twice a year.
                                Your dentist will help determine how often you should visit the dentist for regular checkups.</p>

                            <h2>What is a cavity?</h2>

                            <p>A cavity is a small hole that forms inside the tooth and is caused by tooth decay. Cavities are formed when plaque build-up on the outside
                                of the tooth combines with sugars and starches in the food you eat. This can produce an acid that can eat away the enamel on your tooth.
                                If a cavity is left untreated, it can lead to more serious oral health problems. Cavities can be prevented by remembering to brush your
                                teeth at least twice a day and floss between teeth at least once.</p>

                            <h2>What is a filling?</h2>

                            <p>A filling is a synthetic material that your dentist uses to fill a cavity after all the tooth decay has been removed.
                                Fillings do not generally hurt because your dentist will numb your mouth with an anesthetic. Fillings are made from a variety of different materials,
                                including composites, gold, or ceramic. If you need a filling, be sure to talk to your doctor about what type is best for you and your teeth.</p>

                            <h2>How often should I brush my teeth?</h2>

                            <p>According to your dentist and the American Dental Association, you should be brushing your teeth at least twice a day.
                                Brushing keeps your teeth, gums, and mouth clean and healthy by removing bacteria that causes plaque. It is also recommended
                                that when you brush your teeth, you use a soft-bristle toothbrush and a toothpaste that contains fluoride. You should spend at least
                                a minute on the top teeth and a minute on the bottom, and remember to brush your tongue; it will help keep your breath smelling fresh!</p>

                            <h2>When should I change my toothbrush?</h2>

                            <p>Your toothbrush will eventually wear out, especially if you are brushing your teeth twice a day for two to three minutes each time.
                                Your dentist recommends that adults and children should change their toothbrush every three months. If you are using an electric
                                toothbrush, be sure to read the directions, because you may not need to change toothbrush heads as frequently. Patients with gum disease are encouraged to change their toothbrush every four to six weeks in order to keep bacteria from spreading. After brushing, rinse your toothbrush with hot water to kill germs and keep the bristles clean. If you’ve been sick, be sure to change your toothbrush as soon as possible.</p>

                            <h2>What is gum disease?</h2>

                            <p>Also known as periodontal disease, gum disease is mostly caused by plaque and bacteria buildup that is not treated in its early stage.
                                Other causes of periodontal disease include tobacco use, teeth grinding, some medications, and genetics. Gingivitis is the beginning
                                stage of gum disease. If detected, it is treatable. Gingivitis left untreated may turn into gum disease.</p>
                            <p>Advanced gum disease will lead to tooth and bone loss, and is a permanent condition. Brushing your teeth regularly and visiting the
                                dentist every six months will help prevent gingivitis and more severe cases of periodontal disease. Common signs of gum disease are:</p>
                            <ul>
                                <li>Red, irritated, bleeding, or swollen gums</li>
                                <li>Chronic bad breath</li>
                                <li>Loose teeth, or loss of teeth</li>
                                <li>Extreme tooth sensitivity</li>
                                <li>Receding gum line</li>
                                <li>Abscessed teeth</li>
                            </ul>

                            <h2>If I have braces, do I still need dental checkups every six months?</h2>

                            <p>Yes! In fact, it’s even more important for patients receiving orthodontic treatment to visit their dentist regularly. With braces,
                                food may be caught in places  your toothbrush can’t reach. This causes bacteria to build up and can lead to cavities, gingivitis, and gum disease.
                                Your dentist will work closely with your orthodontist to make sure your teeth stay clean and healthy while wearing braces.</p>

                            <h2>How do I schedule my next checkup?</h2>

                            <p>Simply call our practice! Our front desk staff will be happy to help schedule your next dental checkup at your convenience.
                                If you are a new patient, please let us know, and we will provide you with all the information you need for your first dental visit.</p>






                    </div>


                </div>

            </div>


        </div>
        <!--General Dentistry FAQs///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- SERVICE Cerec///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="cerec" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo22">
                        <ul id="menu-seo22" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">CEREC</h2>
                        <img src="img/web-design/cerec.jpg" width="100%" height="250" alt="photo of happy family" class="auto">



                            <p>We are your local CEREC dentist for single-visit tooth restorations. Why go to the dentist a second time if you don’t have to?</p>

                            <h2>What is CEREC?</h2>

                            <p>CEREC is a technology for restoring damaged teeth. This restoration can be completed in a single visit to the doctor’s office.
                                It makes your teeth stronger and more beautiful all while keeping your teeth looking natural. The restoration is metal-free and the high-grade ceramic
                                material is compatible with the natural tissue found in your mouth.</p>

                            <h2>The CEREC Process</h2>

                            <p>During your appointment, you and your doctor will discuss the details of the procedure and your doctor will answer any questions you may have.
                                Your doctor will then apply a thin layer of reflective powder onto your tooth and will use a special 3D imaging camera to take a photo of your tooth.</p>
                            <p>Using CEREC’s proprietary software, your restoration will be designed according to your tooth’s appropriate form and function. Then,
                                CEREC will use a diamond burs to create your restoration out of a piece of ceramic. Finally, the ceramic restoration is bonded to your
                                tooth using state-of-the-art adhesive dentistry.</p>
                            <h2>Why Choose CEREC?</h2>

                            <p>There are many advantages of CEREC over traditional crown technology.</p>

                            <p><strong>Time:</strong> CEREC crowns are made in one visit, saving you considerable time away from your job and family.</p>

                            <p><strong>Comfort:</strong> With CEREC, there is no need for a temporary crown, which eliminates significant potential discomfort.</p>

                            <p><strong>Aesthetics:</strong> The strong, tooth-colored ceramic materials of CEREC restore your teeth to their natural strength, beauty, and function and closely match the composition of natural tooth structure. </p>

                            <p><strong>Strength:</strong> Milled ceramic is stronger than the traditional method of layering and pressing, so your smile will stay beautiful for years! </p>

                            <p><strong>Fillings:</strong> CEREC material and technology can also be used for fillings. Since they are made out of porcelain, they are more durable than white composite fillings. </p>



                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE Cerec///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE DIAGNOdent///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="diagno" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo23">
                        <ul id="menu-seo23" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">DIAGNOdent</h2>
                        <img src="img/web-design/diagnodent.jpg" width="100%" height="250" alt="photo of happy family" class="auto">



                            <h2>DIAGNOdent laser cavity screening</h2>

                            <p>DIAGNOdent is a revolutionary new way for your dentist to find even the smallest areas of tooth decay and cavities. By using the advanced DIAGNOdent technology,
                                we are able to treat small cavities and areas of tooth decay before they become larger issues that require multiple procedures. DIAGNOdent is a quick,
                                comfortable process that helps you and your doctor keep your smile healthy and happy for a lifetime.</p>

                            <h2>How does DIAGNOdent work?</h2>

                            <p>DIAGNOdent uses a precise laser scanning system to scan over all your teeth while sending out an audio signal and registering a digital read-out.
                                By measuring the fluorescence within each tooth’s structure, your dentist can identify where there may be cavities developing in the small spaces between,
                                on, and around your teeth. </p>

                            <p><img src="img/web-design/diagnodent-laser.jpg" alt="DIAGNOdent laser" class="right">DIAGNOdent is comfortable and takes only a few short minutes to scan
                                your entire mouth for cavities and decay. Detecting tooth decay as early as possible helps eliminate the number of costly treatments you may need down
                                the line and helps treat small problems before they become serious dental cases.</p>

                            <h2>Not all cavities are noticeable without the help of the advanced DIAGNOdent laser screening</h2>

                            <p>Most tooth decay begins in the tiny cracks and grooves of your tooth’s surface. By the time the cavities are noticed, it’s often because there is a much larger problem,
                                and the cavity itself was never seen or felt by the patient. </p>

                            <p><img src="img/web-design/diagnodent-tool.jpg" alt="DIAGNOdent tool" class="right">With the widespread use of fluoride, many of these cavities never make it to the tooth’s surface,
                                and instead begin eating away at the tooth from the inside out. The DIAGNOdent laser helps locate these small areas of decay. </p>

                            <p>If you would like to be screened for possible tooth decay and cavities, please contact our practice and schedule an appointment. Help your teeth stay healthy!</p>






                    </div>


                </div>

            </div>


        </div>
        <!--SERVICE DIAGNOdent///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVIC Invisalign///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="invisalign" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo24">
                        <ul id="menu-seo24" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Invisalign</h2>



                            <div><img src="http://media.sesamehost.com/images/invisalign-pro-package/invisalign-logo_2010.gif" width="100%" height="250" alt="photo of happy family" class="auto"></div>
                            <div><img src="http://media.sesamehost.com/images/invisalign-pro-package/invisalign.jpg" width="100%" height="250" alt="photo of happy family" class="auto"></div>

                            <h2>We are a certified Invisalign provider</h2>
                            <p>Consider Invisalign to get the beautiful, straight teeth you’ve always wanted - without braces. A consultation with our office can determine if Invisalign is right for you.</p>
                            <h2>What is it?</h2>
                            <p>Invisalign uses a series of invisible, removable, and comfortable aligners that no one can tell you’re wearing. So you can smile more during treatment as well as after.
                                Invisalign is made with 3D computer imaging technology and has been proven effective. More than 70% of orthodontists in the US and Canada are certified to treat with Invisalign.</p>
                            <h2>Why would I want it?</h2>
                            <p>Not only are the aligners invisible, they are removable, so you can eat and drink whatever you like while in treatment. Plus, brushing and flossing are no problem.
                                The aligners are also comfortable, with no metal to cause mouth abrasions during treatment.</p>
                            <p>No metal and wires usually means you spend less time in your doctor’s office getting adjustments. Invisalign also allows you to view your own virtual treatment plan
                                when you start so you can see how your straight teeth will look when your treatment is complete.</p>
                            <h2>How does it work?</h2>
                            <p>You wear each set of aligners for about two weeks, removing them only to eat, drink, brush, and floss. As you replace each aligner with the next in the series,
                                your teeth will move - little by little, week by week - until they have straightened to the final position your doctor has prescribed.</p>
                            <p>You’ll visit our office about once every six weeks to ensure your treatment is progressing as planned. Total treatment time takes nine to 15 months and the number
                                of aligners is between 18 and 30, but both will vary from case to case.</p>
                            <p> 2000-2012 Align Technology, Inc. All rights reserved.</p>




                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE General Invisalign///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--General Invisalign Teen   //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Invisalignt" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo25">
                        <ul id="menu-seo25" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Invisalign Teen</h2>



                            <div><img src="http://media.sesamehost.com/images/invisalign-teen/invisalign-teen-logo.gif"  alt="invisalign teen logo" class="img-right border invisalign-teen-logo"></div>
                            <img src="http://media.sesamehost.com/images/invisalign-teen/invisalign-teen.jpg"width="100%" height="250" alt="photo of smiling teens" class="img-right border">
                            <h2>We are a certified Invisalign Teen provider</h2>
                            <p><strong>Bummed out about having braces?<br>
                                </strong>Invisalign Teen gives you a whole new way to wear braces for a “clearly” amazing smile!</p>

                            <p><strong>I have enough to worry about …</strong><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;… now I need braces too?</p>
                            <p>The team has a game this Friday night, homecoming is in a month, and what about my yearbook pictures?! Don’t stress: with Invisalign Teen you won’t need to turn down any dates, wear a paper bag over your head, or hide out in your room for two years! Invisalign Teen aligners are a perfect fit for your lifestyle, because aligners are:</p>
                            <div id="invisalign-sidebar">
                                <h3>Who is using Invisalign?</h3>
                                <p><img src="http://media.sesamehost.com/images/invisalign-teen/invisalign-katherine-heigl.jpg" alt="thumbnail image of Katherine Heigl" class="thumb"><a href="http://www.youtube.com/watch?v=97BllPRVY6c" title="Link to YouTube.com video of Katherine Heigl talking about Invisalign">Listen to Katherine Heigl talk about using Invisalign to straighten her star-studded smile.</a></p>
                                <p class="clear"><img src="http://media.sesamehost.com/images/invisalign-teen/invisalign-marlena.jpg" alt="thumbnail image of teen with invisalign braces" class="thumb"><a href="http://www.facebook.com/video/video.php?v=50699557308" title="Link to Facebook.com video of Invisalign Teen patient">Answers to your questions from an actual Invisalign patient just like you.</a></p>
                            </div>

                            <ul>
                                <li>Clear</li>
                                <li>Removable</li>
                                <li>Super comfortable</li>
                                <li>Customized just for you</li>
                            </ul>
                            <h2>Pizza, popcorn … no problem!</h2>
                            <p>You’ve probably heard from friends that with braces you won’t be able to eat anything. With Invisalign Teen you can eat whatever you want! </p>
                            <p>Unlike traditional metal braces, your Invisalign Teen aligners are removable, which means you can go ahead and eat all the things you love without
                                worrying about breaking a bracket or losing a rubber band. Cheers!</p>
                            <h2>It’s your life - keep it that way!</h2>
                            <p>Invisalign aligners are really comfortable and very durable. They fit in with any of your extracurricular activities. So whether you’re swimming the 50-meter freestyle,
                                throwing a football out on the field, or playing the clarinet with the school band, you don’t have to worry about your braces getting in the way!</p>
                            <h2>See what other teens are saying:</h2>
                            <p>Invisalign is on <a href="http://www.facebook.com/pages/Invisalign/12349989021" title="Link to Invisalign Facebook profile"><strong>Facebook</strong></a> and <a href="https://twitter.com/invisalign" title="Link to Invisalign Twitter profile"><strong>Twitter</strong></a>! Connect with other teens to share your Invisalign experience and find out what other people have to say about their treatment.</p>
                            <p><a href="http://www.facebook.com/pages/Invisalign/12349989021" title="Link to Invisalign Facebook profile"><img src="http://media.sesamehost.com/images/invisalign-teen/logo-facebook.jpg" alt="facebook logo" class="left"></a>
                                <a href="https://twitter.com/invisalign" title="Link to Invisalign Twitter profile"><img src="http://media.sesamehost.com/images/invisalign-teen/logo-twitter.jpg" alt="twitter logo" class="left" style="clear: right;"></a></p>
                            <p class="footnote"> 2000-2012 Align Technology, Inc. All rights reserved.</p>








                    </div>
                </div>
            </div>
        </div>

        <!--SERVICE Invisalign Teen   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--SERVICE Dental Implants   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Dental" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo26">
                        <ul id="menu-seo26" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Dental Implants</h2>
                        <img src="img/web-design/dental-implants.jpg" width="100%" height="250" alt="smiling woman" class="auto">




                            <p>People are living longer than ever, and while regular brushing,   flossing, and checkups allow many of us to maintain our natural smiles
                                for a lifetime, sometimes our teeth just can’t keep up. If you’ve lost a   tooth (or a few teeth) due to injury or disease, dental implants
                                can   rejuvenate both your smile and your oral health.</p>
                            <p>An implant is a synthetic tooth root in the shape of a post that is   surgically placed into the jawbone. The “root” is usually made of
                                titanium, the same material used in many replacement hips and knees. It’s  metal that is well suited to pairing with human bone. A replacement
                                tooth is fixed to the post. The tooth can be either permanently   attached or removable. Permanent teeth are more stable and feel more
                                like natural teeth.</p>
                            <p>The ideal candidate for implants is a non-smoker who has good oral   health, including a sufficient amount of bone in the jaw and healthy
                                gums with no sign of gum disease. </p>
                            <h2>Single or multiple implants</h2>
                            <p><img src="img/web-design/implant-model.jpg" alt="implants" class="right">Implants are versatile. If you are missing only one tooth, one
                                implant plus one replacement tooth will do the trick. If you are missing   several teeth in a row, a few strategically placed implants can
                                support   a permanent bridge (a set of replacement teeth). Similarly, if you have   lost all of your teeth, a full bridge or full denture
                                can be   permanently fixed in your mouth with a strategic number of implants. </p>
                            <h2>Advantages over dentures or bridges</h2>
                            <p>Conventional bridges and dentures are not fixed to the bone, and can   therefore be unstable. This can make it difficult to eat or smile with   confidence.
                                Implants not only look more natural, but feel and act more   like normal teeth, with a stronger biting force. And because they don’t
                                directly rely on neighboring teeth for support, implants don’t   compromise the health of your natural teeth. In fact, bridges are only
                                expected to last seven to 10 years, even less with root canals, whereas   implants will typically outlive you.</p>
                            <div><img src="img/web-design/implants-x-ray.jpg" alt="X-ray of an implant in position" class="right"></div>
                            <h2>Post-treatment care</h2>
                            <p>Consider your replacement teeth to be the same as natural teeth. They   require the same daily brushing and flossing, and the same amount of
                                regular checkups. Just like your natural teeth, the better you take care   of your replacements, the longer they will last.</p>
                            <h2>Implant services</h2>
                            <img src="img/web-design/implant-expanded.png" alt="implants hardware" class="right-no-border">
                            <p>Our implant services include:</p>


                                    <p><strong>Sinus lift augmentation</strong> - Often the sinuses will enlarge following loss of the upper   back teeth.
                                        This may preclude placement of dental implants in   the upper back areas  of the mouth since the sinus is an air-filled
                                        space and dental implants need to  be surrounded by solid bone. A sinus   lift augmentation/graft is a surgical  procedure
                                        that returns the sinus   cavity to its original position and  replaces the bone that has been   lost as a result of the enlarged sinus.
                                        This  new bone graft typically   takes nine to 12 months to heal before the dental  implants can be
                                        placed into the grafted bone.</p>


                                    <p><strong>Autogenous bone grafting</strong>  Occasionally, areas where dental implants are ideally to be placed do   not have
                                        sufficient bone quantity to hold the dental   implants. In these  cases, it is often necessary to “borrow” bone from   another area
                                        of  your mouth to graft into the deficient area. Often, the   area of choice is from  the chin or the back of the jaw where your
                                        wisdom teeth used to be.</p>


                                    <p><strong>Implant site development</strong> - When a tooth needs to be removed due to infection, it is not uncommon   to
                                        havelost bone from around the it. In these cases,   various types of bone  grafting can be done at the same time the tooth
                                        is removed to facilitate the  placement of a dental implant at a later   date. </p>


                                    <p><strong>Computer-enhanced treatment planning</strong>  We have special software on our computer that allows us to evaluate
                                        your dental  CT scan in three dimensions for bone quality, bone   quantity, and bone location  for the best possible placement
                                        of your   dental implants. This also allows us to  work closely and smoothly with   your restorative dentist to ensure an ideal
                                        result where your dental   implants are concerned. </p>


                                    <p><strong>Implant maintenance</strong> - Once your dental implant restoration is completed, it is important to   keep the  area clean
                                        and infection-free. Dental implants can accumulate   plaque and tartar  just as teeth can. Whether you have just one tooth
                                        replaced by an implant or  several, a professional cleaning schedule will   be necessary to keep your  implants healthy.
                                        The time interval for   these professional cleanings will be  determined by your individual   needs. </p>






                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE Dental Implants   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE Oral Cancer Screening   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Oral" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo27">
                        <ul id="menu-seo27" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Oral Cancer Screening</h2>
                        <img src="img/web-design/oral-cancer-screening.jpg" width="100%" height="260" alt="stock photo of an adult couple" class="auto">



                            <h2>Dedicated to complete oral health</h2>
                            <p>Our office is not only dedicated to your smile, we’re also dedicated to your overall wellness. We take a holistic approach to your dental care,
                                which includes an oral cancer screening as a part of your regular exam. Like any kind of cancer, oral cancer can be life-threatening if not
                                diagnosed and treated early. You are the most important factor in the early diagnosis of oral cancer through routine screenings at our office.</p>
                            <h3>Signs of trouble</h3>
                            <p>We have the skills and tools to identify early signs and symptoms of oral cancer and pre-cancerous conditions. While these symptoms may be caused by other,
                                less serious problems, it is very important to visit our office to rule out the possibility of oral cancer. The most common symptoms of oral cancer include:</p>

                            <ul>
                                <li>Red or white spots or sores anywhere in the oral cavity</li>
                                <li>A sore that bleeds easily or does not heal</li>
                                <li>A lump, thickening, or rough spot </li>
                                <li>Pain, tenderness, or numbness anywhere in the mouth or on the lips</li>
                                <li>Difficulty chewing, swallowing, speaking, or moving the jaw or tongue</li>
                            </ul>
                            <h3>Screening</h3>
                            <p>Our team is trained in a simple, quick screening that involves an examination of your oral cavity as a whole, not just your teeth,
                                to detect cancerous and pre-cancerous conditions. Besides a visual examination of your mouth, we will also feel the tissue of your mouth
                                and throat to detect any abnormalities. If we find an area of concern, we may perform a simple test, such as a brush test, which collects
                                cells from a suspicious lesion in the mouth to be sent to a laboratory for analysis. If this test comes back atypical or positive, we may recommend a biopsy.</p>
                            <h3>Prevention</h3>
                            <p>Aside from receiving an oral cancer screening during your checkup at our office, there are many things you can do to help prevent oral cancer. </p>
                            <ul>
                                <li>The best way is to avoid all tobacco products and only drink alcohol in moderation. </li>
                                <li>Maintain a healthy, balanced diet.</li>
                                <li>Limit your exposure to the sun and always wear UV-A/B-blocking, sun-protective lotions on your skin as well as your lips.</li>
                                <li>During your next dental appointment, ask your dentist to perform an oral exam. Early detection of oral cancer can improve the chance of successful treatment.</li>
                            </ul>






                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE Oral Cancer Screening   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE Oral Velscope   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Velscope" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo28">
                        <ul id="menu-seo28" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">ViziLite Plus</h2>
                        <img src="img/web-design/velscope.jpg" width="100%" height="260" alt="stock photo of an adult couple" class="auto">



                            <h2>VELscope Oral Cancer Screening System</h2>

                            <p>More than 480,000 new cases of oral and throat cancers are diagnosed each year, and over 35,000 of those cases are right here in
                                the United States. Oral cancer kills one person every hour in the U.S., and without proper detection methods, a person may have
                                oral cancer and not even know it. In almost all cases of oral cancer, early detection plays a major role in a patient's chances of survival.
                                By diagnosing and treating oral cancer early, a patient's five year survival rate is 80-90% greater.</p>

                            <h2>Risk factors for oral cancer include:</h2>

                            <ul>
                                <li>Frequent use of tobacco products (cigarettes, cigars, pipes, chewing tobacco)</li>
                                <li>Excessive consumption of alcohol</li>
                                <li>Genetics (a family history of oral cancer or any type of cancer)</li>
                                <li>Excessive exposure to the sun at a young age</li>
                            </ul>
                            <p>While men above the age of 50 are typically at the most risk for oral cancer, there has been a recent increase in the number of women with
                                oral cancer due to a connection between oral cancer and the human papilloma virus(HPV-16)</p>

                            <h2>How VELscope works</h2>

                            <p>The VELscope screening system consists of a specialized white light source and viewing scope that make it easier for your doctor to look
                                closely at the tissues inside your mouth. Normal tissues will almost glow a bright green color. Abnormal tissue shows up much darker under
                                the special light.</p>

                            <p>An abnormal screening does not always mean that the patient has cancer. If an abnormal screening occurs, your doctor may schedule a second
                                scan later to see if the dark spots disappear, or may choose to perform a gentle, non-invasive brush biopsy to make sure it's not cancer.</p>



                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE Velscope   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE Snoring Prevention   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Snoring" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo29">
                        <ul id="menu-seo29" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Snoring Prevention</h2>
                        <div class="slicica"><img src="img/web-design/snoring-prevention.jpg" width="100%" height="240" alt=""></div>


                            <p>While snoring is a common problem for many people, it can  also be a major sign of other complications that can affect your health.
                                It is  estimated that more than 80 million people in North America snore while sleeping, which not only affects the quality of their sleep,
                                but that of their loved ones, such as spouses, children, and other family members. Luckily, there is a way to treat chronic snoring.</p>
                            <h2>What causes snoring?</h2>
                            <p>Snoring can be the result of several factors. Typically, it is caused by the relaxing of the muscles and soft tissues in the throat  and mouth,
                                which contract the airway. The decrease in space through the air passage makes it harder for each breath to get through, and when it does,
                                it moves over the soft tissues in the mouth and throat, and causes a vibration that results in the snoring sound. Other causes of snoring may include:</p>
                            <ul>
                                <li>Excess body weight</li>
                                <li>Alcohol consumption</li>
                                <li>Certain sleep aides or sedatives</li>
                                <li>Obstructive Sleep Apnea (OSA) </li>
                            </ul>
                            <h2>What is a mandibular  advancement device?</h2>
                            <p>If you snore at night, then a mandibular advancement device  (MAD) may represent a solution and a better night’s sleep! The MAD is a specially designed dental
                                device to be worn at night. It gently keeps the lower jaw, or mandible, in a forward position, increasing the space within the air passage and helping you
                                to breathe better and get a full, quiet night’s sleep.</p>
                            <p>MADs are usually small plastic devices worn in the mouth during sleep to prevent the soft throat tissues from collapsing and obstructing  the airway.
                                They do this by bringing your lower jaw forward and/or lifting your soft palate. Some devices also stop the tongue from falling back over your  windpipe.
                                Your dentist will fit these special appliances to meet your  individual condition.</p>
                            <h2>Is a MAD comfortable?</h2>
                            <p>The answer is simple: YES! A mandibular advancement device is made to be comfortable so you can sleep without even noticing you’re  wearing it.
                                It does not prevent you from breathing with your mouth open and will even eliminate snoring for patients with sinus congestion or allergies.
                                You may experience some slight stiffness of the jaw for the first few mornings  after wearing the device; however, this feeling is only temporary
                                and will go away after you wake up and remove the device. </p>
                            <p>To learn more about a mandibular advancement device, contact our practice and schedule an appointment and consultation. A better night’s sleep starts here!</p>





                    </div>
                </div>
            </div>
        </div>
        <!--SERVICE Snoring Prevention   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE Teeth Whitening   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Teeth" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo30">
                        <ul id="menu-seo30" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div id="content">

                        <h2 class="nenad">Teeth Whitening</h2>
                        <img src="img/web-design/teeth-whitening.jpg" width="100%" height="250" alt="photo of smiling mother and daughter" class="auto">





                            <p>There are many products and techniques available for patients who want to achieve a whiter smile. With so many options available,
                                it can be difficult to choose the method that is right for you. The best way to begin any teeth-whitening regimen is to schedule
                                an appointment and talk to your doctor about the differences between in-office professional whitening and at-home whitening.</p>

                            <h2>In-office teeth whitening</h2>

                            <p>The first professional option is commonly referred to as “in-office” whitening. This procedure is performed in a dental office.
                                An in-office whitening treatment may include the use of a lamp or laser to enhance the effectiveness of the gel by accelerating the peroxide. </p>

                            <p>During an office visit, your dental professional will apply the whitening gel and, depending on the system being used, shine a light source directly
                                onto the teeth. The entire office visit generally takes about 90 minutes with immediate results.</p>

                            <h2>At-home teeth whitening</h2>

                            <h3>Tray bleaching</h3>

                            <p>Tray bleaching is a type of professional whitening that uses custom-made trays and whitening gel available only through your dentist.
                                The whitening gel is placed in custom-fitted trays that fit perfectly over your teeth. As the peroxide in the gel breaks down, hydroxyradicals help whiten stained teeth.</p>
                            <p>Unlike strips, this process whitens all your natural teeth and may contain ingredients intended to provide maximum comfort.
                                At-home professional tray whitening generally takes ten to 14 days, although you may notice results in as little as three to five days.</p>
                            <h3>Paint-on teeth whiteners</h3>

                            <p>There are many over-the-counter teeth whitening options. One type of readily accessible whitening product is commonly referred to as “paint-on” teeth whitener.
                                Paint-on whiteners can be purchased over the counter and are generally less expensive and less effective than whitening strips or professional options.</p>
                            <p>Paint-on teeth whiteners consist of a gel applied to the tooth with a small brush. Paint-on whitening gel hardens into a film that coats the treated tooth
                                and dissolves in the mouth. As with any teeth-whitening regimen, it is wise to consult with a dental professional before treating discolored teeth.</p>
                            <h3>Teeth-whitening strips</h3>

                            <p>Teeth-whitening strips are thin, flexible plastic (polyethylene) strips with a film of hydrogen peroxide bleaching on one side. Whitening strip kits come with two types
                                of strips: strips for the upper teeth and strips for the lower teeth. The bleaching agent is applied by placing the strips across your teeth and gently pressing them into
                                place to ensure contact with all your teeth. Teeth-whitening strips are typically worn for 30 minutes a day, twice a day. The duration of treatment will vary.</p>

                            <h3>Teeth-whitening toothpaste and mouthwash</h3>

                            <p>The least expensive options are whitening toothpastes and mouthwashes. Designed to have “whitening” capabilities, toothpastes and mouthwashes work to remove surface
                                stains using mild abrasives. However, unlike bleaching materials used in professional whitening procedures, these products do not lighten the actual color or shade of the tooth.
                                Whitening toothpastes affect surface stains and will mildly lighten your teeth.</p>

                            <p>If you would like to learn more about teeth whitening.</p>




                    </div>
                </div>

            </div>


        </div>
        <!--SERVICE Teeth Whitening   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!--SERVICE Opalescence   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Opalescence" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo31">
                        <ul id="menu-seo31" class="naziv">
                            <li><a href="#cerec" data-transition="<?php echo $transitionefect ?>">CEREC</a></li>
                            <li><a href="#diagno" data-transition="<?php echo $transitionefect ?>">DIAGNOdent</a></li>
                            <li><a href="#invisalign" data-transition="<?php echo $transitionefect ?>">Invisalign</a></li>
                            <li><a href="#Invisalignt" data-transition="<?php echo $transitionefect ?>">Invisalign Teen</a></li>
                            <li><a href="#Dental" data-transition="<?php echo $transitionefect ?>">Dental Implants</a></li>
                            <li><a href="#Oral" data-transition="<?php echo $transitionefect ?>">Oral Cancer Screening</a></li>
                            <li><a href="#Velscope" data-transition="<?php echo $transitionefect ?>">Velscope</a></li>
                            <li><a href="#Snoring" data-transition="<?php echo $transitionefect ?>">Snoring Prevention</a></li>
                            <li><a href="#Teeth" data-transition="<?php echo $transitionefect ?>">Teeth Whitening</a></li>
                            <li><a href="#Opalescence" data-transition="<?php echo $transitionefect ?>">Opalescence</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div>

                        <h2 class="nenad">Opalescence</h2>
                        <img src="img/web-design/opalescence.jpg" width="100%" height="250" alt="stock photo of an adult couple" class="auto">





                            <p>Many factors, including dietary habits (drinking coffee, tea, soda, and red wine) and certain medications, affect the whiteness of your smile.
                                Tooth whitening is an affordable and effective way to combat common causes of tooth discoloration while boosting your self-confidence and improving your appearance. </p>

                            <p>Opalescence offers a wide range of tooth whitening products designed to brighten your smile. With custom designed take home, on-the-go, and in-office options,
                                Opalescence Tooth Whitening Systems accommodate all lifestyles and budgets. </p>

                            <p>Prescription-strength Opalescence Tooth Whitening Systems are stronger and more effective than over-the-counter teeth whitening products, and are only available
                                through your dentist.</p>

                            <h2><em>Get more confidence in your smile with the Opalescence Tooth Whitening System</em></h2>

                            <h2>Safe </h2>

                            <p>Opalescence Take Home Whitening Gels are only available through your dentist. While using the Opalescence Tooth Whitening System, your dentist
                                will supervise your treatment from initial consultation through completion. The special whitening gel will not affect your gums, and in many cases can
                                help improve your oral health by strengthening tooth enamel, decreasing sensitivity, and offering increased cavity prevention. </p>

                            <h2>Effective </h2>

                            <p>Powerful, prescription-strength Opalescence Take Home Whitening Gels are available in varying strengths depending on your dental needs.
                                Opalescence Take Home Whitening Gels can provide results after just one night, although results may vary and can take up to a week before you experience noticeable changes. </p>

                            <h2>Customized </h2>

                            <p>Opalescence Take Home Whitening Gels are delivered through customized bleaching trays designed to fit your unique smile. Your dentist will create your personal
                                trays from an alginate impression of your mouth; this customization is part of what makes Opalescence Take Home Whitening Gels so effective.</p>

                            <p>Further customize your Opalescence Take Home Whitening Gel experience by choosing from the five different treatment options: Opalescence, Opalescence Treswhite Supreme,
                                Opalescence BOOST, and Opalescence after-care toothpastes, toothbrushes, and OpalPix. Talk with your dentist about what options are available to you. </p>

                            <p>Please contact our practice to schedule a consultation, or visit <a href="http://www.opalescence.com">www.opalescence.com</a>
                                to learn more about the Opalescence Tooth Whitening System.</p>



                            <p> The single most important way to reduce the risk of developing oral   cancer is to reduce the risk factors. Stop using tobacco and evaluate
                                your alcohol consumption. If you use tobacco, drink heavily, or are over   the age of 40, ask your dentist to evaluate your oral health with a
                                visual exam and the ViziLite Plus oral cancer screening system.</p>




                    </div>


                </div>

            </div>


        </div>

        <!--SERVICE Opalescence   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="seta" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo32">
                        <ul id="menu-seo32" class="naziv">
                            <li><a href="#drPavicic" data-transition="<?php echo $transitionefect ?>">Meat Dr. Pavicic</a></li>
                            <li><a href="#drGot" data-transition="<?php echo $transitionefect ?>">Meat Dr. Got</a></li>
                            <li><a href="#meatourteam" data-transition="<?php echo $transitionefect ?>">Meat Our Team</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>











                </div>

            </div>


        </div>
















<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
