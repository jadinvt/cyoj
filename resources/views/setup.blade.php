@extends('esignature::themes.Default.master')

@section('content')
<!--
Developer's note by K. Ludlow on 2015-08-24

I don't know exactly how we want to load in JS
scripts that are specific to a function like eSig.
I've just put them here for the time being and
will go with whatever the team decides on.

There are a few other included files, but those
were more global to the eSig process and so I
placed them into the header.
-->

<script type="text/javascript">jQuery.noConflict();</script>
<script src="/bluemoon/esignature/js/Default/jSignature-inline/jSignature-preserve.js"></script>
<script src="/bluemoon/esignature/js/Default/jSignature-libs/jSignature.min.noconflict.js"></script>
<script src="/bluemoon/esignature/js/Default/jSignature-inline/jSignature-initialize.js"></script>


<div class="create-signature">

  <h1>Let's set up your Digital Signature</h1>

  <p class="text-large">Treat your digital signature like you would signing a physical document. Signing the documents provided in your lease contract will legally bind you to the terms and agreements provided by Hogwarts Heights apartments.</p>

  <section>
    <h2>Full Name &amp; Initials</h2>
    <p>Type your full, legal name as it appears on your driver's license and your initials in the boxes below.</p>
    <input type="text" class="form-control" placeholder="Full name" />
    <input type="text" class="form-control form-third-width" placeholder="Initials" />
    <div class="clearfix"></div>
  </section>

  <section>
    <h2>Customize Your Signature</h2>
    <p>Sign your name and initials using your mouse or select a font to create your digital signature.</p>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <button id="btnSign" type="button" class="btn btn-default">Sign</button>
      <button id="btnType" type="button" class="btn btn-default">Type</button>
    </div>
    <select id="drpSignature" class="form-control" style="font-family: cursive; display: none;">
      <option>Select a font...</option>
      <option class="stepSignature" style="font-size: 25px; font-family: cursive;">John Smith</option>
      <option class="stepSignature" style="font-size: 25px; font-family: Mistral;">John Smith</option>
      <option class="stepSignature" style="font-size: 25px; font-family: Comic Sans MS, cursive;">John Smith</option>
      <option class="stepSignature" style="font-size: 25px; font-family: 'Edwardian Script ITC';">John Smith</option>
      <option class="stepSignature" style="font-size: 25px; font-family: 'Giddyup Std';">John Smith</option>
    </select>
    <div class="capture-signature">
      <h3>Signature</h3>
      <!-- place jquery signature box here -->

      <div id="signatureparent">
        <div id="signatureSignature"></div>
      </div>

    </div>
    <div class="capture-signature">
      <h3>Initials</h3>

      <div id="signatureparent" style="width: 190px; height: 190px;">
        <div id="signatureInitials"></div>
      </div>
      <!-- place jquery initial box here -->
    </div>
    <div class="clearfix"></div>
  </section>

  <section>
    <h2>Date</h2>
    <p>The date will be displayed as followed when signing your lease documents:</p>
    <span class="signature-date">09 / 01 / 2015</span>
  </section>
</div>
@stop
@section ('button')
<div class="esignature-buttons">
  <div class="pull-right">
    <a href="javascript:void(0);" id="save" class="btn btn-primary btn-block">Save &amp; Continue &raquo;</a>
  </div>
  <div class="clearfix"></div>
</div>
@stop
@section ('javascript')
<script tyle="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function () {
      jQuery("#save").on("click", function () {
        jQuery("#workflow").submit();
      });
    });
    //]]>
</script>
@stop
