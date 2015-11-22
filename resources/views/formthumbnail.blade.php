@extends('esignature::themes.Default.master')

@section('content')
<h1>{{$forms[$currentStep]->LABEL}}</h1>

<!-- open the lease-document div-->
<div class="lease-document" style="overflow: visible;">
  @foreach ($thumbnails as $thumbnail)
  <img id="formImage" usemap="#Page01" style="max-width: 100%; height: inherit; width: auto; border: 1px solid #eeeeee; margin-bottom: 20px;" src="{{$thumbnail}}" />

  <br style="clear: both; padding-bottom: 50px;"/>

  <map class="map" name="Page01">
    <area id="shape01" data-maphilight='{"strokeColor":"0000ff","strokeWidth":5,"fillColor":"ff0000","fillOpacity":0.6}' shape="rect" coords="0,0,82,126" href="#Sig01" title="Sig01" alt="Sig01" style="border: 1px soild #000000;" />
    <area shape="rect" coords="90,58,3,200" href="#Sig02" title="Sig02" alt="Sig02" />
  </map>
  @endforeach

  <script type="text/javascript">$(function () {
        jQuery(".map").maphilight();
        jQuery(".map").mouseover(function (e) {
          //$('#squidhead').mouseover();
        }).mouseout(function (e) {
          //$('#squidhead').mouseout();
        });

        jQuery("#formImage").on("click", function (e) {
          e.preventDefault();

          // AJAX execution
          jQuery.ajax({
            url: "/esignature/esignid/{{$esignId}}/method/myAJAXMethod",
            data: "_token={{csrf_token()}}",
            dataType: "json",
            type: "POST",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            error: function (jqXHR, textStatus, errorThrown)
            {
              console.debug(jqXHR);
              throw("AJAX: " + textStatus + (errorThrown ? " Exception thrown: " + errorThrown : ""));
            },
            success: function (returnedData)
            {
              if (returnedData != undefined)
              {
                if (returnedData.error != undefined)
                {
                  alert(returnedData.error);
                  return;
                }

                if (returnedData.error != undefined)
                {
                  alert(returnedData.error);
                  return;
                }

                if (returnedData.success != undefined && returnedData.success) {
                  alert(returnedData.message);
                }
              }
            }
          });
        });
      });</script>

  <!--</div>-->

  <!--  <img style="max-width: 100%; height: auto; width: auto; border: 1px solid #eeeeee; margin-bottom: 20px;" src="/bluemoon/esignature/images/Default/SamplePages/Page02.jpg" />

    <img style="max-width: 100%; height: auto; width: auto; border: 1px solid #eeeeee; margin-bottom: 20px;" src="/bluemoon/esignature/images/Default/SamplePages/Page03.jpg" />-->

  <br style="clear: both;" />

  <!--<img src="/esignature/public/images/Default/SamplePages/Page01.jpg" />-->
</div>
@stop
@section ('button')
<div class="esignature-buttons">
  <div class="pull-right">
    <a href="javascript:void(0);" id="next" class="btn btn-primary">Next &Gt;</a>
  </div>
  <div class="clearfix"></div>
</div>
@stop
@section ('javascript')
<script tyle="text/javascript">
    //<![CDATA[
    jQuery(document).ready(function () {
      jQuery("#next").on("click", function () {
        jQuery("#workflow").submit();
      });
    });
    //]]>
</script>
@stop
