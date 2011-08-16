<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-modal-popup-contact-form.html
*/
//1. First, include the file popup-contactform.php
require_once('popup-contactform.php');

//2. link to the style file contact.css
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="popup-contact.css">
</head>
<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<p>
This is an example page showing how to add the popup contact form to your website.
Click on the button below to open the popup.
</p>
<p>
<a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
><img border='0' src='contact-us-button.png' width='213' height='39' /></a>
</p>

<?PHP
//3. php include contactform-code.php at the end of the page

require_once('contactform-code.php');
?>

</body>
</html>