@extends('layouts.template')

@section('title')
jlpt.online แหล่งรวมข้อสอบ แนวข้อสอบวัดระดับ JLPT ติว N4 N5 ติว N3 N2 N1 ติว PAT 7.3 ภาษาญี่ปุ่น ภาษาญี่ปุ่นพื้นฐาน
@stop

@section('stylesheet')

<style>


</style>
@stop('stylesheet')



@section('content')

<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{ url('img/s-blog-slider.jpg') }}); min-height: 550px; margin-top: 0px;">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
        <h4>BLOG CONTENT</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="standard-blog.html">บทความ ข่าวสาร</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--slider sec end-->

<!--main page content-->
<section class="main">
    <div class="blog-content padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 order-1">
                    <div class="main_content text-center text-lg-left">
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="{{ url('img/118728823_170649687949230_3868991793346654251_o.png') }}" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>ประกันสุขภาพ</p>
                                <h2>ปักหมุด Checklist  คำถามต้องถามตัวเองก่อนสาวๆ  </h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">ปักหมุด Checklist  คำถามต้องถามตัวเองก่อนสาวๆ จะเลือกทำประกันสุขภาพ อย่าลืมตอบคำถามเหล่านี้ให้ได้ก่อนสมัครเพื่อรักษาประโยชน์ของตัวเองให้ได้มากที่สุดกันดีกว่านะคะ...</p>
                                <a class="btn web-btn rounded-pill" href="{{ url('blog_detail') }}">อ่านต่อ</a>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="{{ url('img/118404063_170647821282750_6477241985123496749_o.jpg') }}" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>การเงิน และ บัญชี </p>
                                <h2>การเงิน และ บัญชี เหมือนหรือแตกต่างกันอย่างไร</h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">การเงินและบัญชี เป็นสาขาที่มีความเกี่ยวข้องกัน แต่จริงๆแล้วมีความแตกต่างกันอยู่มาก แองเจิ้ลเชื่อว่าหลายคนที่จบการเงินมามักถูกคนเข้าใจว่าเค้าจะรู้เรื่องบัญชีอย่างลึกซึ้ง 
                                    หรือหลายคนที่จบบัญชีมาคนก็มักจะเชื่อว่าเค้าจะเข้าใจด้านการเงินเป็นอย่างดี...</p>
                                <a class="btn web-btn rounded-pill" href="{{ url('blog_detail') }}">อ่านต่อ</a>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="single_img">
                                <img src="{{ url('img/118327752_170145737999625_7966881462176082123_o.png') }}" alt="image"/>
                            </div>
                            <div class="single_detail">
                                <p class="blog-sub-heading text-center"><span></span>วางแผนการเงิน</p>
                                <h2>สาวๆ อาจคิดว่านักวางแผนการเงินฟังดูแล้วจริงจัง</h2>
                                <span class="blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                <p class="p-text">สาวๆ อาจคิดว่านักวางแผนการเงินฟังดูแล้วจริงจัง เราต้องควรจะต้องรอมีเงินหลักล้านก่อนแล้วค่อยมีนักวางแผนการเงินส่วนตัวหรือเปล่า แต่เปล่าเลย ใครๆก็สามารถมีนักวางแผนการเงินของตัวเองได้ เรียกได้ว่าเหมือนเป็น เพื่อนคู่คิดด้านการเงิน ที่คอยให้คำปรึกษาดีๆ และ จะช่วยดูแลกระเป๋าตังเราให้ตุงทรัพย์นั่นเอง...</p>
                                <a class="btn web-btn rounded-pill" href="{{ url('blog_detail') }}">อ่านต่อ</a>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center justify-content-lg-start">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-lg-4 side-bar order-3 order-lg-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="side_tags">
                                <div class="search-bar">
                                    <form method="get" id="searchform" action="#" role="search">
                                        <label class="sr-only" for="s">Search</label>
                                        <div class="input-group">
                                            <input class="field form-control" id="s" name="s" type="text" placeholder="Search …" value="">
                                            <span class="input-group-append">
                                    <button class="submit btn-search" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="cat_sec">
                                <h4 class="text-center text-lg-left">Categories</h4>
                                <ul>
                                    <li><a href="">ART </a> <span class="dots"></span> <p>2</p></li>
                                    <li><a href="">FASHION </a> <span class="dots"></span> <p>5</p></li>
                                    <li><a href="">PHOTOGRAPHY </a> <span class="dots"></span> <p>12</p></li>
                                    <li><a href="">LIFESTYLE </a> <span class="dots"></span> <p>22</p></li>
                                    <li><a href="">MOTIVATION </a> <span class="dots"></span> <p>1</p></li>
                                </ul>
                            </div>
                            <div class="popular_posts">
                                <h4 class="text-center text-lg-left">Popular Posts</h4>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="{{ url('img/118327752_170145737999625_7966881462176082123_o.png') }}" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Preview Images</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="{{ url('img/118404063_170647821282750_6477241985123496749_o.jpg') }}" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Image Gallery</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                                <div class="media-box row">
                                    <div class="col-5 box-img">
                                        <img src="{{ url('img/118728823_170649687949230_3868991793346654251_o.png') }}" alt="image">
                                    </div>
                                    <div class="col-7 box-detail">
                                        <h2>Post With A Slide Images</h2>
                                        <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tags_sec">
                                <h4 class="text-center text-lg-left">Tags</h4>
                                <div class="tags text-center text-lg-left">
                                    <span class="rounded-pill">AUDIO</span>
                                    <span class="rounded-pill">VEDIO</span>
                                    <span class="rounded-pill">BRANDINGS</span>
                                    <span class="rounded-pill">GRAPHICS</span>
                                    <span class="rounded-pill">FASHION</span>
                                    <span class="rounded-pill">DIGITAL</span>
                                    <span class="rounded-pill">SCANNING</span>
                                </div>
                            </div>
                            
                            <div class="advertisment">
                                <img src="img/blogs/advertisment.jpg" alt="image"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->


@endsection

@section('scripts')

@stop('scripts')