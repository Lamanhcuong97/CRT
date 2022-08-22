<?php $__env->startSection('page_title', 'Comment report'); ?>
<?php $__env->startSection('content'); ?>

<div class="space-5"></div>





  <div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  	 
     
      <div class="row">
  <div class="col-md-12">
  <form  class="form-horizontal" method="GET" action=<?php echo e(url('ctrstats')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  <?php echo e(csrf_field()); ?>

  <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ສັງລວມສະຖິຕິ CTR </h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>
</div>

              <!-- reporter  -->
              <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1">ຊື່ຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ  </label>
              <div class="col-sm-6">
              <select name="reporter" class="col-xs-12 col-sm-12" required>
                  <option value="all_re" selected>ເລືອກຫົວຫນ່ວຍທັງຫມົດ</option>
                <?php $__currentLoopData = $reporters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($reporter->idreporter); ?>"><?php echo e($reporter->reporter_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
              </select>
              </div>
            </div> 


              <!-- date form  -->
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="sdate"  type="date" required >
                  </div>
              
                <label class="col-sm-1 control-label no-padding-right" for="edate">  ເຖິງ</label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="edate" type="date" required>
                </div>
                <div >
                  <button type="submit" class="btn btn-sm btn-primary" style="width:85px;">ຄົ້ນຫາ</button>
                </div>
              </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>
</div>



      <div style="background-color: #F7F7F7; padding:1px 30px; font-size:16px;" >
      <h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ສະຖິຕິ CTR ບຸກຄົນ ມີທັງຫມົດ <?php echo e($p_all_trans); ?> ທຸລະກຳ ນັບແຕ່ <?php echo e(date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))); ?></h3>

      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">ລຳດັບ</th>
      <th scope="col" class="bg-primary">ສະກຸນເງິນ</th>
      <th scope="col" class="bg-primary">ຈຳນວນທຸລະກຳ</th>
      <th scope="col" class="bg-primary">ຈຳນວນເງິນ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ກີບ</td>
      <td><?php echo e(number_format($pk_trans)); ?></td>
      <td><?php echo e(number_format($pk_amount)); ?> ກີບ </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ບາດ</td>
      <td><?php echo e(number_format($pb_trans)); ?></td>
      <td><?php echo e(number_format($pb_amount)); ?> ບາດ </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ໂດລາ</td>
      <td><?php echo e(number_format($pdl_trans)); ?></td>
      <td><?php echo e(number_format($pdl_amount)); ?> ໂດລາ </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ຢວນ</td>
      <td><?php echo e(number_format($py_trans)); ?></td>
      <td><?php echo e(number_format($py_amount)); ?> ຢວນ </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ດົງ</td>
      <td><?php echo e(number_format($pd_trans)); ?></td>
      <td><?php echo e(number_format($pd_amount)); ?> ດົງ </td>
    </tr>
  </tbody>
</table>
      
     
<h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ສະຖິຕິ CTR ນິຕິບຸກຄົນ ມີທັງຫມົດ <?php echo e($l_all_trans); ?> ທຸລະກຳ ນັບແຕ່ <?php echo e(date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))); ?></h3>
    
      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">ລຳດັບ</th>
      <th scope="col" class="bg-primary" >ສະກຸນເງິນ</th>
      <th scope="col" class="bg-primary">ຈຳນວນທຸລະກຳ</th>
      <th scope="col" class="bg-primary">ຈຳນວນເງິນ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr>
      <th scope="row">1</th>
      <td>ກີບ</td>
      <td><?php echo e(number_format($pk_trans)); ?></td>
      <td><?php echo e(number_format($pk_amount)); ?> ກີບ </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ບາດ</td>
      <td><?php echo e(number_format($pb_trans)); ?></td>
      <td><?php echo e(number_format($pb_amount)); ?> ບາດ </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ໂດລາ</td>
      <td><?php echo e(number_format($pdl_trans)); ?></td>
      <td><?php echo e(number_format($pdl_amount)); ?> ໂດລາ </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ຢວນ</td>
      <td><?php echo e(number_format($py_trans)); ?></td>
      <td><?php echo e(number_format($py_amount)); ?> ຢວນ </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ດົງ</td>
      <td><?php echo e(number_format($pd_trans)); ?></td>
      <td><?php echo e(number_format($pd_amount)); ?> ດົງ </td>
    </tr>
  </tbody>
</table>


<h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ລາຍຊື່ຫົວຫນ່ວຍທີ່ລາຍງານມາ <?php echo e($l_all_trans); ?> ທຸລະກຳ ນັບແຕ່ <?php echo e(date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))); ?></h3>


      <h3 style="font-family:Phetsarath OT">ຫົວຫນ່ວຍທີ່ລາຍງານມາ ຊື່....... ຈຳນວນຄັ້ງ..............</h3>
      <h3 style="font-family:Phetsarath OT">ຫົວຫນ່ວຍທີ່ບໍ່ລາຍງານມາ ຊື່.....  ຈຳນວນຄັ້ງ.............</h3>

         
        
      </div>
    </div>
  </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_ctrstats', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>