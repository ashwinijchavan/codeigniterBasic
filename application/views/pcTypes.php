<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
    	.cardsize{
    		height: 300px;
    
    	}
    	          .mdl-select {
          position: relative;
          font-size: 16px;
          display: inline-block;
          box-sizing: border-box;
          width: 300px;
          max-width: 100%;
          margin: 0;
          padding: 20px 0;
        }

        .mdl-select__input {
          border: none;
          border-bottom: 1px solid rgba(0,0,0, 0.12);
          display: inline-block;
          font-size: 16px;
          margin: 0;
          padding: 4px 0;
          width: 100%;
          background: 16px;
          text-align: left;
          color: inherit;
        }

        .mdl-select.is-focused .mdl-select__input {	outline: none; }
        .mdl-select.is-invalid .mdl-select__input { 
          border-color: rgb(222, 50, 38);
            box-shadow: none;
          }

        .mdl-select.is-disabled .mdl-select__input {
          background-color: transparent;
          border-bottom: 1px dotted rgba(0,0,0, 0.12);
        }

        .mdl-select__label {
          bottom: 0;
          color: rgba(0,0,0, 0.26);
          font-size: 16px;
          left: 0;
          right: 0;
          pointer-events: none;
          position: absolute;
          top: 24px;
          width: 100%;
          overflow: hidden;
          white-space: nowrap;
          text-align: left; 
        }

        .mdl-select.is-dirty .mdl-select__label { visibility: hidden; }

        .mdl-select--floating-label .mdl-textfield__label {
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .mdl-select--floating-label.is-focused .mdl-select__label,
        .mdl-select--floating-label.is-dirty .mdl-select__label {
          color: rgb(63,81,181);
          font-size: 12px;
          top: 4px;
          visibility: visible;
        }

        .mdl-select--floating-label.is-focused .mdl-select__expandable-holder .mdl-select__label,
        .mdl-select--floating-label.is-dirty .mdl-select__expandable-holder .mdl-select__label {
          top: -16px;
        }

        .mdl-select--floating-label.is-invalid .mdl-select__label {
          color: rgb(222, 50, 38);
          font-size: 12px;
        }

        .mdl-select__label:after {
          background-color: rgb(63,81,181);
          bottom: 20px;
          content: '';
          height: 2px;
          left: 45%;
          position: absolute;
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          visibility: hidden;
          width: 10px;
        }

        .mdl-select.is-focused .mdl-select__label:after {
          left: 0;
          visibility: visible;
          width: 100%; 
        }

        .mdl-select.is-invalid .mdl-select__label:after {
          background-color: rgb(222, 50, 38); 
        }

        .mdl-select__error {
          color: rgb(222, 50, 38);
          position: absolute;
          font-size: 12px;
          margin-top: 3px;
          visibility: hidden;
        }

        .mdl-select.is-invalid .mdl-select__error {
          visibility: visible;
        }

        .mdl-select__expandable-holder {
          display: inline-block;
          position: relative;
          margin-left: 32px;
          -webkit-transition-duration: 0.2s;
          transition-duration: 0.2s;
          -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          display: inline-block;
          max-width: 0.1px; 
        }

        .mdl-select.is-focused .mdl-select__expandable-holder, .mdl-select.is-dirty .mdl-select__expandable-holder {
          max-width: 600px; 
        }

        .mdl-select__expandable-holder .mdl-select__label:after {
          bottom: 0;
        }
    </style>
</head>
<body background="https://wallpaperscraft.com/image/lines_dark_light_form_background_47106_3840x2160.jpg">

		<div class="mdl-grid" align="center">
		    <div class="mdl-cell mdl-cell--2-col">
            <!-- add content here -->
            </div>
            <div class="mdl-cell mdl-cell--8-col">
                    <h4 style="color: white"><i><b>LOGIN FORM</b></i></h4>
				    <div class="demo-card-wide mdl-card mdl-shadow--2dp cardsize">
						<!-- Textfield with Floating Label -->
 
						<form action="<?php echo base_url('pc/postPc') ?>">
 
			              <div style="height:50px">
						  	
						  </div>
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="laptop">
						    <label class="mdl-textfield__label" for="sample3">Laptop</label>
						  </div>
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
						    <input class="mdl-textfield__input" type="text" id="sample3" name="desktop">
						    <label class="mdl-textfield__label" for="sample3">Desktop</label>
						  </div>
						  <div style="height:50px">
						  	
						  </div>
						  <div>
						  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
						  </div>
						</form>
						<!-- Numeric Textfield with Floating Label -->						
					</div>
			</div>
			<div class="mdl-cell mdl-cell--2-col">
            <!-- add content here -->
            </div>
	    </div>

</body>
</html>