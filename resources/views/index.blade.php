@extends('layouts.mainindex')
@section('page_title', 'STR ALL')
@section('content')

<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#033762" align="center">
      <img src="css/adhoc/img/AMLIO logo2.png" alt="ສຕຟງ" >
         <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body" align="center">
      <h4 class="modal-title" id="exampleModalLongTitle" style="font-weight:bold; font-size: 20px;font-family:Phetsarath OT;" >ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານຕ້ອງໄດ້ເຂົ້າລະບົບທຸກໆວັນລັດຖະການ<br> ເພື່ອກວດເບິ່ງເອກະສານຂໍຂໍ້ມູນຈາກ ສຕຟງ</h4>
       
     
      </div>
      <!-- <div class="modal-footer"> -->
    <div class="center">
      <button type="button" class="btn btn-danger" data-dismiss="modal">ປິດ</button>
    </div>
    </div>
  </div>
</div>
<div class="container">
    
        <div class="card card-container">
        <div class="space-10"></div>
        <div class="center animated fadeInDown">
            <img src="{{ url('/images/amlio_logo.png') }}" width="140" />
        </div>
        <hr>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

            <form class="form-signin" method="POST" action="{{ url('/login')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="username" name="username" class="login_box" placeholder="ຊື່ຜູ້ໃຊ້" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="password" name="password" class="login_box" placeholder="ລະຫັດຜ່ານ" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">ເຂົ້າສູ່ລະບົບ</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script>
  $(function(){
    $('#exampleModalCenter').modal('show');
  });
    
</script>
@stop
