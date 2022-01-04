@extends('layouts.landing-page.it')
@section('pageTitle', "Kurikulum")

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
            padding-bottom: 30px;
        }

        .card {
            border-style: none;
        }
    </style>
</head>
<div class="card mt-5">
    <div class="content" style="width: 640px; margin: 0 auto; margin-top: 30px;">
        <h4>Kurikulum</h4>
        <div class="image-1">
            <img src="{{ asset('images\brand\kur_v1.png') }}" style="width: 600px;">
        </div>
        <div class="img2">
            <img src="{{ asset('images\brand\kur_v2.png') }}" style="width: 600px;">
        </div>
        <div class="image-3">
            <img src="{{ asset('images\brand\kur_v3.png') }}" style="width: 600px;">
        </div>
        <p class="description text-primary d-block mt-4"><b><a
                    href="http://it.sm.psdku.pens.ac.id/wp-content/uploads/2021/02/Kurikulum_Baru_D3_TI-ver-9.2-Tahun-2019.xlsx">
                    Unduh Kurikulum</a></b></p>
    </div>
</div>
<br><br>
@endsection