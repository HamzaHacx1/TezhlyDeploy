@extends('front_app.layouts.template')
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('assets/css/chats.css')}}">
<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>
    try {
        Typekit.load({
            async: true
        });
    } catch (e) {}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<link rel="stylesheet" href="./style.css">

@section('content')
<style>
    input::placeholder {
        opacity: 0.2;
        color: white !important;
        font-size: 17px;
    }
</style>

<div class="container" style="padding-top: 7%;">

    <div id="frame" class="mb-4" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

        <div class="content">

            <div class="messages">
                <ul>
                    <li class="sent">

                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                        <p><span style="font-size: 12px;color: #9b9b9b;">You</span><br>{{$data}}</p>
                    </li>
                    <li class="replies">
                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                        <p class=""><span style="font-size: 12px;color: #9b9b9b;">TEZHLY</span><br>Ok, ok! I want to help, so lets get started with your name?</p>
                    </li>
                    <div id="chat_area">
                    </div>
                    <div class=" my-3" id="skill_submit">
                        <form action="{{route('skillassement')}}">
                            <input type="hidden" name="value" value="{{$data}}">
                            <button type="submit" class="btn btn-dark rounded-3 fs-5 px-4">Take Skills Test</button>
                        </form>

                </ul>
            </div>
            <input type="hidden" id="response" value="2">
            <div class="input-group " style="padding-right: 15px;padding-left:15px">


                <input type="text" style="background:#A8AAA7!important;border:0px;border-radius:30px 30px 30px 30px; margin: 3px;" id="value" name="value" class="form-control bg-transparent text-white fs-5" placeholder="Hi I'm TEZHLY How can i help you ?" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button style="background:#A8AAA7;border-radius:20px 20px 20px 20px;margin:3px" type="submit" id="button-addon2"><i class="fa fa-paper-plane text-white" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <!--
    <div class="row">
        <div class="col-12">
            <div class="bg-secondary rounded-3 w-auto p-2 d-flex w-75">
                <div>
                    <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
                </div>
                <div>

                    <p class="text-dark"></p>
                </div>
            </div>
            <div class="bg-dark rounded-3  p-2 d-flex w-50 ms-auto mt-4 text-white ">
                <div>
                    <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
                </div>
                <div>
                    <h5 class="fw-bold">TEZHLY</h5>
                    <p class="text-white">Ok, ok! I want to help, so lets get started with your name?</p>
                </div>
            </div>
            <div id="chat_area">
            </div>
            <div class=" my-3" id="skill_submit">
                <form action="{{route('skillassement')}}">
                    <input type="hidden" name="value" value="{{$data}}">
                    <button type="submit" class="btn btn-dark rounded-3 fs-5 px-4">Take Skills Test</button>
                </form>

            </div>

            <div class="input-group my-5" id="full-btn">
                <input type="text" style="background:#A8AAA7!important;border:0px;border-radius:20px 0px 0px 20px;" id="value" name="value" class="form-control py-3 bg-transparent fw-bold text-dark fs-5" placeholder="Write message here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button style="background:#A8AAA7;border-radius:0px 20px 20px 0px;" type="button" id="button-addon2"><i class="fas fa-arrow-circle-up fs-3 p-2 rounded-3" style="background:#B7BDBB;"></i></button>
            </div>

        </div>
    </div> -->
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $("#skill_submit").hide();
    $(document).ready(function() {

        var html = '';
        $('#button-addon2').click(function() {
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
                        <p><span style="font-size: 12px;color: #9b9b9b;">You</span><br>${inputValue}</p>
                    </li>`

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            chat1 = "{{$data}}"
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
                        <p class=""><span style="font-size: 12px;color: #9b9b9b;">TEZHLY</span><br>${response}</p>
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
</script>
@endsection
