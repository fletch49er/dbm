/*---------------------------------------------------------------------------
 * File 		: validation.js
 * Purpose	: Javascript form validation for contacts.php (web) 
 *						
 * Author		: Mark Fletcher
 * Date			: 28.06.2011
 *  
 * Notes: 
 *
 * Revision:
 *		28.06.2011	1st issue.
 *		04.10.2012	Error highlighting added.
 *
 *----------------------------------------------------------------------------*/
// Form Validation Script
var check = {
	// set background colour
	css : {
		bgColor : '#28170b' //dark ochre
	}, // end object
	
	// object to store form field validation status
	validate : {
		val_name : false,
		val_tel : false,
		val_email : false,
		val_domain : false
	}, // end object

	// object to store valid messages
	okMessages : {
		ok_name : 'OK',
		ok_tel : 'OK',
		ok_email : 'OK',
		ok_domain : 'OK'
	}, // end object

	// object to store error messages
	errorMessages : {
		err_name : 'X',
		err_tel : 'X',
		err_email : 'X',
		err_domain : 'X',
		err_name2 : 'Enter a valid name.',
		err_tel2 : 'Enter a valid UK telephone number.',
		err_email2 : 'Enter a valid email address.',
		err_domain2 : 'Enter a valid domain name.'
	}, // end object

	// highlight message to user on error
	changeText : function(id, id2, message, bgColor, valid){
		if (valid == true) {
			var textColor = "#0f0";
		} else {
			var textColor = "#f00";
		}
		var node = document.getElementById(id);
		var node2 = document.getElementById(id2);
		while(node.firstChild) {
			node.removeChild(node.firstChild);
			}
			node.appendChild(document.createTextNode(message));
			node.style.color = textColor;
			node.style.textAlign = "center";
			node.style.fontWeight = "bold";
			node.style.backgroundColor = bgColor;
			node2.style.borderColor = textColor;
			node2.style.borderStyle = "solid";
	}, // end function

	// validate full name with regEx
	validateName : function() {
		var pattern = /^[A-Z]{1}[a-z]*\s([A-Z]\s){0,2}(Mc|Mac|O\'){0,1}[A-Z]{1}[a-z]+$/;
		var nameValue = document.getElementById("nameForm").value;
		if (pattern.test(nameValue)) {
			check.validate.val_name = true;
			check.changeText("nameError", "nameForm", check.okMessages.ok_name, check.css.bgColor, true);
		}	else {
			check.validate.val_name = false;
			check.changeText("nameError", "nameForm", check.errorMessages.err_name, check.css.bgColor, false);
		}
	}, // end function

	// validate telephone number with regEx
	validateTel : function() {
		var pattern = /^((\+44\s?\(0\)\s?\d{2,4})|(\+44\s?(01|02|03|07|08)\d{2,3})|(\+44\s?(1|2|3|7|8)\d{2,3})|(\(\+44\)\s?\d{3,4})|(\(\d{5}\))|((01|02|03|07|08)\d{2,3})|(\d{5}))(\s|-|.)(((\d{3,4})(\s|-)(\d{3,4}))|((\d{6,7})))$/;
		var telValue = document.getElementById("telForm").value;
		if (pattern.test(telValue)) {
			check.validate.val_tel = true;
			check.changeText("telError", "telForm", check.okMessages.ok_tel, check.css.bgColor, true);
		}	else {
			check.validate.val_tel = false;
			check.changeText("telError", "telForm", check.errorMessages.err_tel, check.css.bgColor, false);
		}
	}, // end function

// validate email address with regEx
	validateEmail : function() {
		var pattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		var emailValue = document.getElementById("emailForm").value;
		if (pattern.test(emailValue)) {
			check.validate.val_email = true;
			check.changeText("emailError", "emailForm", check.okMessages.ok_email, check.css.bgColor, true);
		}	else {
			check.validate.val_email = false;
			check.changeText("emailError", "emailForm", check.errorMessages.err_email, check.css.bgColor, false);
		}
	}, // end function

// validate Domain with regEx
	validateDomain : function() {
		var pattern = /^none|([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])\.)+[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?$/;
		var domainValue = document.getElementById("domainForm").value;
		if (pattern.test(domainValue)) {
			check.validate.val_domain = true;
			check.changeText("domainError", "domainForm", check.okMessages.ok_domain, check.css.bgColor, true);
		}	else {
			check.validate.val_domain = false;
			check.changeText("domainError", "domainForm", check.errorMessages.err_domain, check.css.bgColor, false);
		}
	}, // end function

	// form submit function
	validateContactForm : function() {
		var formStatus = true;
		// call the field validation functions one by one
		check.validateName();
		check.validateTel();
		check.validateEmail();
		check.validateDomain();
	for(var status in check.validate) {
			if(check.validate.hasOwnProperty(status)) {
				if(! check.validate[status]) {
					formStatus = false;
				}	// else leave formStatus true
			} // end validate.hasOwnProperty
		} // end for status
		return formStatus;	
	}, // end function

	// call form validation
	checkForm : function() {
		// get the form
		var valForm = document.getElementById("contactFrm");
		// assign the handler functions
		valForm.onsubmit = check.validateContactForm;
		valForm.nameForm.onblur = check.validateName;
		valForm.telForm.onblur = check.validateTel;
		valForm.emailForm.onblur = check.validateEmail;
		valForm.domainForm.onblur = check.validateDomain;
	} // end function

}; // end check function

// call form validation functions onload
window.onload = check.checkForm;