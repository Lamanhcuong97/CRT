@extends('layouts.mainreset')
@section('page_title', 'STR ALL')
@section('content')

<div class="space-10"></div>
<div class="space-10"></div>

<div class="container">

  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
  <div class="space-10"></div>
        <div class="card card-container">
          <div class="space-10"></div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

            <form class="form-signin" method="POST" action="{{ url('/reset/add')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">ລະຫັດປະຈຸບັນ</p>
                <input type="password" id="username" name="password" class="login_box" placeholder="ປ້ອນລະຫັດປະຈຸບັນ" required autofocus>
                <p class="input_title">ລະຫັດໃໝ່</p>
                <input type="password" id="newpass1" name="newpass1" class="login_box" placeholder="ປ້ອນລະຫັດໃໝ່" required>
                <p class="input_title">ລະຫັດໃໝ່ອີກຄັ້ງ</p>
                <input type="password" id="newpass2" name="newpass2" class="login_box" placeholder="ປ້ອນລະຫັດໃໝ່ອີກຄັ້ງ" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">ປ່ຽນລະຫັດ</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


@stop
