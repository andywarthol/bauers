<?php
/*
Template Name: Long Quote Form
*/
?>

<?php get_header(); ?>

<section class="standard" id="longQuote">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="row">
								<div class="col-sm-12">
									<article>
										<header>
											<h1 class="page-title">Request for Proposal</h1>
											<p>Fill out the form below as accurately as possible so that we can provide you with the best quote.</p>
										</header>
										<!-- FORM: HEAD SECTION -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms-layout.css" rel="stylesheet" type="text/css" />
    <!--[if IE 8]>
    <link href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms-layout-ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
    <link href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms-layout-ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms-layout-ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <link href="https://www.tfaforms.com/themes/get/25658" rel="stylesheet" type="text/css" />
    <link href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms-jsonly.css" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.7/js/wforms.js"></script>
    <script type="text/javascript">
        wFORMS.behaviors.prefill.skip = false;
    </script>
        <link rel="stylesheet" type="text/css" href="https://www.tfaforms.com/form-builder/4.1.0/css/wforms_calendar.css" />
    <script type="text/javascript" src="https://www.tfaforms.com/js/yui/yui-min.js" ></script>
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.7/js/wforms_calendar.js"></script>
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.7/js/localization-en_US.js"></script>

<!-- FORM: BODY SECTION -->
<div class="wFormContainer" style="width: 664;" >

  <div class=""><div class="wForm" id="tfa_0-WRPR" dir="ltr">
<div class="codesection" id="code-tfa_0"><script type="text/javascript" src="http://app.formassembly.com/js/wforms3/wforms_custom_clear_switch.js"></script>
<p><img align="right" height="" width="160" src="https://c.na9.content.force.com/servlet/servlet.ImageServer?id=015E00000032xfm&oid=00DE0000000IvUX&lastMod=1389220364000"><br></p>
<style type="text/css">
.primaryAction{
background-color:orange !important;
}
</style>
<style type="text/css">
 .wForm form, .wForm fieldset {
    background-image: none !important;
    background-color: transparent !important;
 }
  
  .wFormContainer {
    margin-top: 25px;
  }
</style>
<style type="text/css">
.default { background: transparent;}
.default .wFormContainer { width:auto; }
</style>
</div>
<h3 class="wFormTitle" id="tfa_0-T">Submit a Request for a Quote</h3>
<form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="tfa_0" enctype="multipart/form-data">
<div id="tfa_1" class="section group">
<label class="label preField" id="tfa_1-L"><b>Contact Information</b></label><br><div id="tfa_6" class="section inline group">
<div id="tfa_3-D" class="oneField    ">
<label id="tfa_3-L" for="tfa_3" class="label preField reqMark">First Name</label><br><div class="inputWrapper"><input type="text" id="tfa_3" name="tfa_3" value="" placeholder="" class="required"></div>
</div>
<div id="tfa_5-D" class="oneField    ">
<label id="tfa_5-L" for="tfa_5" class="label preField reqMark">Last Name</label><br><div class="inputWrapper"><input type="text" id="tfa_5" name="tfa_5" value="" placeholder="" class="required"></div>
</div>
</div>
<div id="tfa_9" class="section inline group">
<div id="tfa_56-D" class="oneField    ">
<label id="tfa_56-L" for="tfa_56" class="label preField ">Company/Organization Name</label><br><div class="inputWrapper"><input type="text" id="tfa_56" name="tfa_56" value="" placeholder="" class=""></div>
</div>
<div id="tfa_7-D" class="oneField    ">
<label id="tfa_7-L" for="tfa_7" class="label preField reqMark">Email Address</label><br><div class="inputWrapper"><input type="text" id="tfa_7" name="tfa_7" value="" placeholder="" class="validate-email required"></div>
</div>
<div id="tfa_8-D" class="oneField    ">
<label id="tfa_8-L" for="tfa_8" class="label preField reqMark">Phone</label><br><div class="inputWrapper"><input type="text" id="tfa_8" name="tfa_8" value="" placeholder="" min="0" max="9" autoformat="(###) ###-####" class="validate-custom required"></div>
<script type="text/javascript">
                    if(typeof wFORMS != 'undefined') {
                        if(wFORMS.behaviors.validation) {
                            wFORMS.behaviors.validation.rules['customtfa_8'] =  { selector: '*[id="tfa_8"]', check: 'validateCustom'};
                            wFORMS.behaviors.validation.messages['customtfa_8'] = "Please Enter a Valid Number. ";
                        }
                    }</script>
