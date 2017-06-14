
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
			 <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
		<body>
			<div class="jumbotron">
				<div class="container-fluid">

		
      <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Arredamenti interni</a></li>
                <li><a href="#">Arredamenti esterni</a></li>
                <li><a href="#">Cucine</a></li>
                <li><a href="#">Pub</a></li>
                <li><a href="#">Antiquariato</a></li>
                <li><a href="#contact">Contact us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>


                


    <!-- form begin-->
    <form>
        <div class="container-fluid"></div>
        <div class="row kiara" id="contact">
            <div class="col-lg-12 text-center">
                <h1>Contact us</h1>
                <h3>Tell us if you are interested</h3>
            </div>
        </div>
        <form novalidate="novalidate" class="bv-form">
            <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;" disabled="disabled"></button>
            <div class="row row-form">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                        <div class="form-group has-error">
                            <label>Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name" type="text" class="form-control input-lg" placeholder="Your name" required="" data-bv-field="name">
                            </div>
                            <small class="help-block" data-bv-validator="stringLength" data-bv-for="name" data-bv-result="VALID" style="display: none;">Please enter more than 3 characters</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="INVALID" style="">Please supply your first name</small></div>
                            <div class="form-group">
                                <label>Email address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" type="email" class="form-control input-lg" placeholder="Email" required="" data-bv-field="email">
                                </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please supply your email address</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please supply a valid email address</small></div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="phone" type="number" class="form-control input-lg" placeholder="Your Phone Number" required="" data-bv-field="phone">
                                    </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please supply your phone number</small><small class="help-block" data-bv-validator="phone" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please supply a vaild phone number with area code</small><small class="help-block" data-bv-validator="integer" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid number</small></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea spellcheck="" class="form-control input-lg" placeholder="Please, write a message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" disabled="disabled">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script type="text/javascript" src="vendors/js/jquery.min.js"></script>
                    <script type="text/javascript" src="vendors/js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="vendors/js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="js/fixtures.js"></script>

                </body>
                </html>
