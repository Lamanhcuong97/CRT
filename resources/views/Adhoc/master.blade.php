
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ສຕຟງ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ url('/css/adhoc/aaa.css')}}" rel="stylesheet"/>



<style type="text/css"> 
	.modal-login {
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 18px;
	}
	.modal-login .form-control {
		padding-left: 40px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #6464CD;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #0000CD;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	.card-container.card {
		max-width: 350px;
	}
	.card {
		background-color: #F9FFFF;
		padding: 1px 25px 30px;
		margin: 0 auto 25px;
		margin-top: 15%x;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}	
	.form-signin input[type=email], .form-signin input[type=password], .form-signin input[type=text], .form-signin button {
    width: 100%;
    display: block;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.login_box {
    background: #f7f7f7;
    border: 3px solid #F4F4F4;
    padding-left: 15px;
    margin-bottom: 25px;
}

.space-10, [class*=vspace-10] {
    max-height: 1px;
    min-height: 1px;
    overflow: hidden;
    margin: 10px 0 9px;
}
</style>


</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a href="{{ url('indexLa')}}" class="navbar-brand"><img src="css/adhoc/img/AMLIO logo2.png" alt="ສຕຟງ"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('EffectivenessReport')}}">Effectiveness Report | </a></li>
        <li><a href="{{ url('TechnicalComplianceReport')}}">Technical Compliance Report | </a></li>     
          <li><a href="#"> Photo | </a></li>    
          <!--footer<li><a href="subLegal">Article | </a></li>-->
        </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/resetPassword') }}">Reset Password</a></li>
        <li><a href="{{ url('/logout') }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>  
    
  
</br>
</br>
</br>

<div class="container"> 

 <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
     <img src="css/adhoc/img/amliob.png" width="100%">
	 </div>
  </div>
 </div>
</br>
@yield('content')
                </div>
                 </div>
                
            </div>
           </div>
      </div>
    </div>   
</div>
        

  

<br>
<br>
<br>
<br>
<br>





 <div class="navbar navbar-default navbar-fixed-bottom"> <!--footer-->
    <div class="container">
      
	  <p class="navbar-text pull-left">Copyright © 2019 developed by Information Technology Division AMLIO.</p>
      
      <!-- <a href="contact.php" class="navbar-btn btn-primary btn pull-right"> -->
      <!-- <span class="glyphicon glyphicon-star"></span>Contact AMLIO</a> -->
    </div>
  </div> <!--footer-->
</div>   


<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Reset Password</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form id ="myField" action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Old Password" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="New Password" required="required">					
					</div>
          <div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Re-enter Password" required="required">					
					</div>
					<div class="form-group">
						<input type="button" class="btn btn-primary btn-block btn-lg" value="Reset" id="reset-password">
					</div>
				</form>				
				
			</div>
			<!-- <div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div> -->
		</div>
	</div>
</div>
    
</body>


<script>
window.aaa = setInterval(function(){ 
    window.location = "{{ url('/logout') }}";
    return false;
   }, 600000); //1 นาที = 60000 มิลลิวินาที

$(document).ready(function(){
  $(document).mousemove(function(event){
    clearInterval(window.aaa);
    window.aaa = setInterval(function(){
      window.location = "{{ url('/logout') }}";
      return false;
     }, 600000);
  });
});


</script>

</html>