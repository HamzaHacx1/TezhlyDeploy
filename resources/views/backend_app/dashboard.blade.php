@extends('front_app.layouts.template')
<link rel="stylesheet" href="{{asset('assets/css/my.css')}}">
@section('content')
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

    .asses:hover {
        color: white !important;
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
<div class="container-fluid px-5 mob-pad bg-white" style="padding-top: 10%;background:#e9ebea !important">
    <div class="row">


        <!-- <div class="col-lg-2 col-md-2 col-sm-12 ">

            <div class="border border-dark border-3 bg-white p-3 rounded-3">
                @if ($user->avatar===null)
                <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle w-75 m-auto d-block" alt="">

                @else
                <img src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-circle  m-auto d-block" style="height: 200px;width:200px;object-fit:cover;" alt="">
                @endif
                <h6 class="fw-bold"> <span class="text-uppercase">{{$user->name}}</span></h6>
                <div class="row mt-2  ">
                    <div class="col-lg-4 col-md-4 mt-1 text-center">
                        <small class="fw-bold text-center">406k</small>
                        <small class=" border-3 fw-bold">PEERS</small>
                    </div>

                    <div class="col-lg-4 col-md-4 mt-1 text-center">
                        <small class="fw-bold text-center">{{$postcount}}</small>
                        <small class=" text-center fw-bold">POSTS</small>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-1 text-center">
                        <small class="fw-bold text-center">{{$user->location}}</small>
                        <small class=" text-center fw-bold">Location</small>
                    </div>
                </div>
                <div class="row pb-5 pt-3">
                    <div class="col-12">
                        <table>

                            <tr>
                                <td class="fw-bold">Current:</td>
                                <td> {{$user->company}}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">On The:</td>
                                <td>{{$user->designation}}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Duration:</td>
                                <td>12 Months</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Location:</td>
                                <td>{{$user->location}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-9 col-sm-7 col-sm-12 mt-3">
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="container-fluid mb-3">

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
                        <!-- <form action="{{route('post')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent border-0 mob-hide" id="basic-addon1"> <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle" height="30" width="50" alt=""></span>
                                <textarea type="text" name="description" class="form-control bg-secondary border-dark border-3 rounded-3 fs-4" placeholder="What's on your mind" aria-label="Username" aria-describedby="basic-addon1" rows="3"></textarea>
                                <button type="submit" style="background: none!important;"><i class="fa-solid fa-paper-plane fs-5 p-3 bg-secondary rounded-circle"></i></button>
                        </form> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    @foreach ($posts as $item)
                    <div class="row mt-4">
                        <div class="col-lg-12 col-sm-12 col-md-12 ">
                            <div class=" p-3 rounded-3" style="background: white;">
                                <div class="avatar d-flex flex-row gap-3">
                                    <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle" height="30" width="50" alt="">
                                    <div class="d-block">
                                        <p class="mb-0 fw-bold text-capitalize text-dark">{{$item->user->name}}</p>

                                        <small class="mb-0 text-dark">{{$item->user->designation}}</small>
                                    </div>

                                </div>
                                <p class="mt-3 text-dark" style="font-size: 14px;font-weight:400;line-height:29px">{{$item->description}}</p>
                                <i class="fa-solid fa-heart text-danger fs-4 me-3"></i><i class="fa-regular fa-thumbs-up fs-4 "></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 ">

        <div class=" p-3 rounded-3" style="background: #ffffff;">
            <h5 class="card-title mb-3">My Profile</h5>
            <div class="card card-margin">

                <div class="card-body pt-2">
                    <div class="widget-49">
                        <div class="widget-49-title-wrapper row">
                            <div class="widget-49-date-primary col-3">
                                @if($user->avatar===null)
                                <span class="widget-49-date-day"> <img style="border-radius: 63px;" src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" alt="">
                                </span>
                                @else
                                <img style="border-radius: 63px;" src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-circle  m-auto d-block" alt="">
                                @endif

                            </div>
                            <div class="widget-49-meeting-info col-7">
                                <span class="widget-49-pro-title" style="display: block; font-weight:bold">{{$user->name}}</span>
                                <span class="widget-49-meeting-time" style="display: block;">{{$user->designation}}</span>
                            </div>
                        </div>
                        <div class="margin" style="padding: 17px;">
                            <div class="col-lg-12 col-md-4 mt-1 text-left">
                                <small class="fw-bold text-center"></small>
                                <small class=" text-center fw-bold">POSTS: {{$postcount}}</small>
                            </div>
                            <div class="col-lg-12 col-md-4 mt-1 text-left">
                                <small class=" text-center fw-bold">Location : {{$user?->location ?: 'Not Added'}}</small>
                            </div>
                            <div class="col-lg-12 col-md-4 mt-1 text-left">
                                <small class=" text-center fw-bold">Company : {{$user?->company ?: 'Not Added'}}</small>
                            </div>
                            <div class="col-lg-12 col-md-4 mt-1 mb-3 text-left">
                                <small class=" text-center fw-bold">Designnation : {{$user?->designation ?: 'Not Added'}}</small>
                            </div>
                            <h3 class="progress-label">Peers
                                <span class="pull-right">406K</span>
                            </h3>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                </div>
                            </div>
                            <h3 class="progress-label">Peers
                                <span class="pull-right">406K</span>
                            </h3>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class=" p-2 position-relative rounded-3 mb-4" style="background: #fefaef;border: 1px solid #c9c4c4 !important;">
                    <h5 class="card-title mb-2">My Skillset</h5>
                    <ul class="fw-bold list-unstyled ps-4">
                        @foreach ($skills as $item)
                        <li class="tick">{{$item->name}}</li>
                        @endforeach
                    </ul>
                    <a href="{{route('skillassement')}}" class="btn btn-success text-white m-auto d-block asses" style="width: 100%;border:1px solid #E4E1CF !important"><small>Take Assessment</small></a>
                </div>

                <div class="  shadow  p-2 position-relative rounded-3  ms-auto" style="background: #fefaef;border: 1px solid #c9c4c4 !important;">
                    <ul id='friend-list' style="width:203px;background:#fefaef !important">
                        <h5 class="card-title mb-2">Users</h5>

                        @foreach ($users as $item)
                        <li class='friend selected' style="width: 192px;background: #fefaef">


                            <img src='https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg' />

                            <div class='name'>
                                <small>{{$item->name}}</small>
                                <small class="text-success d-block">+ Add</small>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--
            <div class="border border-3 bg-white border-dark p-2 position-relative rounded-3  ms-auto" style="background: #DFDEDA;">
                <h6 class="fw-bold mb-1">Friends List</h6>
                <ul class="fw-bold list-unstyled ">
                    @foreach ($users as $item)
                    <li class="py-2 border-bottom border-dark">
                        <div class="d-flex flex-row gap-2">
                            <img src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" class="avatar_mini" alt="">
                            <div>
                                <small class="text-capitalize" style="font-size: 12px;">{{$item->name}}</small>
                                {{-- @php
                                  $user=Auth::user();
                                  $data=DB::table('friend_lists')->where('user_id',$user->id)->where('friend_id',$item->id)->first();
                              @endphp
                              @if($data)
                              <small class="text-danger d-block" style="font-size: 12px;"><a href="#"><i class="fa-solid fa-user-plus text-danger"></i></a> Request Sent</small>
                              @else
                              <small class="text-info d-block hover " style="font-size: 12px;"><a href="{{route('add-frnd',['id'=>$item->id])}}"><i class="fa-solid fa-user-plus"></i> Add</a></small>
                                @endif --}}

                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div> -->
            </div>
        </div>
    </div>




</div>




</div>

@endsection
