<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_ajax.js'></script>
<script type='text/javascript' src='scripts/fg_moveable_popup.js'></script>
<script type='text/javascript' src='scripts/fg_form_submitter.js'></script>
<div id='fg_formContainer'>
    <div id="fg_container_header">
        <div id="fg_box_Title">Contact us</div>
        <div id="fg_box_Close"><a href="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">Close(X)</a></div>
    </div>

    <div id="fg_form_InnerContainer">
    <form id='contactus' action='javascript:fg_submit_form()' method='post' accept-charset='UTF-8'>

    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
    <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
    <div class='short_explanation'>* required fields</div>
    <div id='fg_server_errors' class='error'></div>
    <div class='container'>
        <label for='name' >Your Full Name*: </label><br/>
        <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
        <span id='contactus_name_errorloc' class='error'></span>
    </div>
    <div class='container'>
    <label for='email' >Email Address*:</label><br/>
        <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
        <span id='contactus_email_errorloc' class='error'></span>
    </div>
    <div class='container'>
        <label for='message' >Message:</label><br/>
        <span id='contactus_message_errorloc' class='error'></span>
        <textarea rows="10" cols="50" name='message' id='message'></textarea>
    </div>

    <div class='container'>
        <input type='submit' name='Submit' value='Submit' />
    </div>
    </form>
    </div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    document.forms['contactus'].refresh_container=function()
    {
        var formpopup = document.getElementById('fg_formContainer');
        var innerdiv = document.getElementById('fg_form_InnerContainer');
        var b = innerdiv.offsetHeight+30+30;

        formpopup.style.height = b+"px";
    }

    document.forms['contactus'].form_val_onsubmit = document.forms['contactus'].onsubmit;


    document.forms['contactus'].onsubmit=function()
    {
        if(!this.form_val_onsubmit())
        {
            this.refresh_container();
            return false;
        }

        return true;
    }
    function fg_submit_form()
    {
        //alert('submiting form');
        var containerobj = document.getElementById('fg_form_InnerContainer');
        var sourceobj = document.getElementById('fg_submit_success_message');
        var error_div = document.getElementById('fg_server_errors');
        var formobj = document.forms['contactus']

        var submitter = new FG_FormSubmitter("popup-contactform.php",containerobj,sourceobj,error_div,formobj);
        var frm = document.forms['contactus'];

        submitter.submit_form(frm);
    }

// ]]>
</script>

<div id='fg_backgroundpopup'></div>

<div id='fg_submit_success_message'>
    <h2>Thanks!</h2>
    <p>
    Thanks for contacting us. We will get in touch with you soon!
    <p>
        <a href="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">Close this window</a>
    <p>
    </p>
</div>