</div>
</div>
</div>
<div id="tfa_11-D" class="oneField    ">
<label id="tfa_11-L" for="tfa_11" class="label preField reqMark">How Can We Help You?</label><br><div class="inputWrapper"><span id="tfa_11" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_13" class="calc-HCWHY calcval-char switch-b" id="tfa_13" name="tfa_11" data-conditionals="#tfa_20"><label class="label postField" id="tfa_13-L" for="tfa_13">I have a Charter or Shuttle Request (I Need to Move 1000 People or Less)</label></span><span class="oneChoice"><input type="radio" value="tfa_15" class="calc-HCWHY calcval-tran switch-f" id="tfa_15" name="tfa_11" data-conditionals="#tfa_96"><label class="label postField" id="tfa_15-L" for="tfa_15">I Have a Corporate Commuter or Contract Shuttle Request for Proposal (3 Month Min.)</label></span><span class="oneChoice"><input type="radio" value="tfa_14" class="calc-HCWHY calcval-evnt switch-c" id="tfa_14" name="tfa_11" data-conditionals="#tfa_40"><label class="label postField" id="tfa_14-L" for="tfa_14">I have a Large Event Request (&nbsp;I Need to Move More Than 1000 People)</label></span><span class="oneChoice"><input type="radio" value="tfa_12" class="calc-HCWHY calcval-exec switch-a" id="tfa_12" name="tfa_11" data-conditionals="#tfa_302"><label class="label postField" id="tfa_12-L" for="tfa_12">I Would Like to Get in Touch With an Account Executive</label></span></span></div>
</div>
<input type="hidden" id="tfa_164" name="tfa_164" value="" class="formula=HCWHY"><fieldset id="tfa_20" class="section offstate-b" data-condition="`#tfa_13`">
<div id="tfa_21-D" class="oneField    ">
<label id="tfa_21-L" for="tfa_21" class="label preField reqMark">Number of Passengers</label><br><div class="inputWrapper"><input type="text" id="tfa_21" name="tfa_21" value="" style="width: 170px" placeholder="" class="required"></div>
</div>
<div id="tfa_382-D" class="oneField    hintsSide">
<label id="tfa_382-L" for="tfa_382" class="label preField reqMark">Reservation Start Date</label><br><div class="inputWrapper">
<input type="text" id="tfa_382" name="tfa_382" value="" placeholder="" class="required"><span class="field-hint-inactive" id="tfa_382-H"><span id="tfa_382-HH" class="hint">MM/DD/YYY</span></span>
</div>
</div>
<div id="tfa_30" class="section inline group"><div id="tfa_306" class="repeat section group">
<label class="label preField" id="tfa_306-L">Please Add Your Pick-Up, Drop-Off, or Stop Information&nbsp;</label><br><div id="tfa_307" class="section inline group">
<div id="tfa_383-D" class="oneField    ">
<label id="tfa_383-L" for="tfa_383" class="label preField reqMark">Option</label><br><div class="inputWrapper"><select id="tfa_383" name="tfa_383" class="required"><option value="">Please select...</option>
<option value="tfa_384" id="tfa_384" class="">Pickup</option>
<option value="tfa_385" id="tfa_385" class="">Drop-off</option>
<option value="tfa_386" id="tfa_386" class="">Stop</option></select></div>
</div>
<div id="tfa_22-D" class="oneField    hintsSide">
<label id="tfa_22-L" for="tfa_22" class="label preField reqMark">Date</label><br><div class="inputWrapper">
<input type="text" id="tfa_22" name="tfa_22" value="" placeholder="" class="validate-date required"><span class="field-hint-inactive" id="tfa_22-H"><span id="tfa_22-HH" class="hint">MM/DD/YYYY</span></span>
</div>
</div>
<div id="tfa_23-D" class="oneField    ">
<label id="tfa_23-L" for="tfa_23" class="label preField reqMark">Time</label><br><div class="inputWrapper"><input type="text" id="tfa_23" name="tfa_23" value="" placeholder="" class="validate-time required"></div>
</div>
<div id="tfa_218-D" class="oneField    ">
<label id="tfa_218-L" for="tfa_218" class="label preField reqMark">Street</label><br><div class="inputWrapper"><input type="text" id="tfa_218" name="tfa_218" value="" style="width: 490px" placeholder="" maxlength="30" class="required"></div>
</div>
<div id="tfa_219-D" class="oneField    ">
<label id="tfa_219-L" for="tfa_219" class="label preField reqMark">City</label><br><div class="inputWrapper"><input type="text" id="tfa_219" name="tfa_219" value="" style="width: 220px" placeholder="" class="required"></div>
</div>
<div id="tfa_166-D" class="oneField    ">
<label id="tfa_166-L" for="tfa_166" class="label preField reqMark" style="width: 110px; min-width:0">State</label><br><div class="inputWrapper"><select id="tfa_166" name="tfa_166" class="required"><option value="">Please select...</option>
<option value="tfa_167" id="tfa_167" class="">AL</option>
<option value="tfa_168" id="tfa_168" class="">AK</option>
<option value="tfa_169" id="tfa_169" class="">AZ</option>
<option value="tfa_170" id="tfa_170" class="">AR</option>
<option value="tfa_171" id="tfa_171" class="">CA</option>
<option value="tfa_172" id="tfa_172" class="">CO</option>
<option value="tfa_173" id="tfa_173" class="">CT</option>
<option value="tfa_174" id="tfa_174" class="">DC</option>
<option value="tfa_175" id="tfa_175" class="">DE</option>
<option value="tfa_176" id="tfa_176" class="">FL</option>
<option value="tfa_177" id="tfa_177" class="">GA</option>
<option value="tfa_178" id="tfa_178" class="">HI</option>
<option value="tfa_179" id="tfa_179" class="">ID</option>
<option value="tfa_180" id="tfa_180" class="">IL</option>
<option value="tfa_181" id="tfa_181" class="">IN</option>
<option value="tfa_182" id="tfa_182" class="">IA</option>
<option value="tfa_183" id="tfa_183" class="">KS</option>
<option value="tfa_184" id="tfa_184" class="">KY</option>
<option value="tfa_185" id="tfa_185" class="">LA</option>
<option value="tfa_186" id="tfa_186" class="">ME</option>
<option value="tfa_187" id="tfa_187" class="">MD</option>
<option value="tfa_188" id="tfa_188" class="">MA</option>
<option value="tfa_189" id="tfa_189" class="">MI</option>
<option value="tfa_190" id="tfa_190" class="">MN</option>
<option value="tfa_191" id="tfa_191" class="">MS</option>
<option value="tfa_192" id="tfa_192" class="">MO</option>
<option value="tfa_193" id="tfa_193" class="">MT</option>
<option value="tfa_194" id="tfa_194" class="">NE</option>
<option value="tfa_195" id="tfa_195" class="">NV</option>
<option value="tfa_196" id="tfa_196" class="">NH</option>
<option value="tfa_197" id="tfa_197" class="">NJ</option>
<option value="tfa_198" id="tfa_198" class="">NM</option>
<option value="tfa_199" id="tfa_199" class="">NY</option>
<option value="tfa_200" id="tfa_200" class="">NC</option>
<option value="tfa_201" id="tfa_201" class="">ND</option>
<option value="tfa_202" id="tfa_202" class="">OH</option>
<option value="tfa_203" id="tfa_203" class="">OK</option>
<option value="tfa_204" id="tfa_204" class="">OR</option>
<option value="tfa_205" id="tfa_205" class="">PA</option>
<option value="tfa_206" id="tfa_206" class="">RI</option>
<option value="tfa_207" id="tfa_207" class="">SC</option>
<option value="tfa_208" id="tfa_208" class="">SD</option>
<option value="tfa_209" id="tfa_209" class="">TN</option>
<option value="tfa_210" id="tfa_210" class="">TX</option>
<option value="tfa_211" id="tfa_211" class="">UT</option>
<option value="tfa_212" id="tfa_212" class="">VT</option>
<option value="tfa_213" id="tfa_213" class="">VA</option>
<option value="tfa_214" id="tfa_214" class="">WA</option>
<option value="tfa_215" id="tfa_215" class="">WV</option>
<option value="tfa_216" id="tfa_216" class="">WI</option>
<option value="tfa_217" id="tfa_217" class="">WY</option></select></div>
</div>
<div id="tfa_221-D" class="oneField    ">
<label id="tfa_221-L" for="tfa_221" class="label preField reqMark" style="width: 110px; min-width:0">Zip Code</label><br><div class="inputWrapper"><input type="text" id="tfa_221" name="tfa_221" value="" style="width: 110px" placeholder="" class="required"></div>
</div>
</div>
<span class="duplicateSpan"><a id="tfa_306-wfDL" class="duplicateLink" href="#">Add another Pick-up, Drop-off, or Stop</a></span>
</div></div>
<div id="tfa_33-D" class="oneField    ">
<label id="tfa_33-L" for="tfa_33" class="label preField reqMark">Round Trip?</label><br><div class="inputWrapper"><span id="tfa_33" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_34" class="" id="tfa_34" name="tfa_33"><label class="label postField" id="tfa_34-L" for="tfa_34">Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_35" class="" id="tfa_35" name="tfa_33"><label class="label postField" id="tfa_35-L" for="tfa_35">No</label></span></span></div>
</div>
<div id="tfa_39-D" class="oneField    ">
<label id="tfa_39-L" for="tfa_39" class="label preField " style="width: 500px; min-width:0">Additional Information: If you have additional details, please let us know here so we can quote you quickly and accurately.</label><br><div class="inputWrapper"><textarea style="width: 500px; height: 40px" id="tfa_39" name="tfa_39" class=""></textarea></div>
</div>
</fieldset>
<fieldset id="tfa_40" class="section offstate-c" data-condition="`#tfa_14`">
<legend id="tfa_40-L"><b>Additional Information Required for Special Event Request</b></legend>
<div id="tfa_41-D" class="oneField    ">
<label id="tfa_41-L" for="tfa_41" class="label preField ">Number of Overall Attendees</label><br><div class="inputWrapper"><input type="text" id="tfa_41" name="tfa_41" value="" style="width: 180px" placeholder="" class=""></div>
</div>
<div id="tfa_78-D" class="oneField    ">
<label id="tfa_78-L" for="tfa_78" class="label preField reqMark">Name of Show/Event</label><br><div class="inputWrapper"><input type="text" id="tfa_78" name="tfa_78" value="" style="width: 180px" placeholder="" class="required"></div>
</div>
<div id="tfa_79" class="section inline group">
<div id="tfa_80-D" class="oneField    ">
<label id="tfa_80-L" for="tfa_80" class="label preField reqMark">Start Time</label><br><div class="inputWrapper"><input type="text" id="tfa_80" name="tfa_80" value="" placeholder="" class="validate-time required"></div>
</div>
<div id="tfa_81-D" class="oneField    ">
<label id="tfa_81-L" for="tfa_81" class="label preField reqMark">Start Date</label><br><div class="inputWrapper"><input type="text" id="tfa_81" name="tfa_81" value="" placeholder="" class="validate-date required"></div>
</div>
</div>
<div id="tfa_82" class="section inline group">
<div id="tfa_83-D" class="oneField    ">
<label id="tfa_83-L" for="tfa_83" class="label preField reqMark">End Time</label><br><div class="inputWrapper"><input type="text" id="tfa_83" name="tfa_83" value="" placeholder="" class="validate-time required"></div>
</div>
<div id="tfa_84-D" class="oneField    ">
<label id="tfa_84-L" for="tfa_84" class="label preField reqMark">End Date</label><br><div class="inputWrapper"><input type="text" id="tfa_84" name="tfa_84" value="" placeholder="" class="validate-date required"></div>
</div>
</div>
<div id="tfa_46-D" class="oneField    ">
<label id="tfa_46-L" for="tfa_46" class="label preField reqMark" style="width: 370px; min-width:0">Do You Have an Attachment to Upload?</label><br><div class="inputWrapper"><span id="tfa_46" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_47" class="switch-d" id="tfa_47" name="tfa_46" data-conditionals="#tfa_45"><label class="label postField" id="tfa_47-L" for="tfa_47">Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_48" class="switch-e" id="tfa_48" name="tfa_46" data-conditionals="#tfa_50"><label class="label postField" id="tfa_48-L" for="tfa_48">No</label></span></span></div>
</div>
<div id="tfa_45-D" class="oneField  offstate-d  ">
<label id="tfa_45-L" for="tfa_45" class="label preField reqMark" style="width: 480px; min-width:0">Please Upload Your File</label><br><div class="inputWrapper"><input type="file" id="tfa_45" name="tfa_45" size="" data-condition="`#tfa_47`" class="required"></div>
</div>
</fieldset>
<div id="tfa_50" class="section offstate-e group" data-condition="`#tfa_48`">
<label class="label preField" id="tfa_50-L"><b>Request for Proposal</b></label><br><fieldset id="tfa_73" class="section">
<legend id="tfa_73-L"><b>Hosting Company/Organization Information</b></legend>
<div id="tfa_61" class="section column group"><table class="columnLayout"><tr><td><div id="tfa_62" class="section column group"><table class="columnLayout"><tr><td><div id="tfa_63" class="section group">
<div id="tfa_64-D" class="oneField   labelsAbove ">
<label id="tfa_64-L" for="tfa_64" class="label preField ">&nbsp;Street Address </label><br><div class="inputWrapper"><input type="text" id="tfa_64" name="tfa_64" value="" style="width: 230px" placeholder="" maxlength="30" class="calc-GEOADDRESSSTREETADDRESS"></div>
</div>
<div id="tfa_65-D" class="oneField   labelsAbove ">
<label id="tfa_65-L" for="tfa_65" class="label preField ">City/State  </label><br><div class="inputWrapper"><input type="text" id="tfa_65" name="tfa_65" value="" style="width: 230px" placeholder="" class="calc-GEOADDRESSCITYSTATE"></div>
</div>
<div id="tfa_66-D" class="oneField   labelsAbove ">
<label id="tfa_66-L" for="tfa_66" class="label preField ">Zip / Postal Code </label><br><div class="inputWrapper"><input type="text" id="tfa_66" name="tfa_66" value="" style="width: 100px" placeholder="" class="calc-GEOADDRESSSPOSTAL"></div>
</div>
<div id="tfa_77-D" class="oneField    ">
<label id="tfa_77-L" for="tfa_77" class="label preField ">Fax</label><br><div class="inputWrapper"><input type="text" id="tfa_77" name="tfa_77" value="" placeholder="" autoformat="(###) ###-####" class=""></div>
</div>
</div></td></tr></table></div></td></tr></table></div>
</fieldset>
<div id="tfa_90-D" class="oneField   labelsLeftAligned ">
<label id="tfa_90-L" for="tfa_90" class="label preField " style="width: 220px; min-width:0">Show/Event City</label><div class="inputWrapper"><input type="text" id="tfa_90" name="tfa_90" value="" placeholder="" class=""></div>
</div>
<div id="tfa_91-D" class="oneField   labelsLeftAligned ">
<label id="tfa_91-L" for="tfa_91" class="label preField " style="width: 220px; min-width:0">Name of Venue</label><div class="inputWrapper"><input type="text" id="tfa_91" name="tfa_91" value="" placeholder="" class=""></div>
</div>
<div id="tfa_92-D" class="oneField   labelsLeftAligned ">
<label id="tfa_92-L" for="tfa_92" class="label preField " style="width: 220px; min-width:0">Number of Hotels Needing Service</label><div class="inputWrapper"><input type="text" id="tfa_92" name="tfa_92" value="" placeholder="" class=""></div>
</div>
<div id="tfa_93-D" class="oneField   labelsLeftAligned ">
<label id="tfa_93-L" for="tfa_93" class="label preField " style="width: 220px; min-width:0">Total Peak Room Limit</label><div class="inputWrapper"><input type="text" id="tfa_93" name="tfa_93" value="" placeholder="" class=""></div>
</div>
<fieldset id="tfa_74" class="repeat section">
<legend id="tfa_74-L"><b>Enter Pick-Up, Drop-Off, or Stop Locations</b></legend>
<div id="tfa_325" class="section inline group">
<div id="tfa_320-D" class="oneField    ">
<label id="tfa_320-L" for="tfa_320" class="label preField " style="width: 110pxpx; min-width:0">Option</label><br><div class="inputWrapper"><select id="tfa_320" name="tfa_320" class=""><option value="">Please select...</option>
<option value="tfa_321" id="tfa_321" class="">Pickup</option>
<option value="tfa_322" id="tfa_322" class="">Drop-off</option>
<option value="tfa_323" id="tfa_323" class="">Stop</option></select></div>
</div>
<div id="tfa_324-D" class="oneField    hintsSide">
<label id="tfa_324-L" for="tfa_324" class="label preField " style="width: 110pxpx; min-width:0">Date</label><br><div class="inputWrapper">
<input type="text" id="tfa_324" name="tfa_324" value="" style="width: 160px" placeholder="" class=""><span class="field-hint-inactive" id="tfa_324-H"><span id="tfa_324-HH" class="hint">MM/DD/YYYY</span></span>
</div>
</div>
<div id="tfa_326-D" class="oneField    ">
<label id="tfa_326-L" for="tfa_326" class="label preField " style="width: 110pxpx; min-width:0">Time</label><br><div class="inputWrapper"><input type="text" id="tfa_326" name="tfa_326" value="" style="width: 160px" placeholder="" class=""></div>
</div>
</div>
<div id="tfa_318-D" class="oneField    ">
<label id="tfa_318-L" for="tfa_318" class="label preField " style="width: 110px; min-width:0">Street</label><br><div class="inputWrapper"><input type="text" id="tfa_318" name="tfa_318" value="" style="width: 430px" placeholder="" class=""></div>
</div>
<div id="tfa_380" class="section inline group">
<div id="tfa_319-D" class="oneField    ">
<label id="tfa_319-L" for="tfa_319" class="label preField " style="width: 110pxpx; min-width:0">City</label><br><div class="inputWrapper"><input type="text" id="tfa_319" name="tfa_319" value="" style="width: 160px" placeholder="" class=""></div>
</div>
<div id="tfa_327-D" class="oneField    ">
<label id="tfa_327-L" for="tfa_327" class="label preField " style="width: 110pxpx; min-width:0">State</label><br><div class="inputWrapper"><select id="tfa_327" name="tfa_327" class=""><option value="">Please select...</option>
<option value="tfa_328" id="tfa_328" class=""> </option>
<option value="tfa_329" id="tfa_329" class="">AL</option>
<option value="tfa_330" id="tfa_330" class="">AK</option>
<option value="tfa_331" id="tfa_331" class="">AZ</option>
<option value="tfa_332" id="tfa_332" class="">AR</option>
<option value="tfa_333" id="tfa_333" class="">CA</option>
<option value="tfa_334" id="tfa_334" class="">CO</option>
<option value="tfa_335" id="tfa_335" class="">CT</option>
<option value="tfa_336" id="tfa_336" class="">DC</option>
<option value="tfa_337" id="tfa_337" class="">DE</option>
<option value="tfa_338" id="tfa_338" class="">FL</option>
<option value="tfa_339" id="tfa_339" class="">GA</option>
<option value="tfa_340" id="tfa_340" class="">HI</option>
<option value="tfa_341" id="tfa_341" class="">ID</option>
<option value="tfa_342" id="tfa_342" class="">IL</option>
<option value="tfa_343" id="tfa_343" class="">IN</option>
<option value="tfa_344" id="tfa_344" class="">IA</option>
<option value="tfa_345" id="tfa_345" class="">KS</option>
<option value="tfa_346" id="tfa_346" class="">KY</option>
<option value="tfa_347" id="tfa_347" class="">LA</option>
<option value="tfa_348" id="tfa_348" class="">ME</option>
<option value="tfa_349" id="tfa_349" class="">MD</option>
<option value="tfa_350" id="tfa_350" class="">MA</option>
<option value="tfa_351" id="tfa_351" class="">MI</option>
<option value="tfa_352" id="tfa_352" class="">MN</option>
<option value="tfa_353" id="tfa_353" class="">MS</option>
<option value="tfa_354" id="tfa_354" class="">MO</option>
<option value="tfa_355" id="tfa_355" class="">MT</option>
<option value="tfa_356" id="tfa_356" class="">NE</option>
<option value="tfa_357" id="tfa_357" class="">NV</option>
<option value="tfa_358" id="tfa_358" class="">NH</option>
<option value="tfa_359" id="tfa_359" class="">NJ</option>
<option value="tfa_360" id="tfa_360" class="">NM</option>
<option value="tfa_361" id="tfa_361" class="">NY</option>
<option value="tfa_362" id="tfa_362" class="">NC</option>
<option value="tfa_363" id="tfa_363" class="">ND</option>
<option value="tfa_364" id="tfa_364" class="">OH</option>
<option value="tfa_365" id="tfa_365" class="">OK</option>
<option value="tfa_366" id="tfa_366" class="">OR</option>
<option value="tfa_367" id="tfa_367" class="">PA</option>
<option value="tfa_368" id="tfa_368" class="">RI</option>
<option value="tfa_369" id="tfa_369" class="">SC</option>
<option value="tfa_370" id="tfa_370" class="">SD</option>
<option value="tfa_371" id="tfa_371" class="">TN</option>
<option value="tfa_372" id="tfa_372" class="">TX</option>
<option value="tfa_373" id="tfa_373" class="">UT</option>
<option value="tfa_374" id="tfa_374" class="">VT</option>
<option value="tfa_375" id="tfa_375" class="">VA</option>
<option value="tfa_376" id="tfa_376" class="">WA</option>
<option value="tfa_377" id="tfa_377" class="">WV</option>
<option value="tfa_378" id="tfa_378" class="">WI</option>
<option value="tfa_379" id="tfa_379" class="">WY</option></select></div>
</div>
<div id="tfa_381-D" class="oneField    ">
<label id="tfa_381-L" for="tfa_381" class="label preField " style="width: 110pxpx; min-width:0">Zip Code</label><br><div class="inputWrapper"><input type="text" id="tfa_381" name="tfa_381" value="" style="width: 160px" placeholder="" class=""></div>
</div>
</div>
<span class="duplicateSpan"><a id="tfa_74-wfDL" class="duplicateLink" href="#">Add an Additional Location</a></span>
</fieldset>
<div id="tfa_60" class="section group">
<div class="htmlSection" id="tfa_71"><div class="htmlContent" id="tfa_71-HTML"><script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.6&amp;sensor=false"></script>
<script type="text/javascript">
    /*Geocation gathering code. Do not remove. */
    (function (){
        if(!document.querySelector && base2) {
            document.querySelector = base2.DOM.Element.querySelector 
        }
        var geocoder;
        var msg; 
        var addStreetField = document.querySelector('input.calc-GEOADDRESSSTREETADDRESS');
        var addCityStateField = document.querySelector('input.calc-GEOADDRESSCITYSTATE');
        var addCountryField = document.querySelector('input.calc-GEOADDRESCOUNTRY');
        var addPostalField = document.querySelector('input.calc-GEOADDRESSSPOSTAL');
        var longField = document.querySelector('input.calc-GEOLONGITUDE');
        var latField = document.querySelector('input.calc-GEOLATITUDE');
        var strAddress = ""; 
        var cityState = ""; 
        var marker;
        var tfa_geolocationMap = new google.maps.DirectionsRenderer();

        var initializeMap = function(coords) {
            var myOptions = {   
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: coords
            }
            geolocation_map = new google.maps.Map(document.getElementById("tfa_geolocation_canvas"), myOptions);
            tfa_geolocationMap.setMap(geolocation_map);
            marker = new google.maps.Marker({
                map: geolocation_map,  
                position: coords,
                title: "Your Location"
            });
        }
        if (navigator.geolocation) {
            var timeoutVal = 10 * 1000 * 1000;
            navigator.geolocation.getCurrentPosition(
                function (position){
                    if (longField && latField){
                    longField.value = position.coords.longitude;
                    latField.value = position.coords.latitude;
                }
                try{
                    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': latlng}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]){
                                 for(i in results[0].address_components) {
                                    for (j in results[0].address_components[i].types) {
                                        switch(results[0].address_components[i].types[j]){
                                            case "street_number":
                                                strAddress += results[0].address_components[i].long_name; 
                                                break;
                                            case "route":
                                                strAddress += " " + results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_3":
                                                cityState += results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_2":
                                                cityState += ", " + results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_1":
                                                cityState += ", " + results[0].address_components[i].long_name; 
                                                break;
                                            case "country":
                                                if(addCountryField){
                                                    addCountryField.value = results[0].address_components[i].short_name; 
                                                }
                                                break;
                                            case "postal_code":
                                                if (addPostalField){
                                                    addPostalField.value = results[0].address_components[i].long_name; 
                                                }
                                                break; 
                                        }
                                    }
                                 }
                                 if (addStreetField){
                                    addStreetField.value = strAddress;
                                 }
                                 if (addCityStateField){
                                    addCityStateField.value = cityState;
                                 }
                            }
                        } 
                    });
                    if (tfa_geolocationMap){
                        initializeMap(latlng);
                    }
                } catch (x) { }
                }, 
            function(error){
                var errors = { 
                1: 'Location sharing declined',
                2: 'Position unavailable',
                    3: 'Request timeout'
                    }
                    msg = errors[error.code];
                    if (longField && latField){
                    longField.value = msg;
                    latField.value = msg; 
                }
            },
            { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
            );
        } else {
            msg = "User's browser does not support geolocation";
            longField.value = msg;
            latField.value = msg;
        }
    })(); 
