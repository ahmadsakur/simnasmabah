<html>

<head>
   <title>SKLU-{{$data->Kelas}}-{{$data->nama}}</title>

</head>
{{-- <style type="text/css" media="print">
   @page {
      size: auto;
      /* auto is the initial value */
      margin: 0;
      /* this affects the margin in the printer settings */
   }
</style> --}}
<style>
   body {
      font-family: Arial, Helvetica, sans-serif;
   }
</style>


<body>

   <table style="width: 100%;">
      <br><br>
      <tr>
         <td>
            <img src="{{asset('img/logo-jateng.svg')}}" width="120px" height="100px" style="padding-left: 60px;">
         </td>
         <td colspan="4" class="mid14" align="center" style="width: 85%;">
            <p align="center" style="margin-right: 100px;">
               <b>PEMERINTAH PROVINSI JAWA TENGAH<br>
                  DINAS PENDIDIKAN DAN KEBUDAYAAN<br>
                  SEKOLAH MENENGAH ATAS NEGERI 1 <br>
                  SUBAH <br></b></p>

            <p align="center" style="font-size: 10px; font-style: italic; margin-right: 100px;">Jalan Raya Jatisari
               Subah Batang Kode Pos
               51262 Telepon
               (0285) 666240 <br>
               Faksmile 0285-666240 Surat
               Elektronik :info@sman1subah.sch.id</p>
         </td>
         <br>
      <tr>
         <td colspan="6">
            <hr color="black" height="120px" align="center" style="width: 85%;">
         </td>
      </tr>
      <tr>
         <td colspan="6" align="center" style="margin-right: 30px;"><br><b>PENGUMUMAN KELULUSAN TAHUN 2020 <br> SMA
               NEGERI 1
               SUBAH</b></td>
      </tr>
      <tr>
         <td colspan="6" align="center"><b></b>Nomor : {{$data->no_surat}}</td>
      </tr>
      <tr>
         <td colspan="6">
            <br>
         </td>
      </tr>
      <tr>
         <td colspan="6" align="justify" style="width: 85%;">
            <p style="text-align: justify-all; padding-right: 40px; padding-left: 65px">Berdasarkan Rapat Pleno
               penentuan kelulusan SMA Negeri 1 Subah Kabupaten Batang Tahun Pelajaran 2019/2020 pada tanggal
               {{ \Carbon\Carbon::parse($setting->tgl_pleno)->locale('id')->isoFormat('D MMMM Y')}} Peserta Ujian :</p>
         </td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td colspan="4" style="padding-left: 65px;"><br>Nama </td>
         <td><br>: {{$data->nama}}</td>
      </tr>

      <tr>
         <td colspan="4" style="padding-left: 65px;"><br>No. Peserta&emsp;</td>
         <td><br>: {{$data->no_peserta}}</td>
      </tr>
      <tr>
         <td colspan="4" style="padding-left: 65px;"><br>Kelas </td>
         <td><br>: {{$data->Kelas}}</td>
      </tr>
      <tr>
         <td colspan="4" style="padding-left: 65px;"><br>Asal Sekolah </td>
         <td><br>: SMA Negeri 1 Subah</td>
      </tr>
      <tr>
         <td colspan="4" style="padding-left: 65px;"><br>Dinyatakan</td>
         <td><br>: <b>{{$status}}</b></td>
      </tr>
      <tr>
         <td colspan="6" align="justify" style="width: 85%;">
            <p style="text-align: justify-all; padding-right: 40px; padding-left: 65px">dalam mengikuti proses
               pembelajaran di SMA Negeri 1 Subah</p>
         </td>
      </tr>
   </table>
   <br>
   <br>
   <p style="text-align: left; float: right; padding-right: 40px">Subah,
      {{ \Carbon\Carbon::parse($setting->tgl_sklu)->locale('id')->isoFormat('D MMMM Y')}}<br>Kepala Sekolah
      Penyelenggara
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      {{-- <b>{{$setting->kepala_sekolah}}</b>
      <br>
      NIP. {{$setting->NIP}} --}}
      <b>Ahmad Sakur</b>
      <br>
      NIP. 827467325475
   </p>


   {{-- print --}}
   <script type="text/javascript">
      window.print();
   </script>
</body>

</html>