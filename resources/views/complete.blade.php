@extends('esignature::themes.Default.master')


@if ($workflowComplete === false)
@section('content')
<h1>Electronic Signature Completed</h1>

<!-- open the lease-document div-->
<div class="lease-document" style="overflow: visible;">
  bla bla bla.
</div>
@stop
@section ('button')
<div class="esignature-buttons">
  <div class="pull-right">
    <a href="javascript:void(0);" id="done" class="btn btn-primary">I'm Done</a>
  </div>
  <div class="clearfix"></div>
</div>
@stop
@section ('javascript')
<script tyle="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function () {
      jQuery("#done").on("click", function () {
        jQuery("#workflow").submit();
      });
    });
    //]]>
</script>
@stop
@else
@section('content')
<h1>Electronic Signature Completed</h1>

<!-- open the lease-document div-->
<div class="lease-document" style="overflow: visible;">
  You have completed all your electronic signature obligations. There're no actions on your part that need actions.
</div>
@stop
@endif