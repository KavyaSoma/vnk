<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>SwimmIQ</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
   <link href="<?php echo e(asset('public/css/lib/bootstrap.min.css')); ?>" rel="stylesheet">
   <link  href="<?php echo e(asset('public/css/lib/swiper.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('public/css/lib/jquery.es-drawermenu.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/css/lib/style.min.css')); ?>">
   <link  href="<?php echo e(asset('public/css/lib/waves.css')); ?>" rel="stylesheet">
   <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('public/bower_components/fullcalendar/dist/fullcalendar.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/bower_components/fullcalendar/dist/fullcalendar.print.min.css')); ?>" media="print">
<script src="<?php echo e(asset('public/js/lib/jquery.min.js')); ?>"></script>

</head>
 <body>
<!-- header Desktop -->
  <header class="mob-none tab-none">
      <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo" >
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(url('public/images/logo.png')); ?>" />
                    </a>
                </div>
                <div class="col-md-6 search">
                   <form action="<?php echo e(url('search/all')); ?>" method="get">
                    <div class="input-group">
                        <div class="input-group-btn search-dropdown">
                            <button id="dLabel" class="dropdown-toggle btn btn-default"  type="button" data-toggle="dropdown"                                         aria-haspopup="true" aria-expanded="false">
                            All
                            <span class="caret"></span>
                          </button>
                           <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="#clubs">Clubs</a></li>
                            <li><a href="#events">Events</a></li>
                            <li><a href="#venues">Venues</a></li>
                            <li><a href="#instructors">Instructors</a></li>
                          </ul>
                       </div>
                       <div class="input-group-btn search-bar">
                         <input type="text" placeholder="Search..." id="search-input" name="search_term" class="form-control" required/>
                        </div>
                        <div class="input-group-btn search-submit">
                          <input type="submit" class="search-sub-btn"  />
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-md-3 usrdetails mob-none">
<ul class="list-inline">
                      <?php if(Session::has('user_id')): ?>
                      <div class="col-md-1 dropdown">
  <?php if(Session::get('user_image')=='NA'): ?>
  <img class="img-circle dropdown-toggle" src="<?php echo e(url('public/images/profile.png')); ?>" id="user_img" data-toggle="dropdown">
  <?php else: ?>
  <img class="img-circle dropdown-toggle" src="<?php echo e(Session::get('user_image')); ?>" id="user_img" data-toggle="dropdown">
  <?php endif; ?>
  <ul class="dropdown-menu" id="user_menu">
  <?php if(Session::get('user_type') == "club"): ?>
  <li><a href="<?php echo e(url('addclub')); ?>">Add Club</a></li>
  <li><a href="<?php echo e(url('addclub')); ?>">Add Club</a></li>
  <?php endif; ?>
  <li><a href="<?php echo e(url('addevent')); ?>">Add Event</a></li>
  <?php if(Session::get('user_type') == "venue"): ?>
  <li><a href="<?php echo e(url('addvenue')); ?>">Add Venue</a></li>
  <li><a href="<?php echo e(url('addinstructor')); ?>">Set Instructor</a></li>
  <?php endif; ?>
  <li><a href="#"><hr></a></li>
  <li><a href="<?php echo e(url('postnews')); ?>">Post News</a></li>
  <li><a href="<?php echo e(url('notifications')); ?>">Notifications</a></li>
  <li><a href="<?php echo e(url('profile')); ?>">Profile</a></li>
  <li><a href="<?php echo e(url('/logout')); ?>">Logout</a></li>
  </ul>
  </div>
                      <?php else: ?>
                      <a href="<?php echo e(url('/login')); ?>"><button class="btn btn-primary " style="margin-left: 150px;width: 100px;"> Login</button></a>
                      <?php endif; ?>
                    </ul>
              </div>
            </div>
        </div>
    </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navigation">
                    <ul class="list-inline pull-left">
                      <?php if(Session::has('user_id')): ?>
                      <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
                      <li><a href="<?php echo e(url('/poolfinder')); ?>">Poolfinder</a></li>
                      <li><a href="<?php echo e(url('/clubs')); ?>">Clubs</a></li>
                      <li><a href="<?php echo e(url('/events')); ?>">Events</a></li>
                      <li><a href="<?php echo e(url('/venues')); ?>">Venues</a></li>
                      <li><a href="<?php echo e(url('/instructors')); ?>">Instructors</a></li>
                      <li><a href="<?php echo e(url('/inbox')); ?>">Messages</a></li>
                      <li><a href="<?php echo e(url('/socialnetwork')); ?>">Social Network</a></li>
                      <?php else: ?>
                      <li></li>
                      <?php endif; ?>

                    </ul>

                </nav>
            </div>
        </div>
    </header>
    <!-- header mob,tab -->
     <header class="animated  desk-none mob-block tab-block header-fixed">
        <div class="container">
            <div class="top-container clearfix">
                <div class="nav-btn pull-left">
                    <i class="material-icons hamburger drawer-toggle">menu</i>
                </div>
                <div class="whish-inf pull-right">
                   <div class="user-opt">
                     <div class="dropdown">
                       <i class="material-icons"  data-toggle="dropdown">account_circle</i>
                       <ul class="dropdown-menu" style="margin-left:-88px;margin-top: 10px;">
                        <?php if(Session::has('user_id')): ?>
                        <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>
                        <?php else: ?>
                             <li><a href="<?php echo e(url('login')); ?>">Login</a></li>
                             <li><a href="<?php echo e(url('register')); ?>">Register</a></li>
                             <?php endif; ?>
                       </ul>
                     </div>
                   </div>
                   <div class="user-search">
                       <i class="material-icons">location_searching</i>
                     </div>
                   </div>
                <center><div class="logo">
                    <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/images/logo.png')); ?>"></a>
                </div>
              <div class="search-area">
                <div class="search-icn input-group-btn mob-none">
                    <i class="material-icons">search</i>
                </div>
                <div class="mob-src input-group-btn search-bar">
                    <input type="text" placeholder="Search..." id="search-input" class="form-control"/>
                </div>
                <div class="mob-search-btn input-group-btn">
                    <label for="s-b">Search</label>
                    <!-- <input type="button" value="" id="s-b" class="d-none"> -->
                </div>

            </div>
        </div>

     <nav class="drawermenu">
        <ul class="list-inline">
          <li><a href="<?php echo e(url('/')); ?>">Home </a></li>
          <li><a href="#">Poolfinder</a></li>
          <li><a href="#">Clubs</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Venues</a></li>
          <li><a href="#">Instructors</a></li>
          <li><a href="#">News</a></li>
          </ul>
      </nav>
    </header>