</script></div></div>
<fieldset id="tfa_94" class="section">
<legend id="tfa_94-L"><b>Optional Survey of Previous Service</b></legend>
<div id="tfa_95-D" class="oneField    ">
<label id="tfa_95-L" for="tfa_95" class="label preField ">Who Provided This Service to You During the Last Event?</label><br><div class="inputWrapper"><input type="text" id="tfa_95" name="tfa_95" value="" style="width: 360px" placeholder="" class=""></div>
</div>
</fieldset>
</div>
</div>
<fieldset id="tfa_96" class="section offstate-f" data-condition="`#tfa_15`">
<legend id="tfa_96-L"><b>Request for Proposal</b></legend>
<div id="tfa_97-D" class="oneField    ">
<label id="tfa_97-L" for="tfa_97" class="label preField reqMark">Name of Company</label><br><div class="inputWrapper"><input type="text" id="tfa_97" name="tfa_97" value="" style="width: 190px" placeholder="" class="required"></div>
</div>
<div id="tfa_98-D" class="oneField    ">
<label id="tfa_98-L" for="tfa_98" class="label preField reqMark">Estimate Number of Employees for Program</label><br><div class="inputWrapper"><input type="text" id="tfa_98" name="tfa_98" value="" style="width: 280px" placeholder="" class="required"></div>
</div>
<div id="tfa_99-D" class="oneField    ">
<label id="tfa_99-L" for="tfa_99" class="label preField reqMark" style="width: 190px; min-width:0">Estimate Number of Routes</label><br><div class="inputWrapper"><input type="text" id="tfa_99" name="tfa_99" value="" style="width: 180px" placeholder="" class="required"></div>
</div>
<div id="tfa_100-D" class="oneField    ">
<label id="tfa_100-L" for="tfa_100" class="label preField reqMark" style="width: 360px; min-width:0">Do You Have an Attachment to Upload?</label><br><div class="inputWrapper"><span id="tfa_100" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_101" class="switch-h" id="tfa_101" name="tfa_100" data-conditionals="#tfa_150"><label class="label postField" id="tfa_101-L" for="tfa_101">Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_102" class="switch-g" id="tfa_102" name="tfa_100" data-conditionals="#tfa_127"><label class="label postField" id="tfa_102-L" for="tfa_102">No</label></span></span></div>
</div>
<div id="tfa_150-D" class="oneField  offstate-h  ">
<label id="tfa_150-L" for="tfa_150" class="label preField reqMark">Please Up Load Your File</label><br><div class="inputWrapper"><input type="file" id="tfa_150" name="tfa_150" size="" data-condition="`#tfa_101`" class="required"></div>
</div>
</fieldset>
<fieldset id="tfa_127" class="section offstate-g" data-condition="`#tfa_102`">
<legend id="tfa_127-L"><b>Request for Proposal Online Form</b></legend>
<div id="tfa_146" class="section group"><div class="htmlSection" id="tfa_147"><div class="htmlContent" id="tfa_147-HTML"><script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.6&amp;sensor=false"></script>
<script type="text/javascript">
    /*Geocation gathering code. Do not remove. */
    (function (){
        if(!document.querySelector && base2) {
            document.querySelector = base2.DOM.Element.querySelector 
        }
        var geocoder;
        var msg; 
        var addStreetField = document.querySelector('input.calc-GEOADDRESSSTREETADDRESS');
        var addCityStateField = document.querySelector('input.calc-GEOADDRESSCITYSTATE');
        var addCountryField = document.querySelector('input.calc-GEOADDRESCOUNTRY');
        var addPostalField = document.querySelector('input.calc-GEOADDRESSSPOSTAL');
        var longField = document.querySelector('input.calc-GEOLONGITUDE');
        var latField = document.querySelector('input.calc-GEOLATITUDE');
        var strAddress = ""; 
        var cityState = ""; 
        var marker;
        var tfa_geolocationMap = new google.maps.DirectionsRenderer();

        var initializeMap = function(coords) {
            var myOptions = {   
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: coords
            }
            geolocation_map = new google.maps.Map(document.getElementById("tfa_geolocation_canvas"), myOptions);
            tfa_geolocationMap.setMap(geolocation_map);
            marker = new google.maps.Marker({
                map: geolocation_map,  
                position: coords,
                title: "Your Location"
            });
        }
        if (navigator.geolocation) {
            var timeoutVal = 10 * 1000 * 1000;
            navigator.geolocation.getCurrentPosition(
                function (position){
                    if (longField && latField){
                    longField.value = position.coords.longitude;
                    latField.value = position.coords.latitude;
                }
                try{
                    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': latlng}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]){
                                 for(i in results[0].address_components) {
                                    for (j in results[0].address_components[i].types) {
                                        switch(results[0].address_components[i].types[j]){
                                            case "street_number":
                                                strAddress += results[0].address_components[i].long_name; 
                                                break;
                                            case "route":
                                                strAddress += " " + results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_3":
                                                cityState += results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_2":
                                                cityState += ", " + results[0].address_components[i].long_name; 
                                                break;
                                            case "administrative_area_level_1":
                                                cityState += ", " + results[0].address_components[i].long_name; 
                                                break;
                                            case "country":
                                                if(addCountryField){
                                                    addCountryField.value = results[0].address_components[i].short_name; 
                                                }
                                                break;
                                            case "postal_code":
                                                if (addPostalField){
                                                    addPostalField.value = results[0].address_components[i].long_name; 
                                                }
                                                break; 
                                        }
                                    }
                                 }
                                 if (addStreetField){
                                    addStreetField.value = strAddress;
                                 }
                                 if (addCityStateField){
                                    addCityStateField.value = cityState;
                                 }
                            }
                        } 
                    });
                    if (tfa_geolocationMap){
                        initializeMap(latlng);
                    }
                } catch (x) { }
                }, 
            function(error){
                var errors = { 
                1: 'Location sharing declined',
                2: 'Position unavailable',
                    3: 'Request timeout'
                    }
                    msg = errors[error.code];
                    if (longField && latField){
                    longField.value = msg;
                    latField.value = msg; 
                }
            },
            { enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
            );
        } else {
            msg = "User's browser does not support geolocation";
            longField.value = msg;
            latField.value = msg;
        }
    })(); 
