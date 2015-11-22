@extends('esignature::themes.Default.master')

@section('content')
<h1>Consumer Disclosure</h1>
<h6>Read the following Consumer Disclosure carefully and print a copy for your reference.</h6>

<!-- open the lease-document div-->
<div class="lease-document" style="overflow: visible;">
  This is consumer disclosure crap bla bla bla.
</div>
@stop

@section ('button')
<div class="esignature-buttons">
  <div class="pull-left">
    <em>Scroll through the document to accept the Consumer Disclosure.</em>
  </div>
  <div class="pull-right">
    <a href="javascript:void(0);" id="disagree" class="btn btn-default">I Disagree</a>
    <a href="javascript:void(0);" id="agree" class="btn btn-primary">I Agree</a>
  </div>
  <div class="clearfix"></div>
</div>
@stop
@section ('javascript')
<script tyle="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function () {
      jQuery("#agree").on("click", function () {
        jQuery("#workflow").submit();
      });
    });
    //]]>
</script>
@stop