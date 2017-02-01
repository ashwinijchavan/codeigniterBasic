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
        height: 500px;

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
    .mdl-card {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        font-size: 16px;
        font-weight: 400;
        min-height: 200px;
        overflow: hidden;
        width: 700px;
        z-index: 1;
        position: relative;
        background: #fff;
        border-radius: 2px;
        box-sizing: border-box;
    }
#c1, #c2, #c3 {
    width: 50%;
}
#wrapper{
    display:-webkit-flex;
    -webkit-justify-content:center;

    display:flex;
    justify-content:center;

}
#wrapper div{
    -webkit-flex:1;
    flex:1;
}
.mdl-textfield {
    position: relative;
    font-size: 16px;
    display: inline-block;
    box-sizing: border-box;
    width: 300px;
    max-width: 100%;
    margin: 10px;
}
.mdl-select__input {
    border: none;
    border-bottom: 1px solid rgba(0,0,0, 0.12);
    display: inline-block;
    font-size: 16px;
    margin: 0;
    padding: 9px 0;
    width: 100%;
    background: 16px;
    text-align: left;
    color: inherit;
}
</style>
</head>
<body background="https://wallpaperscraft.com/image/lines_dark_light_form_background_47106_3840x2160.jpg">

<div class="mdl-grid" align="center">
    <div class="mdl-cell mdl-cell--2-col">
      <!-- add content here -->
    </div>
    <div class="mdl-cell mdl-cell--8-col">
      <h4 style="color: white"><i><b>STUDENT REGISTRATION FORM</b></i></h4>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp cardsize">
            <!-- Textfield with Floating Label -->

            <form action="<?php echo base_url('register/postRegister') ?>">
                <div id="wrapper">
                    <div id="c1">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="name">
                            <label class="mdl-textfield__label" for="sample3">Name of Firm</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="pan">
                            <label class="mdl-textfield__label" for="sample3">PAN No of Firm</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name="mobile">
                            <label class="mdl-textfield__label" for="sample4">Mobile number</label>
                            <span class="mdl-textfield__error">Input is not a number!</span>
                        </div>
                        <div class="mdl-select mdl-js-select mdl-select--floating-label">
                            <select class="mdl-select__input" id="professsion"   name="trading">
                              <option value=""></option>
                              <option value="option1">Manufacturing</option>
                              <option value="option2">Services</option>
                              <option value="option3">Wholesale/Retail Trade</option>
                            </select>
                            <label class="mdl-select__label" for="professsion">Nature of Business Activity</label>
                          </div>
                    </div>
                    <div id="c2">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="entity">
                            <label class="mdl-textfield__label" for="sample3">Type of Legal Entity</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="email" id="sample3" name="email">
                            <label class="mdl-textfield__label" for="sample3">Email</label>
                        </div>
                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="owner">
                            <label class="mdl-textfield__label" for="sample3">Name of Owner/Director</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="address">
                            <label class="mdl-textfield__label" for="sample3">Address</label>
                        </div>
                    </div>
                </div>
                <div style="height:30px">
                    
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
<script>
   function MaterialSelect(element) {
     'use strict';

     this.element_ = element;
     this.maxRows = this.Constant_.NO_MAX_ROWS;
  // Initialize instance.
  this.init();
}

MaterialSelect.prototype.Constant_ = {
  NO_MAX_ROWS: -1,
  MAX_ROWS_ATTRIBUTE: 'maxrows'
};

MaterialSelect.prototype.CssClasses_ = {
  LABEL: 'mdl-textfield__label',
  INPUT: 'mdl-select__input',
  IS_DIRTY: 'is-dirty',
  IS_FOCUSED: 'is-focused',
  IS_DISABLED: 'is-disabled',
  IS_INVALID: 'is-invalid',
  IS_UPGRADED: 'is-upgraded'
};

MaterialSelect.prototype.onKeyDown_ = function(event) {
  'use strict';

  var currentRowCount = event.target.value.split('\n').length;
  if (event.keyCode === 13) {
    if (currentRowCount >= this.maxRows) {
      event.preventDefault();
  }
}
};

