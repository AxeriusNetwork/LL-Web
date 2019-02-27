	<nav class="navbar navbar-expand navbar-light white darken-2 z-depth-0 d-flex justify-content-center">
		<div class="container col-sm-12">
			<ul class="navbar-nav mx-auto">
				<div href="mailto:enquiries@landscape-lifestyles.co.uk" data-placement="bottom" data-toggle="tooltip" title="Contact Us">
					<a class="m-1 btn btn-sm btn-light-green">
					    <i class="fa fa-envelope"></i> Contact Us
					</a>
				</div>
				<div data-placement="bottom" data-toggle="tooltip" title="Book a Survey">
					<a class="m-1 btn btn-sm btn-light-green" data-toggle="modal" data-target="#left-survey">
					    <i class="fa fa-book"></i> Book a Survey
					</a>
				</div>
			</ul>
		</div>
	</nav>

	<nav class="navbar navbar-expand navbar-light light-green darken-2 z-depth-0 d-flex justify-content-center">
		<div class="container col-sm-12">
			<ul class="navbar-nav mx-auto">
				<div href="" data-placement="bottom" data-toggle="tooltip" title="Write us a Review">
					<a class="m-1 btn btn-sm btn-danger">
					    <i class="fa fa-google"></i> Write us a Review
					</a>
				</div>
				<div href="" data-placement="bottom" data-toggle="tooltip" title="Share via Facebook">
					<a class="m-1 btn btn-sm btn-primary">
					    <i class="fa fa-facebook"></i> Share via Facebook
					</a>
				</div>
				<div href="" data-placement="bottom" data-toggle="tooltip" title="Share via Twitter">
					<a class="m-1 btn btn-sm btn-info">
					    <i class="fa fa-twitter"></i> Share via Twitter
					</a>
				</div>
			</ul>
		</div>
	</nav>

	<nav class="navbar navbar-expand navbar-light blue-grey lighten-4 z-depth-0 d-flex justify-content-center">
		        <div class="text-center">
		            <h5 class="title"><img src="img/LL-LogoWeb.png"></h5>
		            <strong>
						<h6 class="black-text">Landscape Lifestyles is a family run business.</h6>
						<h6 class="black-text">We take pride in all our jobs providing a quality bespoke service.</h6>
						<h6 class="black-text">We carry out a variety of landscaping services to enchance your lifestyle.</h6>
					</strong>
		        </div>
		    </div>
		</div>
	</nav>

	<nav class="navbar navbar-expand navbar-light light-green darken-2 z-depth-0 d-flex justify-content-center">
	    <div class="light-green darken-2">
	        <div class="text-center">
				<div class="">
					Copyright &copy; <strong>2016-2019</strong> <a class="white-text" href="https://www.landscape-lifestyles.co.uk">LANDSCAPE LIFESTYLES LIMITED</a> - All Rights Reserved.
				</div>
				<div class="">
					VAT Number: <a class="white-text" href="https://beta.companieshouse.gov.uk/company/09276951/">252295994</a> | Company Number: <a class="white-text" href="https://beta.companieshouse.gov.uk/company/09276951">09276951</a>
				</div>
	        </div>
	    </div>
	</nav>

	<!-- Full Height Modal Left Info Demo-->
    <div class="modal fade left" id="left-survey" tabindex="-1" role="dialog" aria-labelledby="left-survey" aria-hidden="true"
        data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-left modal-notify modal-light-green" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                	<div class="pull-left">
	                    <h3>Book a Survey!</h3>
	                </div>
	                <div class="pull-right">
	                    <a type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true" class="black-text">CLOSE &times;</span>
	                    </a>
	                </div>
                </div>

                <!--Body-->
                <div class="modal-body">
	                <form method="post" id="survey-form" name="survey-form" action="assets/mail/book-survey.php">
	                    <label for="service-name">
	                    	Name <strong>*</strong>
	                    </label>
	                    <input placeholder="Name" type="text" name="service-name" id="service-name">
	                    <br><br>
	          			<label for="service-email">
	                    	Email Address <strong>*</strong>
	                 	</label>
	          			<input placeholder="Email" type="email" name="service-email" id="service-email">
						<br><br>
	                    <label for="service-phone">
	                    	Phone Number <strong>*</strong>
	                 	</label>
	                    <input placeholder="Phone" type="text" name="service-phone" id="service-phone">
						<br><br>
	                  	<label for="service-address">
	                    	Home Address <strong>*</strong>
	                    </label>
	                 	<input placeholder="Address" type="text" name="service-address" id="service-address">
						<br><br>
	                 	<label for="service-date">
	                    	Preferred day to visit <strong>*</strong>
	                	</label>
	                    <input placeholder="Date" type="text" name="service-date" id="service-date" class="form-control datepicker">
						<br><br>
						<label for="service-time">
	                    	Preferred time to visit<strong>*</strong>
	             		</label>
	                    <input placeholder="Time" type="text" name="service-time" id="service-time" class="form-control timepicker">
						<br><br>
	                    <select name="service-type" id="service-type" class="mdb-select">
	                    	<option value="" disabled selected>Choose your service</option>
		                    <option value="Fencing">Fencing</option>
		                    <option value="Paving">Paving</option>
		                    <option value="Planters">Planters</option>
		                    <option value="Driveways">Driveways</option>
	                    </select>
	                    <br><br>
	                    <a type="submit" id="service-submit" name="service-submit" class="btn btn-light-green btn-lg btn-block">Book Your Survey</a>
	               </form>
                </div>
                <!--Footer-->
            <!--/.Content-->
        </div>
    </div>
    <!-- Full Height Modal Right Info Demo-->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
		$('[data-toggle="tooltip"]').tooltip()

	    // Material Select Initialization
		$('.mdb-select').material_select();

		// Data Picker Initialization
		$('.datepicker').pickadate();

		// Time Picker Initialization
	    $('input.timepicker').pickatime({});
	</script>

	<script>
	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0; // For Safari
	    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
	</script>
	<script>
	SurveyForm = function(){
		$('.survey-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){
		
			var action = $(this).attr('action');
		
			$("#service-message").slideUp(750,function() {
			$('#service-message').hide();
		
			$('#service-submit')
				.after('<img src="images/assets/ajax-loader.gif" class="loader" />')
				.attr('disabled','disabled');
		
			$.post(action, {
				service-name: $('#service-name').val(),
				service-email: $('#service-email').val(),
				service-phone: $('#service-phone').val(),
				service-address: $('#service-address').val(),
				service-date: $('#service-date').val(),
				service-time: $('#service-time').val(),
				service-type: $('#service-type').val(),
				service-comments: $('#service-comments').val()
			},
				function(data){
					document.getElementById('service-message').innerHTML = data;
					$('#service-message').slideDown('slow');
					$('.survey-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#service-submit').removeAttr('disabled');
					if(data.match('success') !== null) $('.survey-form').slideUp('slow');
		
				}
			);
			});
			return false;
		});
		});
	}
    </script>
</body>
</html>