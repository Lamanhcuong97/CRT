<?php $__env->startSection('page_title', 'ເເລກປ່ຽນຂໍ້ມູນກັບບັນດາທະນາຄານ'); ?>
<?php $__env->startSection('content'); ?>



<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ຮ່າງແບບພິມຂໍຂໍ້ມູນຈາກຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ *</strong> </h2>
  </blockquote>
</div>
<br>

<form  class="form-horizontal" method="POST" action=<?php echo e(route('send-report')); ?> role="form" enctype="multipart/form-data" accept-charset="UTF-8">
<?php echo e(csrf_field()); ?>

  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ແບບຟອມຂໍຂໍ້ມູນ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        
<?php if(Session::has('success')): ?>
    <div class="alert alert-success text-center" style="font-size: 30px;">
        <?php echo Session::get('success'); ?>

    </div>
<?php endif; ?>


<?php if(Session::has('error')): ?>
    <div class="alert alert-danger  text-center"  style="font-size: 30px;">
        <?php echo Session::get('error'); ?>

    </div>
<?php endif; ?>
<div id="accordion" class="accordion-style1 panel-group text-lo">



		  <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານ ເລກທີ (*)</label>
          <div class="col-sm-3">
            <input type="text" name="report_number" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"  style = "color:red">ເອກະສານເລື່ອງ  (*) </label>
          <div class="col-sm-3">
            <input type="text" name="title" class="col-xs-12 col-sm-12" required/>
          </div>
      </div>

		  <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ມື້ລົງລາຍເຊັນ  (*)</label>
          <div class="col-sm-3">
            <input type="date" name="sign_date" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"  style = "color:red">ປະເພດເອກະສານ  (*)</label>
          <div class="col-sm-3">
          <select name="type" class="col-xs-12 col-sm-12" required>
                    <option value="ດ່ວນ">ດ່ວນ</option>
                    <option value="ທຳມະດາ">ທຳມະດາ</option>
          </select>
          </div>
      </div>


      <!-- Send files -->
      <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານທີ່ມີລາຍເຊັນ  (*)</label>
          <div class="col-sm-3">
            <input type="file" name="sign_file" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1"  style = "color:red">ເອກະສານຄັດຕິດ  </label>
          <div class="col-sm-3">
            <input type="file" name="attach_file[]" class="col-xs-12 col-sm-12" multiple="" />
          </div>
      </div>


      <!-- Groups + reporters -->
    <div class="form-group">
        <!-- Group List -->
        <div class="col-sm-6">
            <label><b>ເລືອກຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</b></label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="select-all-groups">
                <label class="form-check-label">
                    <b>ເລືອກທັງຫມົດ</b>
                </label>
            </div>

            <?php $__currentLoopData = $reporter_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporter_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check">
                <input class="form-check-input group-checkbox" type="checkbox" value="<?php echo e($reporter_type->idreporter_type); ?>">
                <label class="form-check-label">
                    <?php echo e($reporter_type->reporter_type_title); ?>

                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Reporter List -->
        <div class="col-sm-6" id="reporterList">
            <label ><b>ເລືອກຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</b></label>
            <small id="total_reporters" class="text-danger font-weight-bold"></small>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="select-all-reporters">
                <label class="form-check-label">
                   <b>ເລືອກທັງຫມົດ</b>
                </label>
            </div>

            <?php $__currentLoopData = $reporters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check reporter-<?php echo e($reporter->reporter_type_idreporter_type); ?> reporter-checkbox-div" style="display: none">
                <input class="form-check-input reporter-checkbox" name="reporter[]" type="checkbox" value="<?php echo e($reporter->idreporter); ?>">
                <label class="form-check-label">
                    <?php echo e($reporter->reporter_name); ?>

                </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
      


        <!-- <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <br />
            <p><a href="<?php echo e(url('lawrefer')); ?>">ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.</a></p>
          </div>
				</div> -->

        <div class="clearfix form-actions">
					<div class="col-sm-offset-1 col-sm-10 text-center">
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							ຍົກເລີກ
						</button>
            &nbsp; &nbsp; &nbsp;
       
						<button class="btn btn-primary" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							ສົ່ງເອກະສານ
						</button>
					</div>
				</div>
      </div><!-- end accordion -->
			</div>
		</div>
  </div>
</div>


</form>



    
  <!-- <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>


  

    
<?php $__env->stopSection(); ?>
 -->

 <?php $__env->startSection('custom_js'); ?>




<script type="text/javascript">
 
    function countCheckedBox() {
        
        var x = $(".reporter-checkbox:checked").length;
        
        $("#total_reporters").empty();
        $("#total_reporters").append(x + " selected");
    }
    
    $(".group-checkbox").click(function(){
        
        if (this.checked) {
           
            $("#reporterList .reporter-"+this.value+"").css("display", "");
        } else {
            
            $("#reporterList .reporter-"+this.value+" .reporter-checkbox").prop('checked', false);
            $("#select-all-reporters").prop('checked', false);
           
            $("#reporterList .reporter-"+this.value+"").css("display", "none");
        }
        countCheckedBox();
    })
    
    $(".reporter-checkbox").click(function(){
        countCheckedBox();
    })
    
    $("#select-all-groups").click(function(){
        
        $(".group-checkbox").prop('checked', this.checked);
        
        this.checked
        ?
        $("#reporterList .reporter-checkbox-div").css("display", "")
        :
        $("#reporterList .reporter-checkbox-div").css("display", "none");
        $("#reporterList .reporter-checkbox").prop('checked', false);
        $("#select-all-reporters").prop('checked', false);
        countCheckedBox();
    })
    
    $("#select-all-reporters").click(function(){
        var check_value = this.checked;
        
        $.each($(".reporter-checkbox-div"), function( i, val){
            if ($(this).css("display") !== "none") {
                $(this).find("input:eq(0)").prop('checked', check_value);
            }
        })
        countCheckedBox();
    })
</script>

<?php $__env->stopSection(); ?>
 


<?php echo $__env->make('layouts.boymain', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>