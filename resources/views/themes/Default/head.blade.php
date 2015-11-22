
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width" />
  <link rel="shortcut icon" href="images/favicon.ico"/>

  <title>Davis-Clanin Enterprises- {{$subTitle}}</title>

  <!-- CSS FILES -->
  <link rel="stylesheet" type="text/css" href="/css/Default/style.css" />

  <!-- JS FILES -->
  <script src="/js/jquery-2.1.4.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <!-- jSignature JS FILES -->

  <script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function () {
  jQuery(function () {
    jQuery("[data-toggle=\"popover\"]").popover();
  });

  jQuery(".toggle-lease-summary-panel").on("click", function () {
    jQuery(".lease-summary-panel").toggleClass("collapsed");
    jQuery(".signature-panel").toggleClass("align-left");
    jQuery(".main").toggleClass("full-screen");
  });

  jQuery(".toggle-signature-panel").on("click", function () {
    jQuery(".signature-panel").toggleClass("collapsed");
    jQuery(".signature-panel-bg").toggleClass("hide");
  });

  jQuery(".close-panel").on("click", function () {
    jQuery(".signature-panel").toggleClass("collapsed");
    jQuery(".signature-panel-bg").toggleClass("hide");
  });

  jQuery(".close-panel").on("click", function () {
    jQuery(".mobile-panels").toggleClass("collapsed");
  });
});
//]]>
  </script>
  @yield('head')
</head>