@extends('layouts.mainreplyview')
@section('page_title', 'Reply view')
@section('content')

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="{{ url('images/amlio_logo.png') }}" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <form  class="form-horizontal" method="POST" action={{ url('/nationalityshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
    {{ csrf_field() }}

    </form>
  </div>
</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-offset-2 col-xs-8">
      <div style="min-width: 600px;max-width: 600px; background-color: #faf9fc; margin-left: 100px; border-style: solid; border-width: 1px; border-color: #ccc;">
        <div style="padding-top: 30px; padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">
          <h5 style="text-align: center; font-family: 'Phetsarath OT'">
            ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ <br />
            ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ <br />
            -------===000===-------
          </h5>
          <br />
          <table width="580" border="0">
            <tr>
              <td>
                <div style="text-align: left; font-family: 'Phetsarath OT'; margin-top: -40px; padding-left: 60px;">
                  <h5 class="text-lo">
                  &nbsp;&nbsp;&nbsp;&nbsp;ທະນາຄານແຫ່ງ ສປປ ລາວ<br />
                  &nbsp;&nbsp;&nbsp;&nbsp;ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ<br />
                  &nbsp;
                  </h5>
                </div>
              </td>
              <td>
                <div style="padding-right:30px;text-align: right; font-family: 'Phetsarath OT'; margin-top: -40px;padding-right: 60px;">
                  <h5 class="text-lo">
                    &nbsp;<br />
                    ເລກທີ: {{ $replycont->str_reply_no }}<br />
                    ນະຄອນຫຼວງວຽງຈັນ,​ ວັນທີ {{ date('d/m/Y', strtotime($replycont->created_at)) }}
                  </h5>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div style="text-align: center; font-family: 'Phetsarath OT'; margin-top: -20px;"><h3 class="text-lo"><u>ແຈ້ງຕອບ</u></h3></div>
                <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 100px;">
                  ເຖິງ: {{ $replycont->str_reply_topic }}
                </div>
                <div style="text-align: right; font-family: 'Phetsarath OT'; font-size: 13px; padding-right: 100px;">
                  ທີ່ນັບຖື,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 100px;">
                  ເລື່ອງ: ຢັ້ງຢຶນການໄດ້ຮັບລາຍງານ.
                </div><br />
                <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 100px;padding-right:60px;">
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
                <div style="text-align: justify; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 60px; padding-right:60px; text-justify: inter-word;">
                  &nbsp;&nbsp;&nbsp;&nbsp;ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ(ສຕຟງ) ທະນາຄານແຫ່ງ ສປປ ລາວ ຂໍຖືເປັນກຽດແຈ້ງຕອບ ມາຍັງທ່ານ ເພື່ອຢັ້ງຢືນການໄດ້ຮັບລາຍງານ STR ຈາກທະນາຄານຂອງທ່ານ ຈຳນວນ {{ $counttopic }} ສະບັບ. ເຫັນໄດ້ວ່າເປັນສິ່ງທີ່ດີ ທີ່ທ່ານໄດ້ເອົາໃຈໃສ່ສູງ ໃນເລື່ອງການກວດກາ ແລະ ການລາຍງານ. ພ້ອມດຽວກັນ ນັ້ນ,​ ກໍຂໍໃຫ້ທະນາຄານຂອງທ່ານ ສືບຕໍ່ຕິດຕາມກວດກາການເຄື່ອນໄຫວທຸລະກຳຂອງລູກຄ້າດັ່ງກ່າວ ແລະ ຖ້າຫາກຜູ້ກ່ຽວມີການເຄື່ອນໄຫວທຸລະກຳທີ່ຜິດປົກກະຕິ ຫຼື ເຫັນວ່າມີຄວາມສົງໄສເພີ່ມເຕີມກະລຸນາແຈ້ງ ໃຫ້ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນຊາບດ້ວຍ.
                </div><br />
                <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 100px;padding-right:60px;">
                  ດັ່ງນັ້ນ, ຈຶ່ງແຈ້ງມາຍັງທ່ານເພື່ອຢັ້ງຢືນການໄດ້ຮັບ ແລະ ຈັດຕັ້ງປະຕິບັດດ້ວຍ.
                </div><br />
                <div style="text-align: right; font-family: 'Phetsarath OT'; font-size: 16px; padding-right: 60px;margin-top: -20px;">
                  <h5 class="text-lo">ຫົວໜ້າສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ</h5>
                  <img src={{ url('images/signature.jpg')}} width="165" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div style="text-align: left; font-family: 'Phetsarath OT'; font-size: 13px; padding-left: 60px; padding-bottom: 40px; padding-top: 20px;">
                  ຕິດຕໍ່: ພະແນກວິເຄາະຂ່າວກອງ, ໂທລະສັບ: 021-264506, ແຟັກ: 021-265307
                </div>
              </td>
            </tr>
          </table>

        </div>

      </div>
    </div>
  </div>



@stop
