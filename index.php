<!DOCTYPE html>
<html lang="en">
  <head>
    <title>QR Code Generator</title>
    <meta charset="utf-8">
    <meta name="description" content="QR Code Generator">
    <meta name="keywords" content="QR Code, Generator, Link">
    <meta name="author" content="DPK">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/run.js"></script>
  </head>
    <body>
  	<div class="container">
  		<h2>QR Code Generator</h2>
  		<h4>Choose one of file type to be a QR Code</h4>
  		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#linkTab">Website (Link)</a></li>
		    <li><a data-toggle="tab" href="#othersTab">Others</a></li>
		</ul>
		<div class="tab-content">
		    <div id="linkTab" class="tab-pane fade in active">
		      <h3>Link</h3>
		      <p>Fill out the website link and click Generate button</p>
		      <form>
		      	<div id="linkFormGroup" class="form-group">
    				<input type="text" class="form-control" id="link" placeholder="example: https://google.com"><br>
    				<div id="emptyLinkWarning" class="alert alert-danger" hidden>
    					<strong>Link must be filled !</strong>
  					</div>
  				</div>
		      </form>
		      <button type="button" class="btn btn-primary" id="linkGenerate">Generate</button>&nbsp;&nbsp;
		      <button type="button" class="btn btn-danger" id="linkReset">Reset</button><br><br>
		      <div id="linkQrCodeContent"></div>
		    </div>
		    <div id="othersTab" class="tab-pane fade">
		      <h3>Others</h3>
		      <p>Under Construction</p>
		    </div>
  		</div>
  	</div>
  </body>
</html>