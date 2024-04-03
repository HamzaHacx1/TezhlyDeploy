@extends('front_app.layouts.template')
<style>
    .facebook-post {
        border: 1px solid #ccc;
        border-radius: 13px;
        padding: 35px;
        margin: 20px auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding-top: 25px;
        background: #DBDEDD;

    }

    .user-info {
        display: flex;
        align-items: center;
    }

    .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .username {
        font-weight: bold;
    }

    .input-field input[type="text"] {
        width: calc(100% - 10px);
        height: 50px;
        border: 1px solid #ddd;
        border-radius: 25px;
        padding: 10px;
    }

    .input-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        margin-left: 18px;
        margin-top: 17px
    }

    .media-upload input[type="file"] {
        margin-right: 10px;
    }

    .actions button {
        padding: 7px 20px;
        background-color: black;
        color: #fff;
        border: none;
        border-radius: 25px;
        cursor: pointer;
    }

    .actions button:hover {
        background-color: #314e86;
    }




    /* chat */



    .friend {
        position: relative;
        /* Add this to position chat button relative to friend */
        width: 300px;
        height: 60px;
        background: white;
        /* border-bottom: 1px solid #DDD; */
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .chat-button {
        position: absolute;
        right: 10px;
        background: #b7bdbb;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        cursor: pointer;
        padding: 12px;
    }

    .friend .name {
        font-size: 18px;
        flex: 1;
        /* Allow name to take remaining space */
    }

    #friend-list {
        display: block;
        margin: 0;
        padding: 0;
        width: 322px;
        min-height: 200px;
        /* Set the minimum height */
        max-height: 550px;
        /* Set the maximum height */
        overflow-y: auto;
        /* Add vertical scroll if needed */
        background: white;
        list-style-type: none;
        border-radius: 12px;

    }

    /* Hide the default scrollbar */
    #friend-list::-webkit-scrollbar {
        display: none;
    }

    /* Show custom scrollbar */
    #friend-list {
        scrollbar-width: thin;
        /* "auto" may also work depending on the browser */
        scrollbar-color: #4A5568 #EDF2F7;
        /* Set the color of the thumb and the track */
    }

    /* Define the style of the scrollbar thumb */
    #friend-list::-webkit-scrollbar-thumb {
        background-color: #4A5568;
        /* Color of the thumb */
        border-radius: 10px;
        /* Rounded corners */
    }

    /* Define the style of the scrollbar track */
    #friend-list::-webkit-scrollbar-track {
        background-color: #EDF2F7;
        /* Color of the track */
    }

    .friend {
        width: 300px;
        height: 60px;
        /* background: #EEE; */
        /* border-bottom: 1px solid #DDD; */
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .friend img {
        width: 45px;
        height: 45px;
        border-radius: 30px;
        border: 2px solid #AAA;
        object-fit: cover;
        margin-left: 5px;
        margin-right: 10px;
    }

    .friend .name {
        font-size: 18px;
    }

    .friend.selected {
        /* background: #43A047; */
        color: black;
    }

    .friend.selected img {
        border-color: white;
    }

    .friend:not(.selected):hover {
        background: #DDD;
    }

    .chat-button i {
        color: black
    }

    .search-friend {
        padding-left: 18px;
        padding-right: 18px;
    }

    .input-with-image {
        position: relative;
        display: inline-block;
    }

    .image-input {
        padding-left: 47px;
        background-size: 30px 30px;
        background-repeat: no-repeat;
        background-position: 11px center;
        border: 1px solid #ccc;
        border-radius: 19px;
        width: 100%;
        height: 54px;

    }

    .has-avatar {
        background-image: url('{{ asset("assets/user/".$user->avatar) }}');
    }


    .emoji-icon {
        position: relative;
        top: 25%;
        right: 10px;
        transform: translateY(-50%);
        width: 30px;
        /* Adjust based on emoji icon width */
        height: 16px;
    }

    .input-icons {
        display: flex;
        /* Use flexbox to align items horizontally */
        align-items: center;
        /* Center items vertically */
        width: 100%;
        margin-bottom: 10px;
        background: #e9ebea;
        border: 1px solid #c6c6c6;
        border-radius: 50px;
        padding-left: 0px !important;

    }

    .icon {
        padding: 10px;
        color: green;
        min-width: 57px;
        text-align: center;
        width: 62px;
        border-radius: 60px;
        min-height: 62px;

    }

    .input-field {
        flex: 1;
        padding: 10px;
        border: none !important;
        background: none;

    }
</style>
@section('content')

<div class="container-fluid px-5 " style="padding-top: 7%;background:#e9ebea !important">
    <div class="row">
        <div class="col-12">
            <h2 class="display-4 fw-bold mb-5 text-dark ">#YourCommunity</h2>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">


            <div class="container-fluid mb-5">

                <div class="row">




                    <form action="{{route('post')}}" method="post">
                        @csrf

                        <div class="facebook-post">
                            <div class="input-icons">
                                @if($user->avatar !== null)
                                <img src="{{asset('assets/user/'.$user->avatar)}}" alt="Profile Picture" class="icon">
                                @else
                                <img src="https://www.pikpng.com/pngl/m/80-805523_default-avatar-svg-png-icon-free-download-264157.png" alt="Profile Picture" class="profile-picture">
                                @endif
                                <input class="input-field" type="text" name="description" aria-describedby="basic-addon1" placeholder="Type Something Insteresting">
                                <span class="emoji-icon">&#x1F60A;</span>
                            </div>


                            <div class="input-actions">
                                <div class="media-upload" style="display: flex;align-items:center;gap:11px">
                                    <i class="fas fa-file mt-1" style="font-size: 20px;"></i>
                                    Files
                                    <i class="fas fa-images mt-1" style="font-size: 20px;"></i>
                                    Media
                                </div>
                                <div class="actions">
                                    <button type="submit">Send</button>
                                </div>
                            </div>

                    </form>
                </div>





            </div>
            @foreach ($posts as $item)
            <div class="row mt-4">
                <div class="col-lg-12 col-sm-12 col-md-12 ">
                    <div class="bg-white p-3 rounded-3">
                        <div class="avatar d-flex flex-row gap-3">
                            @if($item->user->avatar !== null)
                            <img src="{{asset('assets/user/'.$item->user->avatar)}}" class="rounded-circle" height="30" width="50" alt="">
                            @else
                            <img src="https://www.pikpng.com/pngl/m/80-805523_default-avatar-svg-png-icon-free-download-264157.png" class="rounded-circle" height="30" width="50" alt="">
                            @endif
                            <div class="d-block">
                                <p class="mb-0 fw-bold text-capitalize">{{$item->user->name}} . <span style="font-size: 12px;font-weight:400">{{$item->created_at->diffForHumans();}}</span> </p>

                            </div>

                        </div>
                        <p class="mt-3" style="font-size: 14px;font-weight:400;line-height:29px">{{$item->description}}</p>
                        <i class="fa-solid fa-heart text-danger fs-4 me-3"></i><i class="fa-regular fa-thumbs-up fs-4 "></i>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 px-5">
        <ul id='friend-list'>
            <h4 class="fw-bold m-4">Friends ({{$friends->count()}})</h4>
            <div class="search-friend">

                <input type="text" id="friend-search" placeholder="Search friends..." class="form-control mb-3">
            </div>

            @foreach ($friends as $item)
            <li class='friend selected'>
                @if ($item->frnd->avatar !== null)
                <img src='{{asset('assets/user/'.$item->frnd->avatar)}}' />

                @else
                <img src='https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg' />
                @endif
                <div class='name'>
                    <small>{{$item->frnd->name}}</small>
                    <small class="text-success d-block">{{$item->frnd->email}}</small>
                </div>
                <div class='chat-button'> <i class="fa-solid fa-message"></i></div>
            </li>
            @endforeach
        </ul>
        <!-- <div class="border border-1  p-4 position-relative rounded-3 " style="background: white;">
            <h4 class="fw-bold mb-4">Friends list</h4>
            <ul class="fw-bold list-unstyled ">
                @foreach ($friends as $item)
                <li class="mb-1">
                    <div class="d-flex flex-row gap-2">
                        @if ($item->frnd->avatar !== null)
                        <img src="{{asset('assets/user/'.$item->avatar)}}" class="avatar_mini" alt="">
                        @else
                        <img src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" class="avatar_mini" alt="">
                        @endif


                        <div>
                            <small>{{$item->frnd->name}}</small>
                            <small class="text-success d-block">Online</small>
                        </div>

                    </div>
                </li>
                @endforeach

            </ul>

        </div> -->
    </div>
</div>

</div>

@endsection
