@extends('layouts.template')

@section('title')
jlpt.online แหล่งรวมข้อสอบ แนวข้อสอบวัดระดับ JLPT ติว N4 N5 ติว N3 N2 N1 ติว PAT 7.3 ภาษาญี่ปุ่น ภาษาญี่ปุ่นพื้นฐาน
@stop

@section('stylesheet')


@stop('stylesheet')



@section('content')

<!--Home Start-->
<section class="slider-sec" id="slider-sec">
    <div id="rev-slider" class="rev-slider">
    <div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullscreen-container" 
    data-alias="megaone-restaurant-1" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_18_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">

            <ul>	<!-- SLIDE  -->
                <li data-index="rs-44" data-transition="fade" data-slotamount="default" data-hideafterloop="0" 
                data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  
                data-thumb="assets/100x50_3d469-bg-light-1.jpg"  data-rotate="0"  data-saveperformance="off" 
                 data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                  data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ url('img/bg_1.jpg') }}"  
                    alt="" data-bgposition="center center" data-bgfit="cover" 
                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider-overlay"></div>
                    <!-- LAYER NR. 1 -->
                   </li>
               

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!--SLIDER DOWN ARROW-->
<!--    <svg class="separator__svg" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#44A36F" version="1.1" xmlns="http://www.w3.org/2000/svg">-->
<!--        <path d="M 100 100 V 10 L 0 100"/>-->
<!--        <path d="M 30 73 L 100 18 V 10 Z" fill="#308355" stroke-width="0"/>-->
<!--    </svg>-->
    <svg id="bigHalfCircle" class="c_lines" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
</div>
</section>
<!--Home End-->

<!--mini services start-->
<section class="mini-services" id="mini-services">
    <div class="container">
        <div class="row no-gutters">
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-paper-plane"></i></div>
                <h4 class="mini-service-heading">ปรับโครงสร้างธุรกิจ</h4>
                <span class="small-des">(Business Transitioning)</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-headset"></i></div>
                <h4 class="mini-service-heading">ควบ-โอนกิจการ</h4>
                <span class="small-des">(Family Constitution)</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-globe-europe"></i></div>
                <h4 class="mini-service-heading">ปรับโครงสร้างผู้ถือหุ้น</h4>
                <span class="small-des">(Corporate Finance)</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-phone"></i></div>
                <h4 class="mini-service-heading">วิเคราะห์งบการเงิน</h4>
                <span class="small-des">(Properties Management)</span>
            </div>
        </div>
    </div>
    </div>
</section>
<!--mini services end-->






<!--about us section start-->
<section class="about-sec padding-top padding-bottom" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading-details">
                    <h4 class="heading">Wealth Angels</h4>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <p class="text">ได้รวบรวมทุกสาระ เรื่องการเงิน จากประสบการณ์ตรงในแวดวงการเงินกว่า 10 ปี
                     เพื่อช่วยให้สาวๆเข้าใจเรื่องการเงินมากขึ้น และนำมาปรับใช้ในชีวิตประจำวันได้ทันที 💕</p>
            </div>
        </div>
        <div class="row services-area">
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-campground"></i></div>
                    <h4 class="service-heading">Who We Are?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-tractor"></i></div>
                    <h4 class="service-heading">How We Do?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-seedling"></i></div>
                    <h4 class="service-heading">What We Grow?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about us section end-->

