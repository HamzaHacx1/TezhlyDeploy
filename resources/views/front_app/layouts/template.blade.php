<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tezhly</title>
    <link rel="shortcut icon" href="assets/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/preloder.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demo-view.css')}}">
    <script src="https://kit.fontawesome.com/003e68ae06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    <link rel="stylesheet" href="{{asset('assets/css/chats.css')}}">
    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif !important;
            font-optical-sizing: auto;
            font-style: normal;
        }

        /* Style the chatbot container */
        .chatbot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            min-width: 200px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 12;
        }

        /* Style the chat header */
        .chat-header {
            background-color: white;
            color: black;
            padding-right: 10px;
            padding-left: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            display: flex;
            justify-content: space-between;
        }

        /* Style the chat body */
        .chat-body {
            padding: 10px;
            max-height: 360px;
            overflow-y: auto;
            z-index: 12;
        }

        /* Style the chat footer */
        .chat-footer {
            padding-right: 10px;
            padding-left: 10px;
            padding-top: 5px;
            padding-bottom: 7px;
            display: flex;
            align-items: center;
        }

        /* Style the chat input and send button */
        #userInput {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 10px;
        }

        #sendBtn {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #closeBtn {
            background-color: transparent;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        /* Style the chat button */
        #chatBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding-right: 25px;
            padding-left: 25px;
            background-color: #FEFAEF;
            color: black;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            z-index: 12;
            font-weight: bold;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .btun {
            padding: 10px 16px !important;
            font-size: 24px !important;

        }

        .w3-teal {
            color: #000 !important;
            background-color: #00968800 !important;
        }

        .w3-button:hover {
            color: #000 !important;
            background-color: #d8d8d8 !important;
        }

        .w3-bar-block .w3-bar-item {
            width: 100%;
            display: block;
            padding: 13px 16px;
            text-align: left;
            border: none;
            white-space: normal;
            float: none;
            outline: 0;
        }

        .w3-button i {
            margin-right: 11px;

        }
    </style>
</head>

