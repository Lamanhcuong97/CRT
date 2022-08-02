<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try {
			ace.settings.loadState( 'sidebar' )
		} catch ( e ) {}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
							<i class="ace-icon fa fa-download"></i>
						</button>
		

			<button class="btn btn-info">
							<i class="ace-icon fa fa-list-alt"></i>
						</button>
		

			<button class="btn btn-warning">
							<i class="ace-icon fa fa-credit-card"></i>
						</button>
		

			<button class="btn btn-danger">
							<i class="ace-icon fa fa-bar-chart-o"></i>
						</button>
		
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div>
	<!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">

		

		<li class="active open">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-bar-chart-o"></i>
				<span class="menu-text">ລາຍງານ CBR </span>
				<b class="arrow fa fa-angle-down"></b>								
			</a>
			<ul class="submenu">			
			@php
			if (Auth::user()->role_idrole==4) {
			@endphp	
				<li class="">
					<a href="{{url('addcbr')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						<button type="button" class="btn btn-primary btn-block">ແບບຟອມລາຍງານ</button>
					</a>

					<b class="arrow"></b>
				</li>
			@php	
			}
			@endphp
			


				<li class="">
					<a href="{{url('viewcbr')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						<button type="button" class="btn btn-primary btn-block">ລາຍງານທັງໝົດ</button>
					</a>

					<b class="arrow"></b>							
				</li>
				
				
				<li class="">
					<a href="amliostr/public/fileattaches/ຄູ່ມື CBR.pdf" download>
						<i class="menu-icon fa fa-caret-right"></i>
						<button type="button" class="btn btn-primary btn-block">ຄູ່ມື ການລາຍງານ</button>
					</a>

					<b class="arrow"></b>							
				</li>
				

				<li class="">
					<a href="{{url('reset')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						<button type="button" class="btn btn-primary btn-block">ປ່ຽນລະຫັດຜ່ານ</button>
						
					</a>

					<b class="arrow"></b>							
				</li>
				

				<li class="">
					<a href="{{url('/logout')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						<button type="button" class="btn btn-danger btn-block">ອອກຈາກລະບົບ</button>
					</a>
					<b class="arrow"></b>							
				</li>

			
			</ul>			
		</li>

		

		
	</ul>
	<!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>