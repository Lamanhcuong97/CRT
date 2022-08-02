<div class="col-md-2" >
<div class="list-group">
  <a href="{{ url('/admin/user')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/user') {echo "active";} ?>">ຈັດການຂໍ້ມູນຜູ້ໃຊ້</a>
  <a href="{{ url('/admin/nat')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/nat') {echo "active";} ?>">ຈັດການຂໍ້ມູນສັນຊາດ</a>
  <a href="{{ url('/admin/curr')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/curr') {echo "active";} ?>">ຈັດການຂໍ້ມູນສະກຸນເງິນ</a>
  <a href="{{ url('/admin/rep')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/rep') {echo "active";} ?>">ຈັດການຂໍ້ມູນຜູ້ລາຍງານ</a>
  <a href="{{ url('/admin/reptype')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/reptype') {echo "active";} ?>">ຈັດການຂໍ້ມູນປະເພດຜູ້ລາຍງານ</a>
  <a href="{{ url('/admin/province')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/province') {echo "active";} ?>">ຈັດການຂໍ້ມູນແຂວງ</a>
  <a href="{{ url('/admin/district')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/district') {echo "active";} ?>">ຈັດການຂໍ້ມູນເມືອງ</a>
  <a href="{{ url('/admin/village')}}" class="list-group-item <?php if ($_SERVER['REQUEST_URI'] == '/admin/village') {echo "active";} ?>">ຈັດການຂໍ້ມູນບ້ານ</a>
</div>
</div>