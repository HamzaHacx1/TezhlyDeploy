@extends('front_app.layouts.template')
@section('content')
<style>
    @media(max-width:768px) {
        .mob-mt {
            margin-top: 8% !important;
        }

        .category-thumb img {
            object-fit: cover;
            height: 130px !important;
            width: 135px !important;
        }

        .mob-100 {
            width: 100% !important;
        }



    }

    .chat-sec {
        /* border: 1px solid; */
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 20px;
        margin-top: 20px;
        background: #d5d8d7;
        border-radius: 22px;
        padding-right: 26px;
        padding-left: 26px;

    }

    .heading {

        font-family:
            Plus Jakarta Sans;
        font-weight: bold;
    }

    .prompts {
        display: inline-block;
        background: #dcdcdc;
        border-radius: 20px 20px 20px 20px;
        color: black;
        font-size: 12px;
        font-weight: 500;
        padding-top: 12px;
        padding-right: 20px;
        padding-bottom: 12px;
        padding-left: 20px;
        cursor: pointer;

    }

    .prompts:hover {

        text-decoration: underline;
    }

    input::placeholder {
        opacity: 0.5;
        color: white !important;
        font-size: 17px;
    }

    @media only screen and (max-width: 768px) {
        .chat-sec {
            margin-left: 10px;
            margin-right: 10px;
        }

        .heading {
            font-size: 24px;
        }

        .prompts {
            font-size: 10px;
        }
    }

    @media only screen and (max-width: 576px) {
        .chat-sec {
            margin-left: 5px;
            margin-right: 5px;
        }

        .heading {
            font-size: 20px;
        }

        .prompts {
            font-size: 8px;
        }
    }

    .heading {
        font-size: 36px;
        /* Adjust font size as needed */
        font-family: Arial, sans-serif;
        /* Adjust font family as needed */
        overflow: hidden;
        white-space: nowrap;
    }

    .service-3 {
        font-family: "Montserrat", sans-serif;
        color: #8d97ad;
        font-weight: 300;
    }

    .service-3 h1,
    .service-3 h2,
    .service-3 h3,
    .service-3 h4,
    .service-3 h5,
    .service-3 h6 {
        color: #3e4555;
    }

    .service-3 .font-weight-medium {
        font-weight: 600;
    }

    .service-3 .bg-light {
        background-color: #f4f8fa !important;
    }

    .service-3 .subtitle {
        color: #8d97ad;
        line-height: 24px;
    }

    .service-3 .linking {
        color: #3e4555;
    }

    .service-3 .linking:hover {
        color: #316ce8;
    }

    .service-3 a {
        text-decoration: none;
    }

    .service-3 .text-success-gradiant {
        background: #2cdd9b;
        background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
        background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
        background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
        background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
        background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
    }


    .service-3 .card.card-shadow {
        -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
        box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    }

    .service-3 .wrap-service3-box .card-body {
        padding: 40px;
    }

    .service-3 .btn-success-gradiant {
        background: #2cdd9b;
        background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
        background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
        background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
        background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
        background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
    }

    .service-3 .btn-success-gradiant:hover {
        background: #1dc8cc;
        background: -webkit-linear-gradient(legacy-direction(to right), #1dc8cc 0%, #2cdd9b 100%);
        background: -webkit-gradient(linear, left top, right top, from(#1dc8cc), to(#2cdd9b));
        background: -webkit-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
        background: -o-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
        background: linear-gradient(to right, #1dc8cc 0%, #2cdd9b 100%);
    }

    .service-3 .btn-md {
        padding: 15px 45px;
        font-size: 16px;
    }

    .mr-4 {
        margin-right: 22px;
    }

    .card-body:hover {
        background: #FEFAEF;
    }

    .user-pic {
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 100%;
        margin: 20px auto 20px;
        border-left: 3px solid #ddd;
        border-right: 3px solid #ddd;
        border-top: 3px solid #FEFAEF;
        border-bottom: 3px solid #FEFAEF;
        transform: rotate(-10deg);
        transition: 0.5s;
    }

    .card-box:hover .user-pic {
        transform: rotate(0deg);
        transform: scale(1.1);
    }

    .card-box {
        padding: 15px;
        background-color: #fdfdfd;
        margin: 20px 0px;
        border-radius: 10px;
        border: 1px solid #eee;
        box-shadow: 0px 0px 8px 0px #d4d4d4;
        transition: 0.5s;
        min-height: 470px;
    }


    .card-box:hover {
        border: 1px solid #FEFAEF;
    }

    .card-box p {
        color: #808080;
        font-size: 15px;
    }

    .service-body {
        height: 330px;
    }

    .service-body i {
        font-size: 46px;
        margin-bottom: 20px;
        color: #4bb0b0;

    }

    .service-body h4 {
        font-size: 1.2rem;
    }
</style>
<section class="py-5 w-100 ">

    <!-- <section class="container-fluid desktop-header">
<div class="w-100" style="position: fixed;
top: -80px;" class="first-section">
<h1 class="fw-bold m-auto text-center mt-5 py-3 overflow-hidden" style="color:#A8AAA7;font-size:300px;z-index:-5; font-family: 'Futra', sans-serif!important;">TEZHLY</h1>
</div>
</section>
<section class="container-fluid mob-header">
<div class="w-100" class="first-section">
<h1 class="fw-bold m-auto text-center mt-5 overflow-hidden display-1" style="color:#7f807e;font-family: 'Futra', sans-serif!important;">TEZHLY</h1>
</div>
</section> -->
</section>

<section class="position-relative">
    <div class="position-relative pt-4 chat-sec" onmouseenter="showText()" style="min-height: 80vh; z-index: 10; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; display: flex; flex-direction: column;">
        <div style="margin-bottom: 75px; flex: 1; align-items: center; text-align: center; display: flex; flex-direction: column; justify-content: end; align-items: center;">
            <h1 class="heading pb-1" id="heading">Hello I'm TEZHLY</h1>
            <p class="pb-2" id="hoverText" style="display: none; line-height: 29px; font-size: 15px">Tell me what’s on your mind, or pick a suggestion. I have limitations and won’t <br> always get it right, but your feedback will help me improve.</p>
            <div class="pb-1" id="prompts" style="border: 1px solid #00000036; text-align: left!important; border-radius: 19px; display: none; position: absolute; bottom: 85px; left: 72%; width: 50%; padding: 12px; transform: translateX(-50%); background: #FEFAEF;">
                <button style="position: absolute; top: 5px; right: 5px; background: transparent; border: none; cursor: pointer;" onclick="closePrompts()">
                    <i class="fa fa-times"></i>
                </button>
                <h5 class="pb-1 mb-3">Try these prompts:</h5>
                <p class="text-dark prompts" onclick="sendPrompt('I want to become project manager in 6 months')">I want to become project manager in 6 months</p>
                <p class="text-dark prompts" onclick="sendPrompt('I want to get promotion at my job')">I want to get promotion at my job</p><br>
                <p class="text-dark prompts" onclick="sendPrompt('I want to become project manager in 6 months')">I want to become project manager in 6 months</p>
                <p class="text-dark prompts" onclick="sendPrompt('I want to become project manager in 6 months')">I want to become project manager in 6 months</p><br>
                <p class="text-dark prompts" onclick="sendPrompt('I want to get promotion at my job')">I want to get promotion at my job</p>
                <p class="text-dark prompts" onclick="sendPrompt('I want to become project manager in 6 months')">I want to become project manager in 6 months</p>
            </div>

        </div>
        <div class="pb-2" style="max-width: 100%;">
            <form action="{{route('tezhly-chat')}}" method="post" class="w-100">
                @csrf

                <div class="input-group mb-3" style="position: relative;">
                    <input type="text" style="background: #A8AAA7!important; border: 0px; border-radius: 30px 30px 30px 30px; margin: 3px;" name="value" class="form-control bg-transparent text-white fs-5" placeholder="Hi I'm TEZHLY How can I help you ?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <span id="button-title" onclick="showPrompts()" style="border:1px solid #00000036;width: 9%;display: none; position: absolute; bottom: 60px; left: 96%; transform: translateX(-50%); background: #FEFAEF; border-radius: 5%; padding-right: 15px;padding-bottom: 10px;padding-top: 10px; padding-left: 15px; color: black;cursor:pointer">Try Prompts</span>
                    <button style="background: #A8AAA7; border-radius: 20px 20px 20px 20px; margin: 3px; position: relative;" onmouseenter="showTitle()" type="submit" id="button-addon2">
                        <i class="fa fa-paper-plane text-white" aria-hidden="true"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>


<!-- <p class="pb-2" id="heading" style="line-height: 29px;font-size:15px">Tell me what’s on your mind, or pick a suggestion. I have limitations and won’t <br> always get it right, but your feedback will help me improve.</p>
            <h5 class="pb-1 mb-3">Try these prompts:</h5> -->







{{-- <div class="category-section padding-tb">
<div class="container">
<div class="section-header text-center">
<span class="subtitle">Popular Category</span>
<h2 class="title fw-bold">Popular Category For Learn</h2>
</div>
<div class="section-wrapper">
<div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
@foreach ($categories as $item)
<div class="col">
<div class="category-item text-center">
<div class="category-inner">
<div class="category-thumb">
<img src="{{asset('assets/category/'.$item->img)}}" style="object-fit: cover;
height: 130px;
width: 160px;" alt="category">
</div>
<div class="category-content">
    <a href="demos/sob-education/course.html">
        <h6>{{$item->name}}</h6>
    </a>
    <span>24 Course</span>
</div>
</div>
</div>
</div>

@endforeach

</div>
<div class="text-center mt-5">
    <a href="demos/sob-education/course.html" class="lab-btn"><span>Browse All Categories</span></a>
</div>
</div>
</div>
</div> --}}

{{--
<div class="course-section padding-tb section-bg">
<div class="container">
<div class="section-header text-center">
<span class="subtitle">Featured Courses</span>
<h2 class="title fw-bold">Pick A Course To Get Started</h2>
</div>
<div class="section-wrapper">

<div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
@foreach ($courses as $items)
<div class="col">
<div class="course-item">
<div class="course-inner">
<div class="course-thumb">
<img src="{{asset('assets/courses/'.$items->img)}}" style="object-fit: cover;height:300px;" alt="course">
</div>
<div class="course-content">
    <div class="course-price"></div>
    <div class="course-category">
        <div class="course-cate">
            <a href="#">{{$items->category_id}}</a>
        </div>
        <div class="course-reiew">
            <span class="ratting">
                <i class="icofont-ui-rating"></i>
                <i class="icofont-ui-rating"></i>
                <i class="icofont-ui-rating"></i>
                <i class="icofont-ui-rating"></i>
                <i class="icofont-ui-rating"></i>
            </span>
            <span class="ratting-count">
                03 reviews
            </span>
        </div>
    </div>
    <a href="{{route('course-detail',['slug'=>$items->slug])}}">
        <h4>{{$items->name}}</h4>
    </a>
    <div class="course-details">
        <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
    </div>
    <div class="course-footer">
        <div class="course-author">
            <img src="assets/images/course/author/03.jpg" alt="course author">
            <a href="team-single.html" class="ca-name">Admin</a>
        </div>
        <div class="course-btn">
            <a href="{{route('course-detail',['slug'=>$items->slug])}}" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endforeach
</div>

</div>
</div>
</div> --}}


{{-- <div class="bg-success padding-tb">
<div class="container text-white">
<div class="section-header text-center">
<span class="subtitle">START TO SUCCESS</span>
<h2 class="title fw-bold">Achieve Your Goals With Tezhly</h2>
</div>
<div class="section-wrapper">
<div class="counter-part mb-4">
<div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
<div class="col">
<div class="count-item">
<div class="count-inner">
<div class="count-content">
<h2><span class="counter count">100</span><span>+</span></h2>
<p class="text-white">Years of Language Education Experience</p>
</div>
</div>
</div>
</div>
<div class="col">
<div class="count-item">
<div class="count-inner">
<div class="count-content">
<h2><span class="counter count">3080</span><span>+</span></h2>
<p class="text-white">Learners Enrolled in Edukon Courses</p>
</div>
</div>
</div>
</div>
<div class="col">
<div class="count-item">
<div class="count-inner">
<div class="count-content">
<h2><span class="counter count">330</span><span>+</span></h2>
<p class="text-white">Qualified Teachers And Language Experts</p>
</div>
</div>
</div>
</div>
<div class="col">
<div class="count-item">
<div class="count-inner">
<div class="count-content">
<h2><span class="counter count">2300</span><span>+</span></h2>
<p class="text-white">Innovative Foreign Language Courses</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="achieve-part">
<div class="row g-4 row-cols-1 row-cols-lg-2">
<div class="col">
<div class="achieve-item">
<div class="achieve-inner">
<div class="achieve-thumb">
<img src="https://static.vecteezy.com/system/resources/previews/011/381/872/original/male-teacher-sitting-in-the-classroom-3d-character-illustration-png.png" style="
display: block;
margin: auto;
height: auto;
max-width: 62%!important;
-webkit-transition: all .3s ease;
-moz-transition: all .3s ease;
transition: all .3s ease;
" alt="achieve thumb">
</div>
<div class="achieve-content">
<h4>Start Teaching Today</h4>
<p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
<a href="{{route('instructor-register')}}" class="lab-btn"><span>Become A Instructor</span></a>
</div>
</div>
</div>
</div>
<div class="col">
    <div class="achieve-item">
        <div class="achieve-inner">
            <div class="achieve-thumb">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/online-training-course-7397222-6043522.png?f=webp" style=" display: block;
margin: auto;
height: auto;
max-width: 80%!important;
-webkit-transition: all .3s ease;
-moz-transition: all .3s ease;
transition: all .3s ease;" />
            </div>
            <div class="achieve-content">
                <h4>If You Join Our Course</h4>
                <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
                <a href="demos/sob-education/signup.html" class="lab-btn"><span>Register For Free</span></a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div> --}}

</section>
<!-- <section class="container-fluid  py-5 position-relative" style="background:#FEFAEF;">
    <div class="row">
        <div class="col-lg-2 col-sm-6 col-xs-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/01.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
        </div>
        <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/02.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
        </div>
        <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/03.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
        </div>
        <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/04.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
        </div>
        <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/05.png')}}" class="m-auto d-block mob-mt" alt="sponsor">

        </div>
        <div class="col-lg-2 col-sm-6 col-md-4">
            <img src="{{asset('assets/images/sponsor/06.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
        </div>
    </div>
</section> -->
<script>
    function sendPrompt(prompt) {
        document.querySelector('input[name="value"]').value = prompt;
    }
</script>
<script>
    const heading = document.getElementById('heading');
    const text = heading.innerText;
    heading.innerText = '';

    for (let i = 0; i < text.length; i++) {
        const span = document.createElement('span');
        span.innerText = text[i];
        span.style.opacity = '0';
        heading.appendChild(span);
    }

    let index = 0;
    const spans = heading.querySelectorAll('span');
    const interval = setInterval(() => {
        spans[index].style.opacity = '1';
        index++;
        if (index === spans.length) {
            clearInterval(interval);
        }
    }, 100);

    let timeout;

    function showText() {

        document.getElementById('hoverText').style.display = 'block';
        timeout = setTimeout(function() {
            hideText();
        }, 10000);

    }

    function hideText() {
        document.getElementById('hoverText').style.display = 'none';
    }

    function showTitle() {
        document.getElementById('button-title').style.display = 'block';
        timeout = setTimeout(function() {
            hideTitle();
        }, 2000);

    }

    function hideTitle() {
        document.getElementById('button-title').style.display = 'none';
    }

    function showPrompts() {
        document.getElementById('prompts').style.display = 'block';
        timeout = setTimeout(function() {
            closePrompts();
        }, 30000);
    }

    function closePrompts() {
        document.getElementById('prompts').style.display = 'none';
    }
</script>
@endsection