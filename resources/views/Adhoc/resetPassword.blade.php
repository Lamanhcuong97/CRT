@extends('Adhoc.master')
@section('page_title', 'STR ALL')
@section('content')

<div class="space-10"></div>
<div class="space-10"></div>

<div class="container">


        <div class="card card-container">
          <div class="space-10"></div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

            <form class="form-signin" method="POST" action="{{ url('/resetPassword/add')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Current password</p>
                <input type="password" id="username" name="password" class="login_box" placeholder="Input current password" required autofocus>
                <p class="input_title">New password</p>
                <input type="password" id="newpass1" name="newpass1" class="login_box" placeholder="Input new password" required>
                <p class="input_title">Confirm new password</p>
                <input type="password" id="newpass2" name="newpass2" class="login_box" placeholder="Confirm new password" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Change password</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


@stop