</script></div></div></div>
<div id="tfa_129" class="section column group"><table class="columnLayout"><tr><td><div id="tfa_130" class="section column group"><table class="columnLayout"><tr><td><div id="tfa_131" class="section group">
<div id="tfa_132-D" class="oneField    ">
<label id="tfa_132-L" for="tfa_132" class="label preField ">Estimated Total Employee Headcount</label><br><div class="inputWrapper"><input type="text" id="tfa_132" name="tfa_132" value="" style="width: 230px" placeholder="" class=""></div>
</div>
<fieldset id="tfa_160" class="section">
<legend id="tfa_160-L"><b>Service Route Bus Location(s)</b></legend>
<div id="tfa_133-D" class="oneField repeat  labelsLeftAligned ">
<label id="tfa_133-L" for="tfa_133" class="label preField ">Bus Stop Location</label><div class="inputWrapper"><input type="text" id="tfa_133" name="tfa_133" value="" style="width: 280px" placeholder="" class="calc-GEOADDRESSSTREETADDRESS"></div>
<span class="duplicateSpan"><a id="tfa_133-D-wfDL" class="duplicateLink" href="#">Add Another</a></span>
</div>
</fieldset>
<div id="tfa_163" class="section inline group">
<div id="tfa_134-D" class="oneField   labelsAbove ">
<label id="tfa_134-L" for="tfa_134" class="label preField reqMark">Anticipated Start of Service Date</label><br><div class="inputWrapper"><input type="text" id="tfa_134" name="tfa_134" value="" style="width: 230px" placeholder="" class="validate-datecal calc-GEOADDRESSCITYSTATE required"></div>
</div>
<div id="tfa_162-D" class="oneField    ">
<label id="tfa_162-L" for="tfa_162" class="label preField ">Proposed Length of Contract(s)</label><br><div class="inputWrapper"><input type="text" id="tfa_162" name="tfa_162" value="" style="width: 190px" placeholder="" class=""></div>
</div>
</div>
<div id="tfa_153-D" class="oneField   labelsAbove ">
<label id="tfa_153-L" for="tfa_153" class="label preField reqMark">Estimated Number of Passengers</label><br><div class="inputWrapper"><input type="text" id="tfa_153" name="tfa_153" value="" style="width: 230px" placeholder="" class="calc-GEOADDRESSCITYSTATE required"></div>
</div>
<div id="tfa_154-D" class="oneField    ">
<label id="tfa_154-L" for="tfa_154" class="label preField reqMark">Do You Have An Anticipated Budget?</label><br><div class="inputWrapper"><span id="tfa_154" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_156" class="calc-GEOADDRESSCITYSTATE switch-i" id="tfa_156" name="tfa_154" data-conditionals="#tfa_161"><label class="label postField" id="tfa_156-L" for="tfa_156">Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_157" class="calc-GEOADDRESSCITYSTATE" id="tfa_157" name="tfa_154"><label class="label postField" id="tfa_157-L" for="tfa_157">No</label></span></span></div>
</div>
<div id="tfa_161-D" class="oneField  offstate-i  ">
<label id="tfa_161-L" for="tfa_161" class="label preField ">What Is Your Anticipated Budget?</label><br><div class="inputWrapper"><input type="text" id="tfa_161" name="tfa_161" value="" style="width: 210px" placeholder="" data-condition="`#tfa_156`" class=""></div>
</div>
<div id="tfa_155-D" class="oneField   labelsAbove ">
<label id="tfa_155-L" for="tfa_155" class="label preField reqMark">Is There Another Company Currently Providing This Service For You?</label><br><div class="inputWrapper"><span id="tfa_155" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_158" class="calc-GEOADDRESSCITYSTATE" id="tfa_158" name="tfa_155"><label class="label postField" id="tfa_158-L" for="tfa_158">Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_159" class="calc-GEOADDRESSCITYSTATE" id="tfa_159" name="tfa_155"><label class="label postField" id="tfa_159-L" for="tfa_159">No</label></span></span></div>
</div>
</div></td></tr></table></div></td></tr></table></div>
</fieldset>
<fieldset id="tfa_302" class="section offstate-a" data-condition="`#tfa_12`"><div id="tfa_305" class="section inline group">
<div id="tfa_303-D" class="oneField    ">
<label id="tfa_303-L" for="tfa_303" class="label preField reqMark">Number of Passengers</label><br><div class="inputWrapper">
<input type="text" id="tfa_303" name="tfa_303" value="" placeholder="" class="validate-integer required"><span class="field-hint-inactive" id="tfa_303-H"><span id="tfa_303-HH" class="hint">Numbers (0-9) only</span></span>
</div>
</div>
<div id="tfa_304-D" class="oneField    ">
<label id="tfa_304-L" for="tfa_304" class="label preField reqMark">Pick-Up Date</label><br><div class="inputWrapper">
<input type="text" id="tfa_304" name="tfa_304" value="" placeholder="" class="required"><span class="field-hint-inactive" id="tfa_304-H"><span id="tfa_304-HH" class="hint">MM-DD-YYYY</span></span>
</div>
</div>
</div></fieldset>
<input type="hidden" id="tfa_278" name="tfa_278" value="SFGA2_Form_Name__c" class=""><input type="hidden" id="tfa_279" name="tfa_279" value="SFGA2_Referring_Website__c" class=""><input type="hidden" id="tfa_280" name="tfa_280" value="SFGA2_Keyword_Search__c" class=""><input type="hidden" id="tfa_281" name="tfa_281" value="SFGA2_Landing_Page__c" class=""><input type="hidden" id="tfa_282" name="tfa_282" value="SFGA2_Device__c" class=""><input type="hidden" id="tfa_283" name="tfa_283" value="SFGA2_Date_Of_Visit__c" class=""><input type="hidden" id="tfa_284" name="tfa_284" value="SFGA2_Web_Source__c" class=""><input type="hidden" id="tfa_285" name="tfa_285" value="SFGA2_Campaign_Name__c" class=""><input type="hidden" id="tfa_286" name="tfa_286" value="SFGA2_Campaign_Source__c" class=""><input type="hidden" id="tfa_287" name="tfa_287" value="SFGA2_Campaign_Content__c" class=""><input type="hidden" id="tfa_288" name="tfa_288" value="SFGA2_Campaign_Term__c" class=""><input type="hidden" id="tfa_289" name="tfa_289" value="SFGA2_Campaign_Medium__c" class=""><input type="hidden" id="tfa_290" name="tfa_290" value="SFGA2_Total_Time_Seconds__c" class=""><input type="hidden" id="tfa_291" name="tfa_291" value="SFGA2_Active_Time_Seconds__c" class=""><input type="hidden" id="tfa_292" name="tfa_292" value="SFGA2_Idle_Time_Seconds__c" class=""><input type="hidden" id="tfa_293" name="tfa_293" value="SFGA2_Total_Time_Display__c" class=""><input type="hidden" id="tfa_294" name="tfa_294" value="SFGA2_Active_Time_Display__c" class=""><input type="hidden" id="tfa_295" name="tfa_295" value="SFGA2_Idle_Time_Display__c" class=""><input type="hidden" id="tfa_296" name="tfa_296" value="SFGA2_Pages_Navigated__c" class=""><input type="hidden" id="tfa_297" name="tfa_297" value="SFGA2_Past_Visits__c" class=""><input type="hidden" id="tfa_298" name="tfa_298" value="SFGA2_Page_Visits__c" class=""><input type="hidden" id="tfa_299" name="tfa_299" value="SFGA2_Lead_Score__c" class=""><input type="hidden" id="tfa_300" name="tfa_300" value="1" class=""><input type="hidden" id="tfa_301" name="tfa_301" value="1" class=""><div class="actions" id="tfa_0-A"><input type="submit" class="primaryAction" value="Submit"></div>
<div style="clear:both"></div>
<input type="hidden" value="285119" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="e1e61c72296bb869d398c19aecfc285b" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="151" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
</form>
</div></div>

  <p class="supportInfo" >
        <a href="https://www.tfaforms.com/forms/help/285119" target="new" style="font-size: 0.7em;">
      Need assistance with this form?    </a>

      </p>

</div>
</article> <!-- end article -->
</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</div>			
</div>
</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>