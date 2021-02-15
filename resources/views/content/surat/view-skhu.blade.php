<html>

<head>
   <title>SKHU-{{$data->Kelas}}-{{$data->nama}}</title>
   <style>
      body {
         font-family: sans-serif;
      }

      .nilai td {
         padding: 5px;
         font-size: 11px;
      }

      .number,
      .marks {
         text-align: center;
      }
   </style>

</head>

<body>
   <table style="width: 100%;">
      {{-- <thead style="outline: thin double black;"> --}}
      <thead>
         <tr>
            <td>
               <img src=" {{asset('img/logo-jateng.svg')}}" width="120px" height="100px" style="padding-left: 60px;">
            </td>
            <td colspan="4" class="mid14" align="center" style="width: 85%;">
               <p align="center" style="margin-right: 100px;">
                  <b>PEMERINTAH PROVINSI JAWA TENGAH<br>
                     DINAS PENDIDIKAN DAN KEBUDAYAAN<br>
                     SEKOLAH MENENGAH ATAS NEGERI 1 <br>
                     SUBAH</b></p>
               <p align="center" style="font-size: 10px; font-style: italic; margin-right: 100px;">Jalan
                  Raya Jatisari
                  Subah Batang Kode Pos
                  51262 Telepon
                  (0285) 666240 <br>
                  Faksmile 0285-666240 Surat
                  Elektronik :info@sman1subah.sch.id</p>
            </td>
            <br>
         <tr>
         <tr>
            <td colspan="6">
               <hr color="black" height="120px" align="center" style="width: 90%; margin-right:15px;">
            </td>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <div class="form">
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;"><br>Nama </td>
               <td style="font-size: 11px;"><br>: {{$data->nama}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Tempat dan tanggal lahir </td>
               <td style="font-size: 11px;">: {{$data->TTL}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Nama Orang tua/wali </td>
               <td style="font-size: 11px;">: {{$data->wali_murid}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Nomor Induk Siswa</td>
               <td style="font-size: 11px;">: {{$data->NIS}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Nomor Induk siswa nasional </td>
               <td style="font-size: 11px;">: {{$data->NISN}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Nomor Peserta</td>
               <td style="font-size: 11px;">: {{$data->no_peserta}}</td>
            </tr>
            <tr>
               <td colspan="3" style="padding-left: 65px; font-size: 11px;">Sekolah Asal</td>
               <td style="font-size: 11px;">: SMA N 1 Subah</td>
            </tr>
         </div>
      </tbody>
   </table>
   <br>
   <table class="nilai" style="margin-left: 65px; border-collapse: collapse; margin-right:40px;" border="1px">
      <col style="width:5%; text-align:center;">
      <col style="width:45%">
      <thead>
         <tr>
            <th style="padding: 5px; font-size:12px;">No.</th>
            <th style="padding: 5px; font-size:12px;">Mata Pelajaran</th>
            <th style="padding: 5px; font-size:12px;">Nilai Rata Rata Raport</th>
            <th style="padding: 5px; font-size:12px;">Nilai Ujian Sekolah</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td colspan="2" style="font-weight: bold;">Kelompok A</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td class="number">1</td>
            <td>Pendidikan Agama dan Budi Pekerti</td>
            <td class="marks">{{round($raport["AGM"],0,2)}}</td>
            <td class="marks"> ~</td>
         </tr>
         <tr>
            <td class="number">2</td>
            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
            <td class="marks">{{round($raport["PKN"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">3</td>
            <td>Bahasa Indonesia</td>
            <td class="marks">{{round($raport["IND"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">4</td>
            <td>Matematika</td>
            <td class="marks">{{round($raport["MTK"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">5</td>
            <td>Sejarah Indonesia</td>
            <td class="marks">{{round($raport["SEJ"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">6</td>
            <td>Bahasa Inggris</td>
            <td class="marks">{{round($raport["EN"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td colspan="2" style="font-weight: bold;">Kelompok B</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td class="number">1</td>
            <td>Seni Budaya</td>
            <td class="marks">{{round($raport["SENI"],0,2)}}</td>
            <td class="marks"> ~</td>
         </tr>
         <tr>
            <td class="number">2</td>
            <td>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
            <td class="marks">{{round($raport["PJOK"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">3</td>
            <td>Prakarya dan Kewirausahaan</td>
            <td class="marks">{{round($raport["PKWU"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">4</td>
            <td>Muatan Lokal</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td></td>
            <td>a. Bahasa Jawa</td>
            <td class="marks">{{round($raport["JAWA"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td colspan="2" style="font-weight: bold;">Kelompok C</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td class="number">1</td>
            <td id="jurusan1">{{$mapel["J1"]}}</td>
            <td class="marks">{{round($raport["J1"],0,2)}}</td>
            <td class="marks"> ~</td>
         </tr>
         <tr>
            <td class="number">2</td>
            <td id="jurusan2">{{$mapel["J2"]}}</td>
            <td class="marks">{{round($raport["J2"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">3</td>
            <td id="jurusan3">{{$mapel["J3"]}}</td>
            <td class="marks">{{round($raport["J3"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">4</td>
            <td id="jurusan4">{{$mapel["J4"]}}</td>
            <td class="marks">{{round($raport["J4"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr>
            <td class="number">5</td>
            <td>Pilihan Lintas Minat</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td></td>
            <td id="peminatan">{{$mapel["Peminatan"]}}</td>
            <td class=" marks">{{round($raport["PMT"],0,2)}}</td>
            <td class="marks">~</td>
         </tr>
         <tr style="font-weight: bold">
            <td colspan="2">Rata Rata</td>
            <td class="marks">{{substr(array_sum($raport)/count($raport),0,5)}}</td>
            <td class="marks">~</td>
         </tr>
      </tbody>
   </table>
   <br>
   <p style="text-align: left; float: right; padding-right: 40px">Subah, 2 Mei 2020<br>Kepala Sekolah Penyelenggara
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <b>ttt</b>
      <br>
      NIP. 64752735471 </p>
</body>

</html>