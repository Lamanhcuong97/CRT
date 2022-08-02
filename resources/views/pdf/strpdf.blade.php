<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>STR PDF</title>
    <link href="{{ public_path('css/bootstrap.min.css') }}" rel="stylesheet" />
  	<link href="{{ public_path('css/mystyle.css') }}" rel="stylesheet" />
  	<link href="{{ public_path('css/font-awesome.min.css') }}" rel="stylesheet" />
    <style>
      @page {
        header: page-header;
        footer: page-footer;
        }
        @font-face{
          font-family: 'Phet';
          font-style: normal;
          font-weight: normal;
          src: url({{asset('fonts/fontawesome-webfont.ttf')}}) format('true-type');
        }
        body {
        	font-family: 'aaa';
        }
    </style>
  </head>
<body>
<div class="space-10"></div>
<div class="space-10"></div>
<div class="row">
</div>
  <div class="row animated fadeInRight">
    <div class="col-md-12">

      <div style="padding-top: 30px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
        <h4 style="text-align: center;">
          ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ <br />
          ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ <br />
          -------===000===-------
        </h4>
        <br />
        <table class="table" border="0">
          <tr>
            <td width="500">
              <div style="text-align: left;  font-size: 16px; margin-top: -40px; padding-left: 60px;">
                &nbsp;&nbsp;&nbsp;&nbsp;<br />
                &nbsp;&nbsp;&nbsp;&nbsp;<br />
                &nbsp;
              </div>
            </td>
            <td>
              <div style="padding-right:30px;text-align: right;  font-size: 16px; margin-top: -40px;padding-right: 60px;">
                  &nbsp;<br />
                  ເລກທີ: @if($strreceive -> str_no !== NULL) {{ $strreceive -> str_no }} @endif<br />
                  ວັນທີ: @if($strreceive -> str_no !== NULL) {{ date('d/m/Y', strtotime($strreceive->str_date)) }} @endif
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="2" class="text-center">
              <div style="text-align: center;">
                <br />
                <h4 class="text-lo">
                  ຮ່າງແບບພິມລາຍງານທຸລະກຳທີ່ມີລັກສະນະພາໃຫ້ສົງໄສ ສຳລັບຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ
                </h4>
              </div>
            </td>
          </tr>
          <!-- <tr>
            <td colspan="2" style="text-align: right; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 20px;padding-right:90px;">
              <br />
              <img src="{{ public_path('images/signature.jpg')}}" width="165" />
            </td>
          </tr> -->


          <tr>
            <td colspan="2">

            </td>
          </tr>
        </table>
        <table border="1">
        <tr>
          <td style="text-align: left"> <br>&nbsp;ຄຳແນະນຳ:​ ໃຫ້ຕື່ມເນື້ອໃນໃສ່ໃນແບບຟອມລາຍງານນີ້ ຫຼາຍເທົ່າທີ່ຈະຫຼາຍໄດ້. ບ່ອນໃດທີ່ມີເຄື່ອງໝາຍ (*) <br>&nbsp; ແມ່ນຈຳເປັນຕ້ອງໄດ້ຕື່ມ, ໃຫ້ຕື່ມເຄື່ອງໝາຍ (X) ໃສ່ຫ້ອງໃດທີ່ເຫັນວ່າເໝາະສົມກັບເນື້ອໃນ. ຕ້ອງໄດ້ສົ່ງແບບພິມລາຍງານນີ້ໃຫ້ແກ່ ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ 
          <br>&nbsp;(ສຕຟງ) ໂດຍດ່ວນທີ່ສຸດພາຍຫຼັງທີ່ມີການໃຊ້ບໍລິການ ຫຼື ມີທຸລະກຳເກີດຂຶ້ນ(ໃຫ້ຮັກສາຄວາມລັບພາຍຫຼັງສຳເລັດການຕື່ມເນື້ອໃນລົງໃນແບບພິມລາຍງານນີ້).

          </td>
        </tr>
        </table>
        <br />
        <p>ປະເພດຫົວໜ່ວຍທີມີໜ້າທີ່ລາຍງານ: {{ $strreceive -> reporter_type_title }}</p>
        <br />
        <p>1. <u>ລາຍລະອຽດຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ</u></p>
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;1. ຊື່ຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> str_form_reporter_name }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;2. ຊື່ເຕັມຜູ້ອະນຸມັດ:</td>
            <td width="200" height="25">&nbsp;{{ $strreceive -> approval_signature_fullname }}</td>
            <td width="200" height="25">&nbsp;3. ເລກບັດປະຈຳຕົວຜູ້ອະນຸມັດ:</td>
            <td width="200" height="25">&nbsp;{{ $strreceive -> approval_id_card }}</td>
          </tr>
        </table>

        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;4. ຊື່ເຕັມຜູ້ກວດກາ:</td>
            <td width="200" height="25">&nbsp;{{ $strreceive -> audit_signature_fullname }}</td>
            <td width="200" height="25">&nbsp;5. ເລກບັດປະຈຳຕົວຜູ້ກວດກາ:</td>
            <td width="200" height="25">&nbsp;{{ $strreceive -> audit_id_card }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;6. ຊື່ສາຂາຫົວໜ່ວຍທີ່ມີໜ້າທີ່ ລາຍງານ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> reporter_branch_name }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;7. ທີ່ຢູ່ຂອງສາຂາ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> province_name }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="250" height="25">&nbsp;8. ເບີໂທຂອງສາຂາ:</td>
            <td width="250" height="25">&nbsp;ໂທ:&nbsp;{{ $strreceive -> reporter_branch_tel }} </td>
            <td width="250" height="25">&nbsp;ແຟັກ:&nbsp;{{ $strreceive -> reporter_branch_fax }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;9. ປະເພດການເຄື່ອນໄຫວທຸລະກິດ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> reporter_business_type }}</td>
          </tr>
        </table>
        <br />
        <p>2. <u>ລາຍລະອຽດກ່ຽວກັບບຸກຄົນ/ນິຕິບຸກຄົນ ຫຼື ອົງການຈັດຕັ້ງທີ່ດຳເນີນທຸລະກຳທີ່ສົງໄສ</u></p>
        <p>2.1. <u>ໃນກໍລະນີຂອງເຈົ້າຂອງບັນຊີ/ ລູກຄ້າແມ່ນບຸກຄົນທົ່ວໄປ</u></p>

        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;10. ຊື່ ແລະ ນາມສະກຸນ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_name}} @endif</td>
            <td width="200" height="25">&nbsp;11. ສັນຊາດ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per')
              @if(!empty($strreceive->personnel_nationality))
                {{ $nat_names[$strreceive->personnel_nationality] }}
              @endif
              @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;12. ເພດ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive -> personel_gender === 'm'){{ 'ຊາຍ' }} @else {{ 'ຍິງ' }} @endif @endif</td>
            <td width="200" height="25">&nbsp;13. ບ່ອນເຮັດວຽກ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personelcol_office}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;14. ອາຊີບ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_occupation}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1" >
          <tr>
            <td width="180" rowspan="2">&nbsp;15. ວັນ, ເດືອນ, ປີ ເກີດ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
            <td width="160" rowspan="2">&nbsp;16. ສະຖານທີ່ເກີດ:</td>
            <td width="169" rowspan="2">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_pob}} @endif</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;
              @if($strreceive -> personnel_or_entity === 'per')
                @if($strreceive->personnel_dob !== NULL)
                  @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[2] }}
                @endif
              @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_dob !== NULL)
              @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[1] }}
            @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_dob !== NULL)
              @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[0] }}
            @endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;17. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ:</td>
            <td width="500" height="25" colspan="3">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_addr_proof_detail}} @endif</td>
          </tr>
          <tr>
            <td height="25">&nbsp; ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if(!empty($strreceive->personnel_addr_proof)) {{ $vl_names[$strreceive->personnel_addr_proof] }}@endif @endif</td>
            <td height="25">&nbsp; ເມືອງ:&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if(!empty($strreceive->personnel_addr_proof)) {{ $dtr_names[$vl_id_dtrs[$strreceive->personnel_addr_proof]] }}@endif @endif</td>
            <td height="25">&nbsp; ແຂວງ:&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if(!empty($strreceive->personnel_addr_proof)) {{ $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->personnel_addr_proof]]] }}@endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;18. ທີ່ຢູ່ອາໄສຖາວອນ ໃນ ສປປ ລາວ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_addr_in_laos}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;19. ທີ່ຢູ່ອາໄສຖາວອນ ຕ່າງປະເທດ ຖ້າມີ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_addr_abroad}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;20. ເບີໂທລະສັບບ້ານ:</td>
            <td width="180" height="25">&nbsp;ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_phone}} @endif </td>
            <td width="180" height="25">&nbsp;ຫ້ອງການ:&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_tel}} @endif </td>
            <td width="180" height="25">&nbsp;ມືຖື:&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_cell}} @endif </td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;21. ປະເພດເອກະສານຢັ້ງຢືນບຸກຄົນ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_type}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25">&nbsp;22. ລາຍລະອຽດເອກະສານ ຢັ້ງຢືນບຸກຄົນ:</td>
            <td colspan="5">&nbsp;</td>
          </tr>
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;ວັນອອກບັດ</td>
            <td width="50" height="25">&nbsp;ວັນ: </td>
            <td width="50" height="25">&nbsp;ເດືອນ: </td>
            <td width="50" height="25">&nbsp;ປີ: </td>
            <td width="130" height="25">&nbsp;ເລກທີ: </td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_no}} @endif</td>
          </tr>
          <tr>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_issue_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[2] }}
            @endif @endif</td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_issue_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[1] }}
            @endif @endif</td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_issue_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[0] }}
            @endif @endif</td>
            <td height="25">&nbsp;ສະຖານທີ່ອອກບັດ: </td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_issue_place}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;ວັນໝົດອາຍຸ</td>
            <td width="50" height="25">&nbsp;ວັນ: </td>
            <td width="50" height="25">&nbsp;ເດືອນ: </td>
            <td width="50" height="25">&nbsp;ປີ: </td>
            <td width="130" height="25">&nbsp;ເລກລົງທະບຽນ: </td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_register_no }} @endif</td>
          </tr>
          <tr>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_expiry_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[2] }}
            @endif @endif</td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_expiry_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[1] }}
            @endif @endif</td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') @if($strreceive->personnel_proof_expiry_date !== NULL)
              @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[0] }}
            @endif @endif</td>
            <td height="25">&nbsp;ສະຖານທີ່ລົງທະບຽນ: </td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_register_place}} @endif</td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td width="130" height="25">&nbsp;ອື່ນໆ ຖ້າມີ</td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'per') {{ $strreceive -> personnel_proof_other}} @endif</td>
          </tr>
        </table>
        <br />
        <p>2.2. <u>ໃນກໍລະນີຂອງເຈົ້າຂອງບັນຊີ/ລູກຄ້າ ເປັນນິຕິບຸກຄົນ ຫຼື ບໍລິສັດ/ທຸລະກິດ</u></p>
        <p>2.2.1. <u>ລາຍລະອຽດນິຕິບຸກຄົນ</u></p>
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;23. ຊື່:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_name }} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;24. ຮູບແບບທາງທຸລະກິດ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_business_type }} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;25. ທີ່ຕັ້ງສຳນັກງານ:</td>
            <td width="500" height="25" colspan="3">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_office_addr_detail }} @endif</td>
          </tr>
          <tr>
            <td height="25">&nbsp; ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->entities_office_addr)) {{ $vl_names[$strreceive->entities_office_addr] }}@endif @endif</td>
            <td height="25">&nbsp; ເມືອງ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->entities_office_addr)) {{ $dtr_names[$vl_id_dtrs[$strreceive->entities_office_addr]] }}@endif @endif</td>
            <td height="25">&nbsp; ແຂວງ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->entities_office_addr)) {{ $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->entities_office_addr]]] }}@endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1" >
          <tr>
            <td width="180" rowspan="2">&nbsp;26. ວັນທີ່ອະນຸຍາດໃຫ້ດຳເນີນທຸລະກິດ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
            <td width="120" rowspan="2">&nbsp;27. ທຶນຈົດທະບຽນ:</td>
            <td width="120">&nbsp;ຈຳນວນ</td>
            <td width="120">&nbsp;ສະກຸນເງິນ</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->entities_business_approve_date !== NULL)
                @php($day = explode('-', $strreceive->entities_business_approve_date)) {{ $day[2] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->entities_business_approve_date !== NULL)
                @php($day = explode('-', $strreceive->entities_business_approve_date)) {{ $day[1] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->entities_business_approve_date !== NULL)
                @php($day = explode('-', $strreceive->entities_business_approve_date)) {{ $day[0] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ number_format($strreceive -> entities_registra_capital) }} @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $curr_names[$strreceive -> entities_registra_capital_currency] }} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="50">&nbsp;28. ປະເພດການເຄື່ອນໄຫວ ອີງຕາມໃບທະບຽນວິສາຫະກິດ:</td>
            <td width="600" height="50">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_business_registration_certificate_type }} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;29. ເລກທະບຽນວິສາຫະກິດ:</td>
            <td width="180" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_business_registration_certificate_no }} @endif </td>
            <td width="180" height="25">&nbsp;30. ວັນທີ ແລະ ສະຖານທີ່ລົງທະບຽນ </td>
            <td width="180" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_business_registration_certificate_issue }} @endif </td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;31. ເລກປະຈຳຕົວຜູ້ເສຍອາກອນ:</td>
            <td width="180" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_taxpayer_no }} @endif </td>
            <td width="180" height="25">&nbsp;32. ປະເພດ: </td>
            <td width="180" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_type }} @endif </td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;33. ເລກລະຫັດ (ຖ້າມີ):</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_code }} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;34. ເບີໂທລະສັບບ້ານ:</td>
            <td width="180" height="25">&nbsp;ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_phone }} @endif </td>
            <td width="180" height="25">&nbsp;ຫ້ອງການ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_tel }} @endif </td>
            <td width="180" height="25">&nbsp;ມືຖື:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> entities_cell }} @endif </td>
          </tr>
        </table>
        <br />
	<br />
	<br />
	<br />

        <p>2.2.2. <u>ລາຍລະອຽດຂອງບຸກຄົນທົ່ວໄປ ທີ່ຕາງໜ້າໃຫ້ນິຕິບຸກຄົນ</u></p>
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;35. ຊື່ ແລະ ນາມສະກຸນ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_name}} @endif</td>
            <td width="200" height="25">&nbsp;36. ສັນຊາດ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive -> personnel_nationality))
              {{ $nat_names[$strreceive -> personnel_nationality] }}
            @endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;37. ເພດ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if($strreceive -> personel_gender === 'm'){{ 'ຊາຍ' }} @else {{ 'ຍິງ' }} @endif @endif</td>
            <td width="200" height="25">&nbsp;38. ບ່ອນເຮັດວຽກ:</td>
            <td width="200" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personelcol_office}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;39. ອາຊີບ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_occupation}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;40. ສາຍພົວພັນກັບນິຕິບຸກຄົນ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_occupation}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1" >
          <tr>
            <td width="180" rowspan="2">&nbsp;41. ວັນ, ເດືອນ, ປີ ເກີດ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
            <td width="160" rowspan="2">&nbsp;42. ສະຖານທີ່ເກີດ:</td>
            <td width="169" rowspan="2">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_pob}} @endif</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_dob !== NULL)
                @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[2] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_dob !== NULL)
                @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[1] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_dob !== NULL)
                @php($day = explode('-', $strreceive->personnel_dob)) {{ $day[0] }}
              @endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;43. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ:</td>
            <td width="500" height="25" colspan="3">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_addr_proof_detail}} @endif</td>
          </tr>
          <tr>
            <td height="25">&nbsp; ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->personnel_addr_proof)) {{ $vl_names[$strreceive->personnel_addr_proof] }}@endif @endif</td>
            <td height="25">&nbsp; ເມືອງ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->personnel_addr_proof)){{ $dtr_names[$vl_id_dtrs[$strreceive->personnel_addr_proof]] }}@endif @endif</td>
            <td height="25">&nbsp; ແຂວງ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') @if(!empty($strreceive->personnel_addr_proof)) {{ $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->personnel_addr_proof]]] }}@endif @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;44. ທີ່ຢູ່ອາໄສຖາວອນ ໃນ ສປປ ລາວ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_addr_in_laos}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;45. ທີ່ຢູ່ອາໄສຖາວອນ ຕ່າງປະເທດ ຖ້າມີ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_addr_abroad}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;46. ເບີໂທລະສັບບ້ານ:</td>
            <td width="180" height="25">&nbsp;ບ້ານ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_phone}} @endif </td>
            <td width="180" height="25">&nbsp;ຫ້ອງການ:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_tel}} @endif </td>
            <td width="180" height="25">&nbsp;ມືຖື:&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_cell}} @endif </td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;47. ປະເພດເອກະສານຢັ້ງຢືນບຸກຄົນ:</td>
            <td width="600" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_type}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25">&nbsp;48. ລາຍລະອຽດເອກະສານ ຢັ້ງຢືນບຸກຄົນ:</td>
            <td colspan="5">&nbsp;</td>
          </tr>
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;ວັນອອກບັດ</td>
            <td width="50" height="25">&nbsp;ວັນ: </td>
            <td width="50" height="25">&nbsp;ເດືອນ: </td>
            <td width="50" height="25">&nbsp;ປີ: </td>
            <td width="130" height="25">&nbsp;ເລກທີ: </td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_no}} @endif</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_issue_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[2] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_issue_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[1] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_issue_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_issue_date)) {{ $day[0] }}
              @endif @endif</td>
            <td height="25">&nbsp;ສະຖານທີ່ອອກບັດ: </td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_issue_place}} @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;ວັນໝົດອາຍຸ</td>
            <td width="50" height="25">&nbsp;ວັນ: </td>
            <td width="50" height="25">&nbsp;ເດືອນ: </td>
            <td width="50" height="25">&nbsp;ປີ: </td>
            <td width="130" height="25">&nbsp;ເລກລົງທະບຽນ: </td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_register_no }} @endif</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_expiry_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[2] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_expiry_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[1] }}
              @endif @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent')
              @if($strreceive->personnel_proof_expiry_date !== NULL)
                @php($day = explode('-', $strreceive->personnel_proof_expiry_date)) {{ $day[0] }}
              @endif @endif</td>
            <td height="25">&nbsp;ສະຖານທີ່ລົງທະບຽນ: </td>
            <td height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_register_place}} @endif</td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
            <td width="130" height="25">&nbsp;ອື່ນໆ ຖ້າມີ</td>
            <td width="220" height="25">&nbsp;@if($strreceive -> personnel_or_entity === 'ent') {{ $strreceive -> personnel_proof_other}} @endif</td>
          </tr>
        </table>
        <br />
	<br />

        <p><u>3. ລາຍລະອຽດຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ</u></p>
        @if(!empty($strreceive -> beneficiary_idbeneficiary))
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;49. ຊື່ຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> beneficiary_name }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;50. ສັນຊາດ:</td>
            <td width="600" height="25">&nbsp;@if(!empty($strreceive -> beneficiary_nationality))
              {{ $nat_names[$strreceive -> beneficiary_nationality] }}
            @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;51. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ:</td>
            <td width="500" height="25" colspan="3">&nbsp;{{ $strreceive -> beneficiary_proof_addr_detail }}</td>
          </tr>
          <tr>
            <td height="25">&nbsp; ບ້ານ:&nbsp;@if(!empty($strreceive->beneficiary_proof_addr)) {{ $vl_names[$strreceive->beneficiary_proof_addr] }}@endif</td>
            <td height="25">&nbsp; ເມືອງ:&nbsp;@if(!empty($strreceive->beneficiary_proof_addr)) {{ $dtr_names[$vl_id_dtrs[$strreceive->beneficiary_proof_addr]] }}@endif</td>
            <td height="25">&nbsp; ແຂວງ:&nbsp;@if(!empty($strreceive->beneficiary_proof_addr)) {{ $prv_names[$dtr_id_prvs[$vl_id_dtrs[$strreceive->beneficiary_proof_addr]]] }}@endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;52. ເບີໂທລະສັບບ້ານ:</td>
            <td width="180" height="25">&nbsp;ບ້ານ:&nbsp;{{ $strreceive -> beneficiary_phone }} </td>
            <td width="180" height="25">&nbsp;ຫ້ອງການ:&nbsp;{{ $strreceive -> beneficiary_tel }} </td>
            <td width="180" height="25">&nbsp;ມືຖື:&nbsp;{{ $strreceive -> beneficiary_cell }} </td>
          </tr>
        </table>
        <br />
        @else
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;49. ຊື່ຜູ້ຮັບຜົນປະໂຫຍດ/ຜູ້ຮັບປະກັນໄພ:</td>
            <td width="600" height="25">&nbsp;</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;50. ສັນຊາດ:</td>
            <td width="600" height="25">&nbsp;</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="180" height="25" rowspan="2">&nbsp;51. ທີ່ຢູ່ຕາມເອກະສານຢັ້ງຢືນ:</td>
            <td width="500" height="25" colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="25">&nbsp; ບ້ານ:&nbsp;</td>
            <td height="25">&nbsp; ເມືອງ:&nbsp;</td>
            <td height="25">&nbsp; ແຂວງ:&nbsp;</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;52. ເບີໂທລະສັບບ້ານ:</td>
            <td width="180" height="25">&nbsp;ບ້ານ:&nbsp; </td>
            <td width="180" height="25">&nbsp;ຫ້ອງການ:&nbsp; </td>
            <td width="180" height="25">&nbsp;ມືຖື:&nbsp; </td>
          </tr>
        </table>
        <br />
	<br />
	<br />
        @endif
	
	<br />
	<br />
	<br />
        <p><u>4. ລາຍລະອຽດທຸລະກຳທີ່ສົງໄສ</u></p>
        <table border="1" >
          <tr>
            <td width="180" rowspan="2">&nbsp;53. ວັນທີ ເຮັດທຸລະກຳ/ຊື້ປະກັນໄພ/ຈັດການຫຼັກຊັບ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
            <td width="180" rowspan="2">&nbsp;54. ວັນທີສົງໄສ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive->transaction_date !== NULL)
              @php($day = explode('-', $strreceive->transaction_date)) {{ $day[2] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->transaction_date !== NULL)
              @php($day = explode('-', $strreceive->transaction_date)) {{ $day[1] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->transaction_date !== NULL)
              @php($day = explode('-', $strreceive->transaction_date)) {{ $day[0] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->suspicious_date !== NULL)
              @php($day = explode('-', $strreceive->suspicious_date)) {{ $day[2] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->suspicious_date !== NULL)
              @php($day = explode('-', $strreceive->suspicious_date)) {{ $day[1] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->suspicious_date !== NULL)
              @php($day = explode('-', $strreceive->suspicious_date)) {{ $day[0] }}
            @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="200" height="25">&nbsp;55. ເລກບັນຊີ/ປະກັນໄພ:</td>
            <td width="180" height="25">&nbsp;{{ $strreceive -> acc_no_or_insurance }} </td>
            <td width="180" height="25">&nbsp;56. ປະເພດ ບັນຊີ/ປະກັນໄພ/ຫຼັກຊັບ: </td>
            <td width="180" height="25">&nbsp;{{ $strreceive -> acc_type }} </td>
          </tr>
        </table>
        <br />
        <table border="1" >
          <tr>
            <td width="180" rowspan="2">&nbsp;57. ວັນເປີດບັນຊີ:</td>
            <td width="50" height="25">&nbsp;ວັນ</td>
            <td width="50" height="25">&nbsp;ເດືອນ</td>
            <td width="50" height="25">&nbsp;ປີ</td>
          </tr>
          <tr>
            <td width="50" height="25">&nbsp;@if($strreceive->acc_open_date !== NULL)
              @php($day = explode('-', $strreceive->acc_open_date)) {{ $day[2] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->acc_open_date !== NULL)
              @php($day = explode('-', $strreceive->acc_open_date)) {{ $day[1] }}
            @endif</td>
            <td width="50" height="25">&nbsp;@if($strreceive->acc_open_date !== NULL)
              @php($day = explode('-', $strreceive->acc_open_date)) {{ $day[0] }}
            @endif</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="280px" height="25">&nbsp;58. ມູນຄ່າສະກຸນເງິນກີບທັງໝົດ:</td>
            <td width="180px" height="25">&nbsp;{{ number_format($strreceive -> total_amount) }} </td>
          </tr>

        </table>
        <br>
        <table border="1">  
        @foreach ($amt_curs as $key => $currency)
        @php       
        
        $a[$key] = $currency->amount_currency;
        $b[$key] = $currency->currency_ini_l;
        @endphp
        @endforeach
          <tr>  
            <td width="280px" height="25">&nbsp;59. ມູນຄ່າແຕ່ລະສະກຸນເງິນຕາຕ່າງປະເທດ: </td>
            <td width="280px" height="25">&nbsp; ສະກຸນເງິນ:</td>
          </tr>         
          <tr>
            <td width="280px" height="25">&nbsp; @php if (isset ($a[0])) echo number_format($a[0]); @endphp</td>
            <td width="180px" height="25">&nbsp;@php if (isset ($b[0])) echo $b[0]; @endphp</td>
          </tr>
          <tr>  
            <td width="280px" height="25">&nbsp; @php if (isset ($a[1])) echo number_format($a[1]); @endphp</td>
            <td width="180px" height="25">&nbsp;@php if (isset ($b[1])) echo $b[1]; @endphp</td>
          </tr>
          <tr>  
            <td width="280px" height="25">&nbsp; @php if (isset ($a[2])) echo number_format($a[2]); @endphp</td>
            <td width="180px" height="25">&nbsp;@php if (isset ($b[2])) echo $b[2]; @endphp</td>
          </tr>
        </table>








        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;60. ປະເພດທຸລະກຳ:</td>
            <td width="600" height="25">&nbsp;{{ $strreceive -> transaction_type }}</td>
          </tr>
        </table>
        <br />
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;61. ອະທິບາຍກ່ຽວກັບທຸລະກຳ</td>
          </tr>
        </table>
        <br />
        <p>{{ $strreceive -> suspicious_transaction_describe }}</p>
        <table border="1">
          <tr>
            <td width="220" height="25">&nbsp;62. ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ:</td>
          </tr>
        </table>
        <br />
        <p>{{ $strreceive -> suspicious_clue }}</p>

        <table border="1">
          <tr>
            <td colspan="2" height="30" class="text-center"><h4>&nbsp;ສຳລັບສໍານັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ ເທົ່ານັ້ນ (OFFICIAL USE ONLY AMLIO)</h4></td>
          </tr>
          <tr>
            <td class="text-center" width="400" height="150">
              <p>&nbsp;ວັນທີ ທີ່ໄດ້ຮັບແບບພິມລາຍງານ (Date Report Received):</p>
              <br />
              <p>&nbsp;ວັນທີ ທີ່ແບບພິມລາຍງານໄດ້ລົງໃນບັນທຶກ (Date Report Entered):</p>
              <br />
              <p>&nbsp;ເລກທີ ບົດລາຍງານອ້າງອີງຂອງສໍານັກງານ AMLIO:</p>
              <p>&nbsp;(AMLIO Unique Report Reference Number):</p>
              <br />

            </td>
            <td width="350" height="150"></td>
          </tr>
        </table>




      </div>
    </div>
  </div>

  <!-- <htmlpagefooter name="page-footer">
    <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 20px; padding-bottom: 40px; padding-top: 20px;">
      ຕິດຕໍ່: ພະແນກວິເຄາະຂ່າວກອງ, ໂທລະສັບ: 021-264506, ແຟັກ: 021-265307
    </div>
  </htmlpagefooter> -->

  <htmlpagefooter name="page-footer">
    <div style="text-align: center; font-size: 13px; padding-left: 20px; padding-bottom: 10px; padding-top: 20px;">
      ໜ້າທີ {PAGENO}
    </div>
  </htmlpagefooter>

</body>
</html>
