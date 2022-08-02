@extends('Adhoc.master')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <h4 class="modal-title" id="exampleModalLongTitle" style="font-weight:bold" >Welcome To Web Portal For Sharing Information about Mutual Evaluations on AML/CFT of Lao PDR</h4>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body" align="center">
      <img src="css/adhoc/img/AMLIO logo2.png" alt="ສຕຟງ" >
     
      </div>
      <div class="modal-footer">
        <h4  align="center" style="font-weight:bold">
          <?php
            echo Auth::user()->usr_name." ".Auth::user()->usr_surname ;
          ?>
        </h4>       
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(function(){
    $('#exampleModalCenter').modal('show');
  });
    
</script>
<div class="panel panel-primary">
      <div class="panel-heading">
        <h5 class="panel-title" align='center'>
            <a data-toggle="collapse" data-parent="#accordion">Web Portal For Sharing Information about Mutual Evaluations on AML/CFT of Lao PDR</a>
        </h5>
      </div>
</div>
@stop