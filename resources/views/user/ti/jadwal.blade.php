@extends('layouts.landing-page.it')
@section('pageTitle', "Jadwal TI")
   
@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        h4 {
            font-family: 'Roboto', sans-serif;
            font-size: 22px;
            color: blue;
        }

        .content {
            height: auto;
            background: #ffff;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            box-shadow: 0px 0px 0px grey;
            -webkit-transition: box-shadow .6s aese-out;
            box-shadow: .8px .9px 3px grey;
        }

        .card {
            border-style: none;
        }
    </style>
</head>
   <div class="card mt-5">
       <div class="content" style="width: 640px; margin: 0 auto;  margin-top: 30px;">
           <h6 class="text-uppercase text-primary">JADWAL KULIAH PROGRAM D3 TEKNIK INFORMATIKA PSDKU SUMENEP SEMESTER GENAP 2020/2021</h6>
           <img src="{{ asset('images/brand/jadwal_psdku.png') }}" style="width: 600px">
           <p class="description mt-4 d-block"><b><a href="http://it.sm.psdku.pens.ac.id/wp-content/uploads/2021/02/Jadwal-2020-2021-Genap.xls">
            Unduh Jadwal   
            </a></b></p>
       </div>
   </div>
   <br>
@endsection