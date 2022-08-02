@extends('Adhoc.master')
@section('content')
<link rel="stylesheet" href="/css/adhoc/styles.css">
    <div id="jquery-script-menu">
	<div class="jquery-script-center">
  
<!-- IO report -->
<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Effectiveness Report</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in">
        <div class="panel-body">
         <p><a href="{{ url('/efReport01')}}/{{ time() }}">&#9658; Effectiveness Report Date 29 January 2021.</a></p>
        </div>
      </div>
</div>

<!-- End Of IO report 

<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
    <div class="container">
        <h1>Search for your Document</h1>
        <input type="search" id="search" class="form-control" placeholder="Document name">
        <div id="root"></div>
        <div class="pages"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="/css/adhoc/table-IO.js"></script>
    <script src="/css/adhoc/IO.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
@stop