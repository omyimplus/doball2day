@extends('layouts.master')

@section('content')
<div id='live'>
    <div class='banner'>
        <div class='container py-3'>
            <div class='row'>
                <div class='col-2 pr-0'>
                    <div class='link-steam side'>
                        <h1>LIVE!!</h1>
                        <p>เลือกช่องทางการรับชมผ่าน STEAM สด</p>
                        <a href="#" class='active d-block text-center rounded mb-2'>steam 1</a>
                        <a href="#" class='d-block text-center rounded mb-2'>steam 2</a>
                        <a href="#" class='d-block text-center rounded mb-2'>steam 3</a>
                        <h6>คู่การแข่งขันที่นอกเหนือจากการ STEAM สามารถเลือกได้ในตารางด้านล่าง</h6>
                    </div>
                </div>
                <div class='col-7'>
                    <div class='temp-steam'>
                        <img src="asset/img/home/lorem-steam.jpg" alt="" class='img-fluid'>
                        <img src="asset/img/logo-mm88sport-trans.png" alt="" class='logomm88sport'>
                        <img src="asset/img/home/banner-steam.jpg" alt="" class='bannerSteam'>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='side'>
                        <div class='teamList'>
                            <h2>ตารางการ STEAM บอลวันนี้</h2>
                            <a href="#">
                                <h5>LIVE STEAM 1</h5>
                                <span class='colorBlue'>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span><br/>เวลา 21.00 น.
                            </a>
                            <a href="#">
                                <h5>LIVE STEAM 2</h5>
                                <span class='colorBlue'>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span><br/>เวลา 21.00 น.
                            </a>
                            <a href="#">
                                <h5>LIVE STEAM 3</h5>
                                <span class='colorBlue'>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span><br/>เวลา 21.00 น.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