<body>

    <!-- preloader ending here -->

    <!-- common spinner -->

    <!-- Common Sidebar Demo -->
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;    width: 223px;    z-index: 1299999;" id="leftMenu">
        <button onclick="closeLeftMenu()" class="w3-bar-item w3-button btun w3-large" style="    padding: 20px 16px;">&times;</button>

        <a href="{{route('home')}}" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Home</a>
        <a href="{{route('about')}}" class="w3-bar-item w3-button"><i class="fas fa-info-circle"></i> About</a>
        <a href="{{route('resume-ai-builder')}}" class="w3-bar-item w3-button"><i class="fas fa-file-alt"></i> Resume Ai Builder</a>
        <a href="{{route('courses')}}" class="w3-bar-item w3-button"><i class="fas fa-graduation-cap"></i> Courses</a>
        <a href="{{route('faqs')}}" class="w3-bar-item w3-button"><i class="fas fa-question-circle"></i> FAQs</a>
        <a href="{{route('pricing')}}" class="w3-bar-item w3-button"><i class="fas fa-dollar-sign"></i> Pricing</a>
        <a href="{{route('contact')}}" class="w3-bar-item w3-button"><i class="fas fa-envelope"></i> Contact</a>

    </div>

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>


    @include('front_app.layouts.header')
    @yield('content')
    @if(Route::currentRouteName() !== 'home' || Route::currentRouteName() !== 'tezhly-chat')

    <button id="chatBtn"><i class="fa-regular fa-comment-dots"></i> Talk To TEZHLY</button>
    @endif

    <div id="chatbot" class="chatbot">
        <div class="chat-header">
            <span class="mt-3">TEZHLY</span>
            <button id="closeBtn"><i class="fas fa-times" style="color: black;"></i></button>
        </div>

        <div id="frame" class="mb-1" style="border-radius:0;height: 60vh;">

            <div class="content">


            </div>
        </div>


        <div class="chat-footer">
            <input type="text" style="background:#A8AAA7!important;border:0px;border-radius:30px 30px 30px 30px;" placeholder="Hi I'm TEZHLY How can i help you ?" aria-describedby="sendBtn" aria-label="Recipient's username">
            <button id="sendBtn" style="background:#A8AAA7;border-radius:20px 20px 20px 20px;margin:3px"><i class="fa fa-paper-plane text-white" aria-hidden="true"></i></button>
        </div>
    </div>





    @include('front_app.layouts.footer')

    @if(session('success'))
    <div class="toast show fixed-bottom" id="success" style="z-index: 99999;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="fa-solid fa-circle-check text-success me-2"></i>
            <strong class="me-auto text-success"> Success</strong>
            <small>1 sec ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script>
        $("#skill_submit").hide();
        $(document).ready(function() {

            var html = '';
            $('#sendBtn').click(function() {
                let respo_val = $("#response").val();
                if (respo_val === "1") {
                    $("#response").val("2");
                } else if (respo_val === "2") {
                    $("#response").val("3");
                } else if (respo_val === "3") {
                    $("#full-btn").hide();
                    $("#response").val("4");
                    $("#skill_submit").show();
                }

                var inputValue = $("#value").val();



                html += ` <li class="sent">
                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p>${inputValue}</p>
                    </li>`

                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                chat1 = "Hello Tezhly"
                // Create FormData and append data
                var formData = new FormData();
                formData.append('step', respo_val);
                formData.append('data', chat1);

                // Make the AJAX request with proper headers
                $.ajax({
                    method: "POST",
                    url: "{{ route('ai-chat') }}", // Replace with your actual API endpoint
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                    },
                    dataType: "json",

                    success: function(response) {
                        // Handle the successful response here
                        console.log(response);
                        html += `

            <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p class="">${response}</p>
                    </li>
            `;
                        $("#chat_area").html(html);
                        var inputValue = $("#value").val("");


                    },
                    error: function(error) {
                        // Handle errors here
                        console.error("Error:", error);
                    }
                });
            });
        });

        $(document).ready(function() {
            setTimeout(function() {
                var successDiv = document.getElementById('success');
                if (successDiv) {
                    successDiv.style.display = 'none';
                }
            }, 3000);
        });
        window.onscroll = function() {
            const header = document.querySelector('.header');
            const scrollPosition = window.scrollY;

            if (scrollPosition > 100) {
                $("#more").hide(300);
                $("#tezhly").addClass('text-white');
                header.style.background = 'rgba(51, 51, 51, 0.8)'; // Semi-transparent background color for the header
                // Add a blur effect to the header background
            } else {
                header.classList.remove('fixed');
                $("#more").show(500);
                $("#tezhly").removeClass('text-white');
                header.style.background = 'transparent'; // Reset header background
                header.style.backdropFilter = 'none'; // Remove the blur effect
            }

            // Other actions you may have for scrolling
            // For example, changing header height, adding/removing classes, etc.
        };

        document.addEventListener("DOMContentLoaded", function() {
            var items = document.querySelectorAll('.nav-list');

            items.forEach(function(item) {
                item.addEventListener('click', function() {
                    items.forEach(function(item) {
                        if (item !== this) {
                            item.classList.remove('active');
                        }
                    }, this);
                    this.classList.add('active');
                });
            });
        });

        var chatbot = document.getElementById('chatbot');
        var chatBtn = document.getElementById('chatBtn');
        var closeBtn = document.getElementById('closeBtn');

        // Show the chatbot when the chat button is clicked
        chatBtn.addEventListener('click', function() {
            chatbot.style.display = 'block';
        });

        // Hide the chatbot when the close button is clicked
        closeBtn.addEventListener('click', function() {
            chatbot.style.display = 'none';
        });


        function openLeftMenu() {
            document.getElementById("leftMenu").style.display = "block";
        }

        function closeLeftMenu() {
            document.getElementById("leftMenu").style.display = "none";
        }

        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</body>

</html>