<!-- header ends here -->
<!-- Modal -->
<div class="modal fade" id="loc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="loc-popup clearfix">
          <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
          <div class="col-md-6">
             <div class="city-search clearfix">
                <div class="input-group-btn search-bar">
                    <input type="text" placeholder="Search for pools" id="search-input" class="form-control">
                </div>
                <div class="input-group-btn search-submit">
                    <input type="submit" class="search-btn">
                </div>
             </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- location popup ends here -->



<div class="modal fade" id="loc-modal-mob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="loc-popup clearfix">
                <div class="col-md-6">
                        <div class="city-search clearfix">

                            <div class="input-group-btn search-bar">
                                <input type="text" placeholder="Search for pools" id="search-input" class="form-control"  ng-model="selected" uib-typeahead="state as state.city for state in stateswithcyties($viewValue) | limitTo:8 " typeahead-show-hint="true" typeahead-min-length="0" typeahead-on-select="onSelect($item, $model, $label)">
                            </div>
                            <div class="input-group-btn search-submit">
                                <input type="submit" class="search-btn">
                            </div>
                        </div>
                        <div class="select-state">
                            <div class="state-name" id="sel_state" style="display:none"></div>
                            <div class="main-cities">
                                <ul class="list-inline" id="citylist"></ul>
                            </div>
                        </div>
                        <div class="popular-cities">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- header Desktop -->

    <?php echo $__env->yieldContent('content'); ?>
<footer class="mob-none tab-none">
    <div class="footer-icons">
       <div class="container">
        <div class="clearfix">

            <div class="col-md-6 footer-social-icons pull-right padding-rr">
                <a href="#" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" target="blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
              </div>
        </div>
    </div>
</div>
<div class="footer-links">
    <div class="container">
        <div class="clearfix">
            <div class=" col-md-2 footer-links-head">
                <h3><b>ABOUT US</b></h3>
                    <ul>
                        <li><a href="#">About</a></li>
                      <li><a href="#">How it works</a></li>
                    </ul>
            </div>
             <div class="col-md-2 footer-links-head">
                <h3><b>HELP</b></h3>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Disclaimer</a></li>
                   </ul>
             </div>
             <div class="col-md-2 footer-links-head">
                <h3><b>Business</b></h3>
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
             </div>
             <div class="col-md-2 footer-links-head">
                <h3><b>Quick Links</b></h3>
                    <ul>
                      <li><a href="#">News</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
            </div>

        </div>
    </div>
</div>
  <div class="swimmiq-copyright">
            <div class="container">
                <div class="clearfix">
                    <div class="text-center">
                      <b><p class="pull-right">SWIMMIQ
                   <span style="color:#46A6EA">|</span> VONKDOTH PRODUCT</p></b>
                    </div>
                </div>
            </div>
    </div>
</footer>
  <!-- responsive code starts here -->
<footer class="desk-none mob-block tab-block">
<div class="res-footer">
  <div class="container">
    <div class="row">
        <div class="swimmiq-copyright">
            <div class="text-center">
               <img src="<?php echo e(url('public/images/mob/logo.png')); ?>" alt="">
                <p>SWIMMIQ
              <span style="color:#46A6EA">|</span> VONKDOTH PRODUCT</p></b>
             </div>
        </div>
       </div>
    </div>
    </div>