<!--testimonial sec start-->
<section class="testimonial-sec padding-top padding-bottom" id="testimonial-sec">
    <svg id="test-header" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>

    <div class="container">
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="item text-center">
                <div class="testimonial-review">
                    <div class="review-image">
                        <img src="{{ url('img/101485699_135557831458416_7992064235179868160_o.jpg') }}">
                    </div>
                    <div class="review-detail">
                        <h4 class="test-heading">Lifestyle Working Mom</h4>
                        <p class="text-des">
                        จิ๊เป็นผู้หญิงที่เป็นคุณแม่ตั้งแต่ยังสาว จวบจนปัจจุบันลูกทั้งสองเติบโตเริ่มเป็นหนุ่มสาวกันแล้ว เดินไปเที่ยวด้วยกันเหมือนไปเที่ยวกับเพื่อนๆ 
                        เมื่อลูกโตขึ้นคุณลูกๆกินเวลาคุณแม่น้อยลง จึงมีเวลาทำงานมากขึ้น และ แอบเที่ยวแบบสองต่อสองกับคุณสามีมากขึ้น แต่กฎเหล็กของครอบครัวคือ 
                        เราต้องหาเรื่องเที่ยวต่างประเทศด้วยกันพร้อมหน้าพร้อมตาอย่างน้อยหนึ่งครั้งต่อปี เสมือนเป็น Team Building ของครอบครัว</p>
                        
                    </div>
                    <div class="client-info media-body">
                        <h5 class="client-name mt-0">ศิริรัตน์ ตานะเศรษฐ </h5>
                        <p class="client-designation">/ CFP®.</p>
                    </div>
                </div>
            </div>
            <div class="item text-center">
                <div class="testimonial-review">
                    <div class="review-image">
                        <img src="{{ url('img/99297059_135558284791704_3076938102980214784_o.jpg') }}">
                    </div>
                    <div class="review-detail">
                        <h4 class="test-heading">ทำไมรายได้เยอะแต่ยังรู้สึกไม่มั่นคง!</h4>
                        <p class="text-des">เราจะใช้ชีวิตยังไงให้ดูแลตัวเราและครอบครัวไปตลอดรอดฝั่ง 
                            เงินที่เก็บได้จะพอเลี้ยงตัวไปตลอดจริงๆรึเปล่า ทำยังไงเราจะเป็นคนแก่ที่มีคุณภาพชีวิตที่ดี
                             ไม่ทำให้ลูกหลานเดือนร้อน คำถามพวกนี้ วนไปวนมาในหัวของส้มเมื่อ 10 ปีที่แล้ว ก่อนที่จะมารู้จักการวางแผนการเงิน</p>
                        
                    </div>
                    <div class="client-info media-body">
                        <h5 class="client-name mt-0">ณัฐลักษณ์ กาญจนวิโรจน์</h5>
                        <p class="client-designation">/ CFP®.</p>
                    </div>
                </div>
            </div>
            <div class="item text-center">
                <div class="testimonial-review">
                    <div class="review-image">
                    <img src="{{ url('img/99414582_135558934791639_2597000607441092608_o.jpg') }}">
                    </div>
                    <div class="review-detail">
                        <h4 class="test-heading">เก๋อยู่ในครอบครัวของคนที่ทำงานประจำ</h4>
                        <p class="text-des">ในแวดวงการเงิน คุณพ่อคุณแม่ทำงานธนาคารทั้งคู่ พี่ชายทำงานอยู่บริษัทบัตรเครดิต
                             ตัวเก๋เองจบปริญญาตรีด้านบัญชีจากธรรมศาสตร์แล้วต่อปริญญาโทด้านการเงินที่ University of Melbourne
                              ประเทศออสเตรเลีย เริ่มต้นการทำงานเป็น Auditor ที่ PwC 
                            แต่ด้วยความที่ชอบเนื้องานที่ปรึกษามากกว่าจึงเปลี่ยนสายงานมาเป็นที่ปรึกษาการเงินที่ PwC โดยเน้นเรื่องการซื้อขายกิจการค่ะ</p>
                        
                    </div>
                    <div class="client-info media-body">
                        <h5 class="client-name mt-0">ธัญญพัทธ์ วรวงษ์สถิตย์ </h5>
                        <p class="client-designation">/ CFA, CFP®, CPA (Thailand).</p>
                    </div>
                </div>
            </div>
        </div>

        <a id="customPrevBtn" class="test-btn"><i class="fas fa-angle-left"></i></a>
        <a id="customNextBtn" class="test-btn"><i class="fas fa-angle-right"></i></a>
    </div>

    <svg id="test-footer" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
</section>
<!--testimonial sec end-->


<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content padding-top">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                    <p class="sub-heading text-center">การปรับโครงสร้างธุรกิจ สำคัญยังไง?</p>
                                    <h1 class="heading">ปรับโครงสร้างธุรกิจ</h1>
                                    <p class="para_text m-auto">การจัดโครงสร้างธุรกิจอย่างเป็นระบบ จะทำให้ธุรกิจของคุณมีความพร้อมที่จะเติบโตมากยิ่งขึ้น จำกัดความเสี่ยงในการประกอบธุรกิจ สามารถดำเนินกิจการได้ในระยะยาวอย่างราบรื่น ลดค่าใช้จ่ายภาษีได้จำนวนมากทั้งในระยะสั้น และระยะยาว ดังนั้น การจัดวางโครงสร้างธุรกิจจึงเป็นสิ่งที่ขาดไม่ได้สำหรับทุกธุรกิจ</p>
                                </div>
                            </div>
                        </div>
                        <!--content-->
                        <div class="standalone-area">
                                

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{ url('img/117388396_165533691794163_2198830918506239829_o.png') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">Most flexible one page</p>
                                            <h2 class="gradient-text1">Standalone Heading</h2>
                                            <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                            <a href="#" class="btn web-trans-btn rounded-pill">อ่านเพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>

                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-6">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <img src="{{ url('img/117762464_166032415077624_3728087262608315419_o.png') }}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 stand-img-des">
                                        <div class="d-inline-block">
                                            <p class="sub-heading text-center">Most flexible one page</p>
                                            <h2 class="gradient-text1">Standalone Heading</h2>
                                            <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                            <a href="#" class="btn web-trans-btn rounded-pill">อ่านเพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                                <!--content-->
                        </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--newsletter sec start-->
<section class="newsletter" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 text-center text-md-left">
                <h4 class="newsletter-heading"><i class="las la-envelope"></i>จดหมายข่าว </h4>
                <p class="newsletter-text">สมัครรับข่าวสารและคำแนะนำจากเรา</p>
            </div>
            <div class="col-12 col-md-8">
                <form>
                    <div class="input-group">
                        <input class="form-control" placeholder="Enter Email">
                        <a href="#" class="btn news-btn">Subscribe</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--newsletter sec end-->

@endsection

@section('scripts')

@stop('scripts')