MaterialSelect.prototype.onFocus_ = function(event) {
  'use strict';

  this.element_.classList.add(this.CssClasses_.IS_FOCUSED);
};

MaterialSelect.prototype.onBlur_ = function(event) {
  'use strict';

  this.element_.classList.remove(this.CssClasses_.IS_FOCUSED);
};

MaterialSelect.prototype.updateClasses_ = function() {
  'use strict';
  this.checkDisabled();
  this.checkValidity();
  this.checkDirty();
};

MaterialSelect.prototype.checkDisabled = function() {
  'use strict';
  if (this.input_.disabled) {
    this.element_.classList.add(this.CssClasses_.IS_DISABLED);
} else {
    this.element_.classList.remove(this.CssClasses_.IS_DISABLED);
}
};

MaterialSelect.prototype.checkValidity = function() {
  'use strict';
  if (this.input_.validity.valid) {
    this.element_.classList.remove(this.CssClasses_.IS_INVALID);
} else {
    this.element_.classList.add(this.CssClasses_.IS_INVALID);
}
};

MaterialSelect.prototype.checkDirty = function() {
  'use strict';
  if (this.input_.value && this.input_.value.length > 0) {
    this.element_.classList.add(this.CssClasses_.IS_DIRTY);
} else {
    this.element_.classList.remove(this.CssClasses_.IS_DIRTY);
}
};

MaterialSelect.prototype.disable = function() {
  'use strict';

  this.input_.disabled = true;
  this.updateClasses_();
};

MaterialSelect.prototype.enable = function() {
  'use strict';

  this.input_.disabled = false;
  this.updateClasses_();
};

MaterialSelect.prototype.change = function(value) {
  'use strict';

  if (value) {
    this.input_.value = value;
}
this.updateClasses_();
};

MaterialSelect.prototype.init = function() {
  'use strict';

  if (this.element_) {
    this.label_ = this.element_.querySelector('.' + this.CssClasses_.LABEL);
    this.input_ = this.element_.querySelector('.' + this.CssClasses_.INPUT);

    if (this.input_) {
      if (this.input_.hasAttribute(this.Constant_.MAX_ROWS_ATTRIBUTE)) {
        this.maxRows = parseInt(this.input_.getAttribute(
          this.Constant_.MAX_ROWS_ATTRIBUTE), 10);
        if (isNaN(this.maxRows)) {
          this.maxRows = this.Constant_.NO_MAX_ROWS;
      }
  }

  this.boundUpdateClassesHandler = this.updateClasses_.bind(this);
  this.boundFocusHandler = this.onFocus_.bind(this);
  this.boundBlurHandler = this.onBlur_.bind(this);
  this.input_.addEventListener('input', this.boundUpdateClassesHandler);
  this.input_.addEventListener('focus', this.boundFocusHandler);
  this.input_.addEventListener('blur', this.boundBlurHandler);

  if (this.maxRows !== this.Constant_.NO_MAX_ROWS) {
        // TODO: This should handle pasting multi line text.
        // Currently doesn't.
        this.boundKeyDownHandler = this.onKeyDown_.bind(this);
        this.input_.addEventListener('keydown', this.boundKeyDownHandler);
    }

    this.updateClasses_();
    this.element_.classList.add(this.CssClasses_.IS_UPGRADED);
}
}
};

MaterialSelect.prototype.mdlDowngrade_ = function() {
  'use strict';
  this.input_.removeEventListener('input', this.boundUpdateClassesHandler);
  this.input_.removeEventListener('focus', this.boundFocusHandler);
  this.input_.removeEventListener('blur', this.boundBlurHandler);
  if (this.boundKeyDownHandler) {
    this.input_.removeEventListener('keydown', this.boundKeyDownHandler);
}
};

// The component registers itself. It can assume componentHandler is available
// in the global scope.
componentHandler.register({
  constructor: MaterialSelect,
  classAsString: 'MaterialSelect',
  cssClass: 'mdl-js-select',
  widget: true
});
</script>
</body>
</html>