</footer>
 <script src="<?php echo e(asset('public/js/lib/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/jquery.interpolate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/jquery.coverflow.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/reflection.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/masonry.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/lib/jquery.es-drawermenu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('public/bower_components/moment/moment.js')); ?>"></script>
        <script src="<?php echo e(asset('public/bower_components/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
        <?php echo $calendar->script(); ?>

    <script>
              $(function () {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function init_events(ele) {
                  ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                      title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                      zIndex        : 1070,
                      revert        : true, // will cause the event to go back to its
                      revertDuration: 0  //  original position after the drag
                    })
              })
                }
              init_events($('#external-events div.external-event'))

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date()
                var d    = date.getDate(),
                    m    = date.getMonth(),
                    y    = date.getFullYear()
                $('#calendar').fullCalendar({
                  header    : {
                    left  : 'prev,next today',
                    center: 'title',
                    right : 'month,agendaWeek,agendaDay'
                  },

                  buttonText: {
                    today: 'today',
                    month: 'month',
                    week : 'week',
                    day  : 'day'
                  },
                  
                  //Random default events
                  events    : [
                    {
                      title          : 'All Day Event',
                      start          : new Date(y, m, 1),
                      backgroundColor: '#f56954', //red
                      borderColor    : '#f56954' //red
                    },
                    {
                      title          : 'Long Event',
                      start          : new Date(y, m, d - 5),
                      end            : new Date(y, m, d - 2),
                      backgroundColor: '#f39c12', //yellow
                      borderColor    : '#f39c12' //yellow
                    },
                    {
                      title          : 'swim',
                      start          : new Date(y, m, d, 10, 30),
                      allDay         : false,
                      backgroundColor: '#0073b7', //Blue
                      borderColor    : '#0073b7' //Blue
                    },
                    {
                      title          : 'swimming',
                      start          : new Date(y, m, d, 12, 0),
                      end            : new Date(y, m, d, 14, 0),
                      allDay         : false,
                      backgroundColor: '#00c0ef', //Info (aqua)
                      borderColor    : '#00c0ef' //Info (aqua)
                    },
                    {
                      title          : 'para swimming',
                      start          : new Date(y, m, d + 1, 19, 0),
                      end            : new Date(y, m, d + 1, 22, 30),
                      allDay         : false,
                      backgroundColor: '#00a65a', //Success (green)
                      borderColor    : '#00a65a' //Success (green)
                    },
                    {
                      title          : 'instructor meet',
                      start          : new Date(y, m, 28),
                      end            : new Date(y, m, 29),
                      url            : 'http://google.com/',
                      backgroundColor: '#3c8dbc', //Primary (light-blue)
                      borderColor    : '#3c8dbc' //Primary (light-blue)
                    }
                  ],
                  editable  : true,
                  droppable : true, // this allows things to be dropped onto the calendar !!!
                  drop      : function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject')

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject)

                    // assign it the date that was reported
                    copiedEventObject.start           = date
                    copiedEventObject.allDay          = allDay
                    copiedEventObject.backgroundColor = $(this).css('background-color')
                    copiedEventObject.borderColor     = $(this).css('border-color')

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                      // if so, remove the element from the "Draggable Events" list
                      $(this).remove()
                    }

                  }
                })

                /* ADDING EVENTS */
                var currColor = '#3c8dbc' //Red by default
                //Color chooser button
                var colorChooser = $('#color-chooser-btn')
                $('#color-chooser > li > a').click(function (e) {
                  e.preventDefault()
                  //Save color
                  currColor = $(this).css('color')
                  //Add color effect to button
                  $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
                })
                $('#add-new-event').click(function (e) {
                  e.preventDefault()
                  //Get value and make sure it is not null
                  var val = $('#new-event').val()
                  if (val.length == 0) {
                    return
                  }

                  //Create events
                  var event = $('<div />')
                  event.css({
                    'background-color': currColor,
                    'border-color'    : currColor,
                    'color'           : '#fff'
                  }).addClass('external-event')
                  event.html(val)
                  $('#external-events').prepend(event)

                  //Add draggable funtionality
                  init_events(event)

                  //Remove event from text input
                  $('#new-event').val('')
                })
              })

            </script>
     <script>
       $('.owl-carousel').owlCarousel({
         loop:true,
         margin:5,
         nav:true,
         // autoWidth:true,
     navText: [" <span class='glyphicon glyphicon-chevron-lemt img-circle'></span>","<span class='glyphicon glyphicon-chevron-right img-circle'></span>"],
         responsive:{
             0:{
                 items:1
             },
             600:{
                 items:1
             },
             800:{
               items:2
             },
             1000:{
                 items:4
             }
         }
     })
     </script>
     <script type="text/javascript">
     $(document).ready(function() {
     $('.drawermenu').drawermenu({
       speed:100,
       position:'lemt'
     });
     });

     </script>
      </body>
     </html>
<!-- responsive code ends here -->
