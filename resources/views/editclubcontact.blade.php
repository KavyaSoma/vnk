@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin:13px;text-align: center;">
    {!! session('message.content') !!}
    </div>
    @endif
<!-- club-profile starts here -->
<div class="container" id="main-code">
     <div class="fb-profile">
         <img align="left" class="fb-image-lg" src="{{asset('images/swimm2.jpg')}}" alt="cover image"/>
         <img align="left" class="fb-image-profile thumbnail" src="{{asset('images/sravan.jpeg')}}" alt="Profile image"/>
     <div class="fb-profile-text">
         <h3>Sravan</h3>
         <p>Club Admin</p>
        <hr>
      <center>
        <div class="row">
          <div class="col-sm-2  col-xs-4 followers">
          <p>Followers <a href="#"><span class="badge">50</span></a></p>
            </div>
            <div class="col-sm-2 col-xs-4 following ">
              <p>Following <a href="#"><span class="badge">70</span></a></p>
            </div>
            <div class="col-sm-2 col-xs-4 members ">
              <p>Members <a href="#"><span class="badge">30</span></a></p>
            </div>
          </div>
  </div>
        <hr>
        <h5 style="background-color:#46A6EA;color:#fff;"><a href="{{url('addclub')}}"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button></a> Add Club</h5>

<div class="row" style="border:1px solid #eee">
  <div class="board">
    <div class="board-inner">
      <center><ul class="nav nav-tabs nav_info" id="myTab">
          <div class="liner"></div>
          <li>
              <a href="{{url('/editclub/'.$club_id)}}" title="Basic Details">
                <span class="round-tabs">
                  <i class="fa fa-info"></i>
                </span>
               </a>
             </li>
               <li>
                 <a href="{{url('/edit-clubaddress/'.$club_id)}}" title="Address">
                    <span class="round-tabs">
                      <i class="fa fa-map-marker"></i>
                   </span>
                </a>
               </li>
                <li class="active">
                  <a href="{{url('/edit-clubcontact/'.$club_id)}}" title="Contact">
                    <span class="round-tabs">
                      <i class="fa fa-phone"></i>
                    </span>
                 </a>
                </li>
                 <li >
                   <a href="{{url('/edit-clublinks/'.$club_id)}}" title="Social Links">
                      <span class="round-tabs">
                        <i class="fa fa-globe"></i>
                     </span>
                    </a>
                  </li>
                </ul></center>
                </div>
<div class="tab-content tab_details">
<div class="tab-pane fade in active" id="contact">
  <form class="form-horizontal" style="background:#fff;padding:35px" method="post" action="{{url('edit-clubcontact/'.$club_id)}}">
    {{csrf_field()}}
    @foreach($club_links as $links)
      <div class="col-sm-12">
          <div class="form-group">
              <label class="control-label col-sm-4" for="txt">Mobile Number:</label>
              <div class="col-sm-6">
                  <input type="text" class="form-control" id="club-mobile" name="mobile" value="{{$links->MobilePhone}}"  pattern="([0-9]){10}" required>
                  <span class="mobile-error" style="color:red;display: none">Mobile Number should contain 10 digits</span>
            </div>
          </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="email">Email:</label>
                  <div class="col-sm-6">
                      <input type="email" class="form-control" id="email" name="email" value="{{$links->Email}}" required>
                  </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="txt">Web:</label>
                <div class="col-sm-6"> 
                  <input type="text" class="form-control" id="txt" name="web" value="{{$links->Website}}" required>
                </div>
           </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="txt">Short Name:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" id="txt" name="short_name" value="{{$links->ShortName}}" readonly>
                  </div>
            </div>
            <center>
               <a href="{{url('/edit-clubaddress/'.$club_id)}}" class="btn btn-primary">Back</a>
                 <button class="btn btn-primary">Save</button>
               <a href="{{url('edit-clublinks/'.$club_id)}}" class="btn btn-primary">Next</a><br><br>
             </div>
            @endforeach
          </form>
        </div>
</div>
</div>
</div>
</div>
</div>

@endsection