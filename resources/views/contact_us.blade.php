@extends('layouts.template')

@section('title')
jlpt.online แหล่งรวมข้อสอบ แนวข้อสอบวัดระดับ JLPT ติว N4 N5 ติว N3 N2 N1 ติว PAT 7.3 ภาษาญี่ปุ่น ภาษาญี่ปุ่นพื้นฐาน
@stop

@section('stylesheet')


@stop('stylesheet')



@section('content')

<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{ url('img/contact-slider.jpg') }}); min-height: 550px; margin-top: 0px;">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>Contact Us</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="single-blog.html">ติดต่อเรา</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--slider sec end-->


<!-- Contact Us Start -->
<section class="contact-sec" id="contact-sec">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text">ติดต่อเรา</span>
                        <h4 class="large-heading">
                            <span class="heading-1">Wealth Angels</span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">
                    ใครมีข้อส่งสัยเกี่ยวกับการวางแผนการเงินส่วนบุคคล สามารถส่งข้อความมาหาพวกเราได้เลย พวกเราเหล่าแองเจิ้ลพร้อมให้คำปรึกษา
                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left">ศิริรัตน์ ตานะเศรษฐ</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(34) 609 33 17 54</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">email@website.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">201 Oak Street 27 Manchester, USA</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 couuntry-1">
                            <h4 class="heading-text text-left">ณัฐลักษณ์ กาญจนวิโรจน์</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(34) 609 33 17 54</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">email@website.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">201 Oak Street 27 Manchester, USA</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 couuntry-1">
                            <h4 class="heading-text text-left">ธัญญพัทธ์ วรวงษ์สถิตย์ </h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(34) 609 33 17 54</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">email@website.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#">201 Oak Street 27 Manchester, USA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="small-heading">Leave Message</h4>
                    <!--                        <p class="small-text">Lorem ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                    <form class="contact-form" id="contact-form-data">
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_fname" name="firstName" placeholder="First Name" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_lname" name="lastName" placeholder="Last Name" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="user_email" name="userEmail" placeholder="Email" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="user_subject" name="userSubject" placeholder="Subject" required="required">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="user_message" name="userMessage" placeholder="Message" rows="7" required="required"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn web-btn user-contact rounded-pill contact_btn" type="button">SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->


@endsection

@section('scripts')

@stop('scripts')