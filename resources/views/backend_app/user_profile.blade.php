@extends('front_app.layouts.template')
<link rel="stylesheet" href="{{asset('assets/css/my.css')}}">
@section('content')
<style>
    .active {
        background: white !important;
        color: black !important;
        /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50), 0px 4px 4px 0px rgba(0, 0, 0, 0.30) inset; */
    }

    .tabs li {
        cursor: pointer;
    }

    .tab-link {
        border: 1px solid #dbdbdb;
    }

    .actives {
    background: #dbdedd !important;
    color: white !important;
}

</style>
</style>
<div class="container-fluid px-5 mob-pad " style="padding-top: 10%;background:#E9EBEB">
    <div class="row py-1 pt-1 rounded-5 shadow mx-2 mb-3" style="background:#ffffff">
        <div class="col-md-12">
            <ul class="list-unstyled tabs mb-0" style="    padding: 10px;">
                <li class="list-inline-item p-3 rounded-5 actives  tab-link" style="font-weight: 600" data-tab="allAds">My Plan</li>
                <li class="list-inline-item p-3 rounded-5   tab-link" style="font-weight: 600" data-tab="activeAds">My Friends</li>
                <li class="list-inline-item p-3 rounded-5   tab-link" style="font-weight: 600" data-tab="frndreqs">Friends Requests</li>
                <li class="list-inline-item p-3 rounded-5   tab-link" style="font-weight: 600" data-tab="pendingAds">My Courses</li>

                <li class="list-inline-item p-3 rounded-5   tab-link" style="font-weight: 600" data-tab="pausedAds">My Skills</li>
                <li class="list-inline-item p-3 rounded-5   tab-link" style="font-weight: 600" data-tab="other">Other Users</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-sm-9 col-sm-12 mt-3">

            <div class="container-fluid mb-4">


                <div class="col-md-10 col-lg-12">
                    <!-- <div class="row py-1 rounded-2 bg-light mx-2 shadow">
                            <div class="col-md-12">
                                <ul class="list-unstyled tabs">
                                    <li class="list-inline-item p-3 rounded-2 active  tab-link" style="font-weight: 600" data-tab="allAds">My Plan</li>
                                    <li class="list-inline-item p-3 rounded-2   tab-link" style="font-weight: 600" data-tab="activeAds">My Friends</li>
                                    <li class="list-inline-item p-3 rounded-2   tab-link" style="font-weight: 600" data-tab="frndreqs">Friends Requests</li>
                                    <li class="list-inline-item p-3 rounded-2   tab-link" style="font-weight: 600" data-tab="pendingAds">My Courses</li>

                                    <li class="list-inline-item p-3 rounded-2   tab-link" style="font-weight: 600" data-tab="pausedAds">My Skills</li>
                                    <li class="list-inline-item p-3 rounded-2   tab-link" style="font-weight: 600" data-tab="other">Other Users</li>
                                </ul>
                            </div>
                        </div> -->
                    <div class="row p-2 mt-2 rounded-2 mx-2 rounded-3" style="height:100vh;overflow-y:auto;padding-bottom:10px;">
                        <!-- All Ads -->
                        <div class="tab-content" id="allAds">
                            <h2 class="py-5 text-center my-5">Coming Soon...</h2>
                        </div>
                        <!-- Active Ads -->
                        <div class="tab-content" id="frndreqs" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Image</th>
                                    <th>Name</th>

                                    <th class="text-end px-5">Functions</th>

                                </tr>
                                @foreach ($reqs as $key=>$item)


                                <tr>
                                    <td>
                                        {{$key}}


                                    </td>
                                    <td>
                                        @if($item->user->avatar !== null)
                                        <img src="{{asset('assets/user/'.$item->user->avatar)}}" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @else
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @endif
                                    </td>
                                    <td>{{$item->user->name}}</td>

                                    <td class="text-end">
                                        <a href="{{route('accept-frnd',['id'=>$item->id])}}"><button class="btn btn-info text-white">Accept Request</button></a>
                                        <a href="{{route('decline-frnd',['id'=>$item->id])}}"><button class="btn btn-info text-white">Decline Request</button></a>
                                        {{-- <a href="#"><i class="fas fa-wrench bg-warning text-white p-2 rounded-circle mx-2 hover-icon"></i></a> --}}

                                    </td>

                                </tr>
                                @endforeach
                            </table>
                        </div>


                        {{-- Request --}}

                        <div class="tab-content" id="activeAds" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Image</th>
                                    <th>Name</th>

                                    <th class="text-end px-5">Functions</th>

                                </tr>

                                @foreach ($friends as $key=>$item)


                                <tr>
                                    <td>
                                        {{$key}}


                                    </td>
                                    <td> @if($item->frnd->avatar !== null)
                                        <img src="{{asset('assets/user/'.$item->frnd->avatar)}}" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @else
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @endif
                                    </td>
                                    <td>{{$item->frnd->name}}</td>

                                    <td class="text-end">
                                        <a href="{{route('un-frnd',['id'=>$item->id])}}"><button class="btn btn-success text-white mx-4">Unfriend</button></a>
                                        {{-- <a href="#"><i class="fas fa-wrench bg-warning text-white p-2 rounded-circle mx-2 hover-icon"></i></a> --}}

                                    </td>

                                </tr>
                                @endforeach

                            </table>
                        </div>

                        <!-- Pending Ads -->
                        <div class="tab-content" id="pendingAds" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Course Name</th>

                                    <th>Price</th>
                                    <th>Status</th>

                                    <th class="text-end px-5">Functions</th>

                                </tr>

                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td><img src="{{asset('assets/courses/young-serious-businesswoman.jpg')}}" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt=""></td>
                                    <td>20$</td>
                                    <td><span class="badge bg-success">Active</span></td>

                                    <td class="text-end">
                                        <a href="#"><i class="fas fa-eye bg-success text-white p-2 rounded-circle mx-2 hover-icon"></i></a><a href="#" class="text-decoration-none" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <i class="fas fa-trash text-white rounded-circle p-2 bg-danger hover-icon me-5"></i>
                                        </a>
                                        {{-- <a href="#"><i class="fas fa-wrench bg-warning text-white p-2 rounded-circle mx-2 hover-icon"></i></a> --}}

                                    </td>

                                </tr>

                            </table>
                        </div>

                        <!-- Denied Ads -->
                        <div class="tab-content" id="deniedAds" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Course Name</th>

                                    <th>Price</th>
                                    <th>Status</th>

                                    <th class="text-end px-5">Functions</th>

                                </tr>

                                <tr>
                                    <td>
                                        1


                                    </td>
                                    <td><img src="{{asset('assets/courses/young-serious-businesswoman.jpg')}}" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt=""></td>
                                    <td>20$</td>
                                    <td><span class="badge bg-success">Active</span></td>

                                    <td class="text-end">
                                        <a href="#"><i class="fas fa-eye bg-success text-white p-2 rounded-circle mx-2 hover-icon"></i></a><a href="#" class="text-decoration-none" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <i class="fas fa-trash text-white rounded-circle p-2 bg-danger hover-icon me-5"></i>
                                        </a>
                                        {{-- <a href="#"><i class="fas fa-wrench bg-warning text-white p-2 rounded-circle mx-2 hover-icon"></i></a> --}}

                                    </td>

                                </tr>

                            </table>
                        </div>

                        <!-- Paused Ads -->
                        <div class="tab-content" id="pausedAds" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Skill Name</th>


                                    <th class="text-end px-5">Functions</th>

                                </tr>


                                @foreach ($skills as $key=>$item)



                                <tr>
                                    <td>{{$key}}
                                    </td>
                                    <td>{{$item->name}}</td>


                                    <td class="text-end">
                                        <a href="#"><i class="fas fa-eye bg-success text-white p-2 rounded-circle mx-2 hover-icon"></i></a><a href="#" class="text-decoration-none" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <i class="fas fa-trash text-white rounded-circle p-2 bg-danger hover-icon"></i>
                                        </a>
                                        <a href="#"><i class="fas fa-wrench bg-warning text-white p-2 rounded-circle mx-2 hover-icon"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>


                        {{-- Other --}}
                        <div class="tab-content" id="other" style="display:none;">
                            <table class="table    table-hover">
                                <tr>
                                    <th class="px-2 p">No</th>
                                    <th>Image</th>
                                    <th style="width: 50%;">Name</th>
                                    <th>Functions</th>
                                </tr>
                                @foreach ($users as $key=>$item)
                                <tr>
                                    <td>
                                        {{$key}}
                                    </td>
                                    <td>
                                        @if($item->avatar !== null)
                                        <img src="{{asset('assets/user/'.$item->avatar)}}" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @else
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" class="rounded-3" style="height:30px;width:30;object-fit:cover;" alt="">
                                        @endif
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>

                                        @php
                                        $user=Auth::user();
                                        $data=DB::table('friend_lists')->where('user_id',$user->id)->where('friend_id',$item->id)->first();


                                        @endphp
                                        @if($data)
                                        @if($data->status==="pending")
                                        <small class="text-danger d-block" style="font-size: 12px;"><a href="#"><i class="fa-solid fa-user-plus text-danger"></i></a> Request Sent</small>
                                        @else
                                        <small class="text-success d-block" style="font-size: 12px;"><i class="fa-solid fa-user-plus text-success"></i> Friend</small>
                                        @endif
                                        @else
                                        <small class="text-info d-block hover " style="font-size: 12px;"><a href="{{route('add-frnd',['id'=>$item->id])}}"><i class="fa-solid fa-user-plus"></i> Add</a></small>
                                        @endif


                                    </td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 ">

            <div class=" p-3 rounded-3" style="background: #ffffff;">
                <h5 class="card-title pb-3">My Profile</h5>
                <div class="card card-margin" style="border:1px solid #fefaef !important;">
                    <div class="card-header no-border">
                    </div>
                    <div class="card-body pt-0" style="border:1px solid #fefaef !important;">
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
                            <div class="row pb-5 pt-3">
                    <a href="{{route('edit-user')}}" class="btn btn-success text-white m-auto d-block" style="width: 40%;">Edit</a>
                    <a href="{{route('courses')}}" class="btn btn-success text-black m-auto d-block" style="width: 40%;;background:#E4E1CF !important;border:1px solid #E4E1CF !important">Courses</a>
                </div>
                        </div>
                    </div>
                </div>
<!--

                @if($user->avatar===null)
                <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle w-75 m-auto d-block" alt="">

                @else
                <img src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-circle  m-auto d-block" style="height: 200px;width:200px;object-fit:cover;" alt="">
                @endif
                <h6 class="fw-bold text-center fs-4 mt-3"> <span class="text-uppercase">{{$user->name}}</span></h6>
                <small class="fw-bold text-center d-block mt-3"> <span class="text-uppercase">{{$user->designation}}</span></small>

                <div class="row mt-2  ">
                    <div class="d-flex flex-row justify-content-center">
                        <small class="fw-bold text-center me-2">PEERS</small>
                        <small class="ms-2" class=" border-3 fw-bold">406k</small>
                        <div style="border:3px solid black;width:100px;padding:0px;height:1px;margin-top:8px;"></div>

                    </div>
                    <div class="d-flex flex-row justify-content-center mt-2">
                        <small class="fw-bold text-center me-2">POSTS</small>
                        <div style="border:3px solid black;width:100px;padding:0px;height:1px;margin-top:8px;"></div>
                        <small class="ms-2" class=" border-3 fw-bold">{{$postcount}}00K</small>


                    </div>



                </div>
                <div class="row pb-5 pt-3">
                    <a href="{{route('edit-user')}}" class="btn btn-success text-white w-75 py-2 m-auto d-block">Edit Profile</a>
                    <button class="btn btn-primary w-75 py-2 m-auto d-block mt-2">View my courses</button>
                </div> -->
            </div>
        </div>


    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(".status_form select").change(function() {
        $(this).closest(".status_form").submit();
    });
    $(document).ready(function() {

        $(".tab-link").click(function() {
            $(".tab-link").removeClass("actives"); // Remove active class from all tabs
            $(this).addClass("actives"); // Add active class to the clicked tab

            var tab = $(this).data("tab");
            $(".tab-content").hide();
            $("#" + tab).show();
        });

        // Handle tab switching
    });
</script>
@endsection
