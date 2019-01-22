@extends('layouts.master')

@section('content')
<div id='home'>
    <div class='banner'>
        <div class='container'>
            <div class='row justify-content-center'>
                <div class='col-lg-9 px-0 px-md-3'>
                    <div class='link-steam'>
                        <img src="asset/img/home/icon-live.png" alt="" class='d-none d-md-inline-block icon-live'>
                        <a href="#" class='active'>steam 1</a>
                        <a href="#">steam 2</a>
                        <a href="#">steam 3</a>
                    </div>
                    <div class='temp-steam'>
                        <img src="asset/img/home/lorem-steam.jpg" alt="" class='img-fluid'>
                        <img src="asset/img/logo-mm88sport-trans.png" alt="" class='logomm88sport'>
                        <img src="asset/img/home/banner-steam.jpg" alt="" class='bannerSteam'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='logoLeague'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <span>
                        <img src="asset/img/home/logo-pre.png" alt="" class='img-fluid'>
                    </span>
                    <span>
                        <img src="asset/img/home/logo-laliga.png" alt="" class='img-fluid'>
                    </span>
                    <span>
                        <img src="asset/img/home/logo-bun.png" alt="" class='img-fluid'>
                    </span>
                    <span>
                        <img src="asset/img/home/logo-serie.png" alt="" class='img-fluid'>
                    </span>
                    <span>
                        <img src="asset/img/home/logo-uefa.png" alt="" class='img-fluid'>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @include('components.banner')
    <div class='review container mb-3'>
        <div class='row'>
            <div class='col-lg-7'>
                <div class='title'>
                    <span><img src="asset/img/icon/icon-ball.png" alt="icon Ball"></span>
                    <span>วิเคราะห์บอลวันนี้</span>
                </div>
                <div class='tempVideoReview'>
                    <img src="asset/img/home/lorem-review.jpg" alt="review" class='img-fluid'>
                    <section>
                        <img src="asset/img/logo-doball2day.png" alt="Logo Doball2day">
                    </section>
                </div>
            </div>
            <div class='mt-3 mt-lg-0 col-lg-5'>
                <div class='title mb-2'>
                    <span><img src="asset/img/icon/icon-ball.png" alt="icon Ball"></span>
                    <span>วิเคราะห์บอลวันนี้</span>
                </div>
                <section class='tempDetail'>
                    <div>
                        <figure>
                            <img src="asset/img/home/lorem-saint.jpg" alt="Saint Ball Doball2day">
                        </figure>
                    </div>
                    <section>
                        <a href="#">- <span>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span>การพบกันครั้งนี้เซียนให้ทาง Manu ได้เปรียบเพราะเป็นเจ้าบ้าน</a>
                    </section>
                </section>
                <section class='tempDetail'>
                    <div>
                        <figure>
                            <img src="asset/img/home/lorem-saint.jpg" alt="Saint Ball Doball2day">
                        </figure>
                    </div>
                    <section>
                        <a href="#">- <span>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span>การพบกันครั้งนี้เซียนให้ทาง Manu ได้เปรียบเพราะเป็นเจ้าบ้าน</a>
                    </section>
                </section>
                <section class='tempDetail'>
                    <div>
                        <figure>
                            <img src="asset/img/home/lorem-saint.jpg" alt="Saint Ball Doball2day">
                        </figure>
                    </div>
                    <section>
                        <a href="#">- <span>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span>การพบกันครั้งนี้เซียนให้ทาง Manu ได้เปรียบเพราะเป็นเจ้าบ้าน</a>
                    </section>
                </section>
                <section class='tempDetail'>
                    <div>
                        <figure>
                            <img src="asset/img/home/lorem-saint.jpg" alt="Saint Ball Doball2day">
                        </figure>
                    </div>
                    <section>
                        <a href="#">- <span>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span>การพบกันครั้งนี้เซียนให้ทาง Manu ได้เปรียบเพราะเป็นเจ้าบ้าน</a>
                    </section>
                </section>
                <section class='tempDetail'>
                    <div>
                        <figure>
                            <img src="asset/img/home/lorem-saint.jpg" alt="Saint Ball Doball2day">
                        </figure>
                    </div>
                    <section>
                        <a href="#">- <span>แมนฯ ยูไนเต็ด vs ลิเวอร์พูล</span>การพบกันครั้งนี้เซียนให้ทาง Manu ได้เปรียบเพราะเป็นเจ้าบ้าน</a>
                    </section>
                </section>
            </div>
        </div>
    </div>
    <div class='tableLive container mb-4'>
        <div class='row'>
            <div class='col-12'>
                <div class='title mb-3'>
                    <span><img src="asset/img/icon/icon-ball.png" alt="icon Ball"></span>
                    <span>ตารางถ่ายทอดสด</span>
                </div>
                <h2 class='subTitle'>ช่องทางการรับชมอื่นๆ</h2>
                <div class='otherLink mb-4'>
                    <a href="https://www.bugaboo.tv/sport" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/bagaboo.png" alt="icon other TV">
                    </a>
                    <a href="http://www.ch3thailand.com/%E0%B8%94%E0%B8%B9%E0%B8%97%E0%B8%B5%E0%B8%A7%E0%B8%B5%E0%B8%AD%E0%B8%AD%E0%B8%99%E0%B9%84%E0%B8%A5%E0%B8%99%E0%B9%8C" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/tv3.png" alt="icon other TV">
                    </a>
                    <a href="http://app.tv5.co.th/" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/tv5.png" alt="icon other TV">
                    </a>
                    <a href="http://www.ch7.com/live.html" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/tv7.png" alt="icon other TV">
                    </a>
                    <a href="https://tv.mcot.net/mcothd" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/tv9.png" alt="icon other TV">
                    </a>
                    <a href="http://www.amarintv.com/" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/amarin.png" alt="icon other TV">
                    </a>
                    <a href="http://true4u.truelife.com/" target="_blank" class='mb-2'>
                        <img src="asset/img/icon/true4u.png" alt="icon other TV">
                    </a>
                </div>
                <div class='table-responsive'>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">วันที่</th>
                                <th scope="col">เวลา</th>
                                <th class='team' >คู่การแข่งขัน</th>
                                <th scope="col">ลีก</th>
                                <th scope="col">ช่องทาง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr><tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                            <tr>
                                <td><span class='colorRedDark'>19/2/2562</span></th>
                                <td>03.00</td>
                                <td><span>แมนฯ ยูไนเต็ด</span> <img src="asset/img/icon/manu-flag.png" alt="Flag Team"> <span class='colorRedDark'>VS</span> <img src="asset/img/icon/liverpool-flag.png" alt="Flag Team"> <span>ลิเวอร์พูล</span></td>
                                <td><span class='colorRedDark'>อังกฤษ</span></td>
                                <td><a href="#">รับชม</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class='seeAll'>ดูการถ่ายทอดทั้งหมด</a>
            </div>
        </div>
    </div>
    <div class='article container'>
        <div class='row'>
            <div class='col-12'>
                <div class='title mb-3'>
                    <span><img src="asset/img/icon/icon-ball.png" alt="icon Ball"></span>
                    <span>บทความที่น่าสนใจ</span>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_01.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_02.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_03.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_04.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_01.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_02.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_03.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
            <div class='col-sm-6 col-md-3 tempArticle'>
                <a href="#">
                    <figure>
                        <img src="asset/img/article/article_04.jpg" alt="article Doball2day">
                    </figure>
                    <section>
                        <h1>หัวข้อบทความ</h1>
                        <p>วิวชนะเลิศสติกเกอร์แป๋ว ซาฟารีอุ นายกอิสรชน ฟอยล์ ฮากกาแดนเ ซอร์แอ๊บแบ๊วคลับว่ะ กุนซือไฮไลต์</p>
                    </section>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection