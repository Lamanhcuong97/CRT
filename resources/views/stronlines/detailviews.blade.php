@extends($mainpage)
@section('page_title', 'details report')
@section('content')

<div class="space-10"></div>
<div class="space-10"></div>
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action={{ url('/strdetailshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
    <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກລາຍລະອຽດ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> ເລືອກປະເພດ </label>
                <div class="col-sm-9">
      							<select class="form-control" name="report_detail_type" id="form-field-select-1" >

                      <option value="1" @if($report_detail_type ==1) selected="selected" @endif>ລາຍລະອຽດຫົວໜ່ວຍທີ່ມີໜ້າທີລາຍງານ</option>
                      <option value="2" @if($report_detail_type ==2) selected="selected" @endif>ລາຍລະອຽດກ່ຽວກັບບຸກຄົນ</option>
                      <option value="3" @if($report_detail_type ==3) selected="selected" @endif>ລາຍລະອຽດຂອງນິຕິບຸກຄົນ</option>
                      <option value="4" @if($report_detail_type ==4) selected="selected" @endif>ລາຍລະອຽດຄົນມາເຮັດທຸລະກຳແທນ (ນິຕິບຸກຄົນ)</option>
                      <option value="5" @if($report_detail_type ==5) selected="selected" @endif>ລາຍລະອຽດຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ (ຖ້າມີ)</option>
    								  <option value="6" @if($report_detail_type ==6) selected="selected" @endif>ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ</option>

                    </select>
      					</div>
              </div>

              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($ssdate)){{ $ssdate }}@endif" tabindex="1" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate"> ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($sedate)){{ $sedate }}@endif" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="3">ຄົ້ນຫາ</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="space-30"></div>
</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			ຜົນການຄົ້ນຫາລາຍງານ STR ແບບລະອຽດ
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>

              @if($report_detail_type == 1)
  							<th class="center">ລ/ດ</th>
  							<th>ຫົວໜ່ວຍທີ່ລາຍງານ</th>
  							<th>ຊື່ຜູ້ອະນຸມັດ</th>
  							<th>ບັດຜູ້ອະນຸມັດ</th>
  							<th>ຊື່ຜູ້ກວດກາ</th>
  							<th>ບັດຜູ້ກວດກາ</th>
                <th>ຊື່ສາຂາທີ່ລາຍງານ</th>
                <th>ທີ່ຢູ່</th>
                <th>ເບີໂທ-ແຟັກ</th>
                <th>ປະເພດເຄື່ອນໄຫວ</th>
              @elseif($report_detail_type == 2)
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່ ແລະ ນາມສະກຸນ</th>
  							<th>ສັນຊາດ</th>
  							<th>ເພດ</th>
  							<th>ບ່ອນເຮັດວຽກ</th>
  							<th>ອາຊີບ</th>
                <th>ວດປ ເກີດ</th>
                <th>ເກີດທີ່</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
  							<th>ທີ່ຢູ່ຕາມ ເອກະສານຢັ້ງຢືນ</th>
  							<th>ບ້ານຢູ່ປັດຈຸບັນ</th>
  							<th>ທີ່ຢູ່ອາໃສຖາວອນ ຢູ່ຕ່າງປະເທດ</th>
  							<th>ໂທລະສັບ</th>
                <th>ປະເພດ ເອກະສານຢັ້ງຢືນ</th>
                <th>ວດປ ອອກບັດ</th>
                <th>ສະຖານທີອອກບັດ</th>
                <th>ວດປ ໝົດອາຍຸ</th>
              @elseif($report_detail_type == 3)
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່</th>
  							<th>ຮູບແບບທາງທຸລະກິດ</th>
  							<th>ທີ່ຕັ້ງສຳນັກງານ (ບ້ານ)</th>
  							<th>ເມືອງ</th>
  							<th>ແຂວງ</th>
                <th>ວັນທີອະນຸຍາດດຳເນີນທຸລະກິດ</th>
                <th>ທຶນຈົດທະບຽນ</th>
                <th>ສະກຸນເງິນ</th>
                <th>ປະເພດການເຄື່ອໄຫວ</th>
                <th>ທະບຽນວິສາຫະກິດ</th>
  							<th>ວັນທີ ແລະ ສະຖານທີ່ລົງທະບຽນ</th>
  							<th>ບັດປະຈຳຕົວຜູ້ເສຍອາກອນ</th>
  							<th>ປະເພດ</th>
  							<th>ເລກລະຫັດ</th>
                <th>ໂທລະສັບ</th>
              @elseif($report_detail_type == 4)
  							<th class="center">ລ/ດ</th>
  							<th>ຊື່ ແລະ ນາມສະກຸນ</th>
  							<th>ສັນຊາດ</th>
  							<th>ເພດ</th>
  							<th>ບ່ອນເຮັດວຽກ</th>
                <th>ອາຊີບ</th>
  							<th>ພົວພັນນິຕິບຸກຄົນ</th>
                <th>ວດປ ເກີດ</th>
                <th>ເກີດທີ່</th>
                <th>ບ້ານ</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
  							<th>ທີ່ຢູ່ຕາມ ເອກະສານຢັ້ງຢືນ</th>
  							<th>ບ້ານຢູ່ປັດຈຸບັນ</th>
  							<th>ທີ່ຢູ່ອາໃສຖາວອນ ຢູ່ຕ່າງປະເທດ</th>
  							<th>ໂທລະສັບ</th>
                <th>ປະເພດ ເອກະສານຢັ້ງຢືນ</th>
                <th>ວດປ ອອກບັດ</th>
                <th>ສະຖານທີອອກບັດ</th>
                <th>ວດປ ໝົດອາຍຸ</th>
              @elseif($report_detail_type == 5)
                <th class="center">ລ/ດ</th>
                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                <th>ສັນຊາດ</th>
                <th>ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ(ບ້ານ)</th>
                <th>ເມືອງ</th>
                <th>ແຂວງ</th>
                <th>ໂທລະສັບ</th>
              @elseif($report_detail_type == 6)
  							<th class="center">ລ/ດ</th>
               
  							<th>ວດປ ເຮັດທຸລະກຳ</th>
  							<th>ວດປ ສົງໄສ</th>
  							<th>ເລກບັນຊີ/ປະກັນໄພ</th>
  							<th>ປະເພດບັນຊີ/ປະກັນໄພ/ຫຼັກຊັບ</th>
                <th>ວດປ ເປີດບັນຊີ</th>
  							<th>ມູນຄ່າທັງໝົດເປັນກີບ</th>
                <th>ມູນຄ່າແຍກສະກຸນເງິນຕາ</th>
                <th>ປະເພດທຸລະກຳ</th>
                <th>ອະທິບາຍທຸລະກຳທີ່ພາໃຫ້ສົງໄສ</th>
                <th>ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ</th>
              @endif
						</tr>
					</thead>

					<tbody>
            @if($report_detail_type == 1)
              @if(isset($strdetailreports))
                @if( count($strdetailreports) > 0)
                  @foreach($strdetailreports as $strdetailreport => $name)
                    <tr>
                      <td class="center">{{ $strdetailreport+1 }}</td>
                      <td>{{ $name->str_form_reporter_name}}</td>
                      <td>{{ $name->approval_signature_fullname }}</td>
                      <td>{{ $name->approval_id_card }}</td>
          						<td>{{ $name->audit_signature_fullname }}</td>
          						<td>{{ $name->audit_id_card }}</td>
          						<td>{{ $name->reporter_branch_name }}</td>
                      <td>{{ $name->province_name }}</td>
                      <td>{{ $name->reporter_branch_tel }} @if($name->reporter_branch_fax !== NULL){{ '; ' . $name->reporter_branch_fax }} @endif</td>
          						<td>{{ $name->reporter_business_type }}</td>
          					</tr>
                  @endforeach
                @endif
              @else
              <tr>
                <td colspan="10" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif

            @elseif($report_detail_type == 2)
              @if(isset($strdetailreport2s))
                @if( count($strdetailreport2s) > 0)
                  @foreach($strdetailreport2s as $strdetailreport2 => $name2)
                    <tr>
                      <td class="center">{{ $strdetailreport2+1 }}</td>
                      <td>{{ $name2->personnel_name }}</td>
                      <td>{{ $name2->nationality_name }}</td>
                      <td>@if($name2->personel_gender == 'm'){{ 'ຊາຍ' }}@elseif($name2->personel_gender == 'f'){{ 'ຍິງ' }}@endif</td>
                      <td>{{ $name2->personelcol_office }}</td>
                      <td>{{ $name2->personnel_occupation }}</td>
                      <td>{{ date('d/m/Y',strtotime($name2->personnel_dob)) }}</td>
                      <td>{{ $name2->personnel_pob }}</td>
                      <td>{{ $name2->village_name }}</td>
                      <td>{{ $name2->district_name }}</td>
                      <td>{{ $name2->province_name }}</td>
                      <td>{{ $name2->personnel_addr_proof }}</td>
                      <td>{{ $name2->personnel_addr_in_laos }}</td>
                      <td>{{ $name2->personnel_addr_abroad }}</td>
                      <td>{{ $name2->personnel_phone }}</td>
                      <td>{{ $name2->personnel_proof_type }}</td>
                      <td>{{ date('d/m/Y', strtotime($name2->personnel_proof_issue_date)) }}</td>
                      <td>{{ $name2->personnel_proof_issue_place }}</td>
                      <td>{{ date('d/m/Y', strtotime($name2->personnel_proof_expiry_date)) }}</td>
                    </tr>
                  @endforeach
                @endif
              @else
              <tr>
                <td colspan="19" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif

            @elseif($report_detail_type == 3)
              @if(isset($strdetailreport3s))
                @if( count($strdetailreport3s) > 0)
                  @foreach($strdetailreport3s as $strdetailreport3 => $name3)
                    <tr>
                      <td class="center">{{ $strdetailreport3+1 }}</td>
                      <td>{{ $name3->entities_name }}</td>
                      <td>{{ $name3->entities_business_type }}</td>
                      <td>{{ $name3->village_name }}</td>
                      <td>{{ $name3->district_name }}</td>
                      <td>{{ $name3->province_name }}</td>
                      <td>{{ date('d/m/Y',strtotime($name3->entities_business_approve_date)) }}</td>
                      <td>{{ number_format($name3->entities_registra_capital) }}</td>
                      <td>{{ $name3->currency_ini_l }}</td>
                      <td>{{ $name3->entities_business_registration_certificate_type }}</td>
                      <td>{{ $name3->entities_business_registration_certificate_no }}</td>
                      <td>{{ $name3->entities_business_registration_certificate_issue }}</td>
                      <td>{{ $name3->entities_taxpayer_no }}</td>
                      <td>{{ $name3->entities_type }}</td>
                      <td>{{ $name3->entities_code }}</td>
                      <td>{{ $name3->entities_phone }}</td>
                    </tr>
                  @endforeach
                @endif
              @else
              <tr>
                <td colspan="16" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif

            @elseif($report_detail_type == 4)
              @if(isset($strdetailreport4s))
                @if( count($strdetailreport4s) > 0)
                  @foreach($strdetailreport4s as $strdetailreport4 => $name4)
                    <tr>
                      <td class="center">{{ $strdetailreport4+1 }}</td>
                      <td>{{ $name4->personnel_name }}</td>
                      <td>{{ $name4->nationality_name }}</td>
                      <td>@if($name4->personel_gender == 'm'){{ 'ຊາຍ' }}@elseif($name4->personel_gender == 'f'){{ 'ຍິງ' }}@endif</td>
                      <td>{{ $name4->personelcol_office }}</td>
                      <td>{{ $name4->personnel_occupation }}</td>
                      <td>{{ $name4->personnel_entity_relation }}</td>
                      <td>{{ date('d/m/Y',strtotime($name4->personnel_dob)) }}</td>
                      <td>{{ $name4->personnel_pob }}</td>
                      <td>{{ $name4->village_name }}</td>
                      <td>{{ $name4->district_name }}</td>
                      <td>{{ $name4->province_name }}</td>
                      <td>{{ $name4->personnel_addr_proof }}</td>
                      <td>{{ $name4->personnel_addr_in_laos }}</td>
                      <td>{{ $name4->personnel_addr_abroad }}</td>
                      <td>{{ $name4->personnel_phone }}</td>
                      <td>{{ $name4->personnel_proof_type }}</td>
                      <td>{{ date('d/m/Y', strtotime($name4->personnel_proof_issue_date)) }}</td>
                      <td>{{ $name4->personnel_proof_issue_place }}</td>
                      <td>{{ date('d/m/Y', strtotime($name4->personnel_proof_expiry_date)) }}</td>
                    </tr>
                  @endforeach
                @endif
              @else
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif

            @elseif($report_detail_type == 5)
              @if(isset($strdetailreport5s))
                @if( count($strdetailreport5s) > 0)
                  @foreach($strdetailreport5s as $strdetailreport5 => $name5)
                    <tr>
                      <td class="center">{{ $strdetailreport5+1 }}</td>
                      <td>{{ $name5->beneficiary_name }}</td>
                      <td>{{ $name5->nationality_name }}</td>
                      <td>{{ $name5->village_name }}</td>
                      <td>{{ $name5->district_name }}</td>
                      <td>{{ $name5->province_name }}</td>
                      <td>{{ $name5->beneficiary_phone }}</td>
                    </tr>
                  @endforeach
                @endif

              @else
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif

            @elseif($report_detail_type == 6)
              @if(isset($strdetailreport6s))
                @if( count($strdetailreport6s) > 0)


                @if(isset($amt_curs))

                  @php ($ordernumber = array())
                  @php ($laststrdetail = 1)
                  @foreach($amt_curs as $amt_cur)

                    @if($laststrdetail == $amt_cur->str_detail_idstr_detail)

                    @else

                    @endif

                  @endforeach



                @endif


                  @foreach($strdetailreport6s as $strdetailreport6 => $name6)
                    <tr>
                      <td class="center">{{ $strdetailreport6+1 }}</td>
                    
                      <td>@if($name6->transaction_date !== NULL) {{ date('d/m/Y', strtotime($name6->transaction_date)) }} @endif</td>
                      <td>@if($name6->suspicious_date !== NULL) {{ date('d/m/Y', strtotime($name6->suspicious_date)) }} @endif</td>
                      <td>{{ $name6->acc_no_or_insurance }}</td>
                      <td>{{ $name6->acc_type }}</td>
                      <td>@if($name6->acc_open_date !== NULL) {{ date('d/m/Y', strtotime($name6->acc_open_date)) }} @endif</td>
                      <td class="text-right">@if($name6->total_amount > 0) {{ number_format($name6->total_amount) }} @endif</td>
                      <td></td>
                      <td>{{ $name6->transaction_type }}</td>
                      <td>{{ $name6->suspicious_transaction_describe }} @if($name6->suspicious_transaction_describe_file !== null) <a href={{ url($name6->suspicious_transaction_describe_file) }}>[ເອກະສານ]</a> @endif</td>
                      <td>{{ $name6->suspicious_clue }}@if($name6->suspicious_clue_file !== null) <a href={{ url($name6->suspicious_clue_file) }}>[ເອກະສານ]</a> @endif</td>
                    </tr>

                    @if(isset($amount[$name6->idstr_detail]))
                      @if(count($amount[$name6->idstr_detail]) > 0)

                        @php($count = count($amount[$name6->idstr_detail]))

                        @for($i = 1; $i <= $count; $i++)


                          <tr>
                            <td class="center">{{ $strdetailreport6+1 . '.' . $i }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $i }}</td>

                            <td>{{ number_format($amount[$name6->idstr_detail][$i]) . ' (' . $currency[$name6->idstr_detail][$i] . ')' }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                        @endfor
                      @endif
                    @endif



                  @endforeach
                @endif

              @else
              <tr>
                <td colspan="18" class="center">ບໍ່ມີຂໍ້ມູນ</td>
              </tr>
              @endif
            @endif
					</tbody>
				</table>
      </div>
    </div>
  </div>



@stop
