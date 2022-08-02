<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>STR Reply</title>
    <link href="{{ public_path('css/bootstrap.min.css') }}" rel="stylesheet" />
  	<link href="{{ public_path('css/mystyle.css') }}" rel="stylesheet" />
  	<link href="{{ public_path('css/font-awesome.min.css') }}" rel="stylesheet" />
    <style>
      @page {
        header: page-header;
        footer: page-footer;
        }
        body {
        	font-family: 'aaa', sans-serif;
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
        <h4 style="text-align: center; font-family: 'Phetsarath OT'">
          ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ <br />
          ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ <br />
          -------===000===-------
        </h4>
        <br />
        <table class="table" border="0">
          <tr>
            <td width="400">
              <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 16px; margin-top: -40px; padding-left: 60px;">
                &nbsp;&nbsp;&nbsp;&nbsp;ທະນາຄານແຫ່ງ ສປປ ລາວ<br />
                &nbsp;&nbsp;&nbsp;&nbsp;ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ<br />
                &nbsp;
              </div>
            </td>
            <td>
              <div style="padding-right:30px;text-align: right; font-family: 'Phetsarath OT'; font-size: 16px; margin-top: -40px;padding-right: 60px;">
                  &nbsp;<br />
                  ເລກທີ: {{ $replycont->str_reply_no }}<br />
                  ນະຄອນຫຼວງວຽງຈັນ,​ ວັນທີ {{ date('d/m/Y', strtotime($replycont->created_at)) }}
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="2" class="text-center">
              <div style="text-align: center; font-family: 'Phetsarath OT'; margin-top: -20px;">
                <h3 class="text-lo">
                  <u>ແຈ້ງຕອບ</u>
                </h3>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: left; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 60px;">
              <br />
              <div>ເຖິງ: {{ $replycont->str_reply_topic }}</div>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: right; font-family: 'Phetsarath OT'; font-size: 16px; padding-right: 200px;">
              <div>
                ທີ່ນັບຖື,
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: left; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 60px;">
                ເລື່ອງ: ຢັ້ງຢຶນການໄດ້ຮັບລາຍງານ.
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: left; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 60px;">
              <br />
              <div>
                - ອີງຕາມເອກະສານລາຍງານທຸລະກຳທີ່ມີລັກສະນະພາໃຫ້ສົງໄສວ່າເປັນການຟອກເງິນ ສະບັບ

                @php($newreplytopic = explode('_', $replycont->str_reply_ref_no))
                @php($counttopic = count($newreplytopic))
                @php($nreplytp = '')
                @for($i = 0; $i<$counttopic; $i++)
                  @if($i == 0)
                    @php($nreplytp = $newreplytopic[$i])
                  @else
                    @php($nreplytp = $nreplytp . ', ' . $newreplytopic[$i])
                  @endif
                @endfor

                {{ $nreplytp . '.' }}
              </div><br />
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: justify; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 20px; padding-right:20px; text-justify: inter-word; line-height: 1.6;">
              <br />
              <div >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ(ສຕຟງ) ທະນາຄານແຫ່ງ ສປປ ລາວ ຂໍຖືເປັນກຽດແຈ້ງຕອບ ມາຍັງທ່ານ ເພື່ອຢັ້ງຢືນການໄດ້ຮັບລາຍງານ STR ຈາກທະນາຄານຂອງທ່ານ ຈຳນວນ {{ $counttopic }} ສະບັບ. ເຫັນໄດ້ວ່າເປັນສິ່ງທີ່ດີ ທີ່ທ່ານໄດ້ເອົາໃຈໃສ່ສູງ ໃນເລື່ອງການກວດກາ ແລະ ການລາຍງານ. ພ້ອມດຽວກັນ ນັ້ນ,​ ກໍຂໍໃຫ້ທະນາຄານຂອງທ່ານ ສືບຕໍ່ຕິດຕາມກວດກາການເຄື່ອນໄຫວທຸລະກຳຂອງລູກຄ້າດັ່ງກ່າວ ແລະ ຖ້າຫາກຜູ້ກ່ຽວມີການເຄື່ອນໄຫວທຸລະກຳທີ່ຜິດປົກກະຕິ ຫຼື ເຫັນວ່າມີຄວາມສົງໄສເພີ່ມເຕີມກະລຸນາແຈ້ງ ໃຫ້ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນຊາບດ້ວຍ.
              </div><br />
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: left; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 45px;padding-right:20px;">
              <br />
              <div >
                ດັ່ງນັ້ນ, ຈຶ່ງແຈ້ງມາຍັງທ່ານເພື່ອຢັ້ງຢືນການໄດ້ຮັບ ແລະ ຈັດຕັ້ງປະຕິບັດດ້ວຍ.
              </div><br />

            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: right; font-family: 'Phetsarath OT'; font-size: 18px; padding-left: 20px;padding-right:40px;">
              <br />
              <div >
                ຫົວໜ້າສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ
              </div><br />
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: right; font-family: 'Phetsarath OT'; font-size: 16px; padding-left: 20px;padding-right:90px;">
              <br />
              <img src="{{ public_path('images/signature.jpg')}}" width="250" />
            </td>
          </tr>


          <tr>
            <td colspan="2">

            </td>
          </tr>
        </table>

      </div>
    </div>
  </div>

  <htmlpagefooter name="page-footer">
    <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 20px; padding-bottom: 40px; padding-top: 20px;">
      ຕິດຕໍ່: ພະແນກວິເຄາະຂ່າວກອງ, ໂທລະສັບ: 021-264506, ແຟັກ: 021-265307
    </div>
  </htmlpagefooter>

</body>
</html>
