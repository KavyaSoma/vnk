<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
 <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      <div id="old_events">
                
                </div><br>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>

  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
               
                 <li class="active"><a href="" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li><a href="" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
<div class="tab-content tab_details">
  
              <div class="tab-pane fade in active" id="subevents">
                <h5 style="color:#46A6EA"><b>Sub Event</b></h5>
                <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('/edit-subevent/'.$event_id.'/'.$sub_event_id)); ?>">
                  <?php echo e(csrf_field()); ?>

                  <?php $__currentLoopData = $sub_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="row">
    <div class="form-group"  id="field1">
      <label class="control-label col-xs-4 col-sm-4" for="txt">SubEvent Name:</label>
      <div class="col-xs-7 col-sm-6">
        <input type="text" class="form-control" id="sub-event" name="subevent_name" value="<?php echo e($event->SubEventName); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
        <span class="error" style="color: red;display: none;">SubEvent Name should contain 5-25 characters</span>
        <input type="hidden" name="event_id" value="<?php echo e($event_id); ?>">
        <input type="hidden" name="sub_event_id" value="<?php echo e($sub_event_id); ?>">
      </div>
    </div>
      <div class="form-group mob-none">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-4">
      <label class="radio-inline containerh">Male<input type="radio" name="gender" value="Male" <?php if($event->Gender=="Male"): ?> checked <?php endif; ?> required><span class="checkmark" required></span></label>
      <label class="radio-inline containerh">Female<input type="radio" name="gender" value="Female" <?php if($event->Gender=="Female"): ?> checked <?php endif; ?> required><span class="checkmark" required></span></label>
      <label class="radio-inline containerh">Both<input type="radio" name="gender" value="Both" <?php if($event->Gender=="Both"): ?> checked <?php endif; ?> required><span class="checkmark" required></span></label>
                                      
                              </div>
                        </div>  
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="sel">Swim Style:</label>
      <div class="col-xs-7 col-sm-6">
        <select class="form-control" id="sel" name="swim_style" required>
          <option value="Any">Any</option>
          <option value="Butterfly">Butterfly</option>
          <option value="BackStroke">BackStroke</option>
          <option value="Any">Breaststroke</option>
          <option value="Butterfly">Combat sidestroke</option>
          <option value="BackStroke">Dog paddle</option>
          <option value="FrontStroke">Eggbeater kick</option>
      <option value="Any">Flutter kick</option>
          <option value="Butterfly">Free Colchian</option>
          <option value="BackStroke">Freestyle swimming</option>
          <option value="FrontStroke">Front crawl</option>
      <option value="Any">FrontStroke</option>
          <option value="Butterfly">Georgian swimming</option>
          <option value="BackStroke">Medley swimming</option>
          <option value="FrontStroke">Sidestroke</option>
      <option value="FrontStroke">Total Immersion</option>
      <option value="FrontStroke">Treading water</option>
      <option value="FrontStroke">Trudgen</option>
      <option value="FrontStroke">Wading</option>
      <option value="Individual Medley">Individual Medley</option>
      <option value="Freestyle Relay">Freestyle Relay</option>
      <option value="Medley Relay">Medley Relay</option>
      <option value="OpenWater">OpenWater</option>
        </select>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="txt">Course(mts):</label>
      <div class="col-xs-4 col-sm-4">
        <input type="text" class="form-control" id="course" name="course" value="100" required>
        <span class="course-error" style="color: red;display: none;">Course Should Contain Numeric Charaters</span>
      </div>
    <div class="col-xs-4 col-sm-2">
        <select class="form-control" id="sel" name="length">
        <option value="mts">Mts</option>
        <option value="kms">Kms</option>
        </select>
      </div>
    </div>
    <div class="form-group">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Disabled Only?:</label>
                              <div class="col-xs-7 col-sm-4">
                <input type="radio" name="disabled" value="yes" id="yes" <?php if($event->AbleBodied == "yes"): ?> checked <?php endif; ?>/>
                <input type="radio" name="disabled" value="no" id="no" <?php if($event->AbleBodied == "no"): ?> checked <?php endif; ?> />
                <div class="switch radio-inline">
                  <label for="yes"  <?php if($event->AbleBodied == "yes"): ?> checked <?php endif; ?>>Yes</label>
                  <label for="no" <?php if($event->AbleBodied == "no"): ?> checked <?php endif; ?> >No</label>
                  <span></span>
                </div>
                                  
                              </div>
                        </div>
    
    <hr>
    <h5 style="color:#46A6EA"><b>Participants</b></h5>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="min-part" name="min_participants" value="<?php echo e($event->MinParticipants); ?>" pattern="([0-9]){1,3}" required>
                      <span class="min-part-error" style="color: red;display: none;">Minimum Participants should contain 2-3 Numeric values</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="max-part" name="max_participants" value="<?php echo e($event->MaxParticipants); ?>" pattern="([0-9]){1,3}" required>
                      <span class="max-part-error" style="color: red;display: none">Maximum partcipants should contain 2-3 Numeric values</span>
                      <span class="participant-error" style="color: red;display: none">Minimum partcipants should be less than Maximum participants</span>
                    </div>
                  </div>
                    <hr>
                    <h5 style="color:#46A6EA"><b>Age</b></h5>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="min-age" name="min_age" value="<?php echo e($event->MinimumAge); ?>" pattern="([0-9]){1,3}" required>
                        <span class="min-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="max-age" name="max_age" value="<?php echo e($event->MaximumAge); ?>" pattern="([0-9]){1,3}" required>
                        <span class="max-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                        <span class="age-error" style="color: red;display:none">Minimum Age should be less than Maximum Age</span>
                      </div>
                    </div>
                    
                        <!--  <button class="btn btn-primary pull-right" id="subevent"><i class="fa fa-plus"> Add Another Sub Event</i></button>-->
                      </div><br>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <center>
                          <button class="btn btn-primary mybtn">Save</button>
                        </center>
                      </form>
                      <hr>
                       <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('/subevent/'.$event_id)); ?>">
                  <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <form class="form-horizontal">
    <div class="form-group"  id="field1">
      <label class="control-label col-xs-4 col-sm-4" for="txt">SubEvent Name:</label>
      <div class="col-xs-7 col-sm-6">
        <input type="text" class="form-control" id="sub-event" name="subevent_names" value="<?php echo e(old('subevent_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
        <span class="error" style="color: red;display: none;">SubEvent Name should contain 5-25 characters</span>
      </div>
    </div>
  <div class="form-group mob-none">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-4">
      <label class="radio-inline containerh">Male<input type="radio" name="genderr" value="public" checked required><span class="checkmark"></span></label>
      <label class="radio-inline containerh">Female<input type="radio" name="genderr" value="public" required><span class="checkmark"></span></label>
      <label class="radio-inline containerh">Both<input type="radio" name="genderr" value="public" required><span class="checkmark"></span></label>
                                      
                              </div>
                        </div>  
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="sel">Swim Style:</label>
      <div class="col-xs-7 col-sm-6">
        <select class="form-control" id="sel" name="swim_styles" required>
          <option value="Any">Any</option>
          <option value="Butterfly">Butterfly</option>
          <option value="BackStroke">BackStroke</option>
          <option value="Any">Breaststroke</option>
          <option value="Butterfly">Combat sidestroke</option>
          <option value="BackStroke">Dog paddle</option>
          <option value="FrontStroke">Eggbeater kick</option>
      <option value="Any">Flutter kick</option>
          <option value="Butterfly">Free Colchian</option>
          <option value="BackStroke">Freestyle swimming</option>
          <option value="FrontStroke">Front crawl</option>
      <option value="Any">FrontStroke</option>
          <option value="Butterfly">Georgian swimming</option>
          <option value="BackStroke">Medley swimming</option>
          <option value="FrontStroke">Sidestroke</option>
      <option value="FrontStroke">Total Immersion</option>
      <option value="FrontStroke">Treading water</option>
      <option value="FrontStroke">Trudgen</option>
      <option value="FrontStroke">Wading</option>
      <option value="Individual Medley">Individual Medley</option>
      <option value="Freestyle Relay">Freestyle Relay</option>
      <option value="Medley Relay">Medley Relay</option>
      <option value="OpenWater">OpenWater</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="txt">Course(mts):</label>
      <div class="col-xs-4 col-sm-4">
        <input type="text" class="form-control" id="course" name="courses" value="100" required>
        <span class="course-error" style="color: red;display: none;">Course Should Contain Numeric Charaters</span>
      </div>
    <div class="col-xs-4 col-sm-2">
        <select class="form-control" id="sel" name="lengths">
        <option value="mts">Mts</option>
        <option value="kms">Kms</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="txt">Description:</label>
      <div class="col-xs-7 col-sm-6">
        <textarea type="text" class="form-control" id="txt" name="descriptions" required><?php echo e(old('description')); ?></textarea>
      </div>
    </div>
    <div class="form-group">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Disabled Only?:</label>
                              <div class="col-xs-7 col-sm-4">
                <input type="radio" name="disables" id="yes" />
                <input type="radio" name="disables" id="no" checked/>
                <div class="switch radio-inline">
                  <label for="yes">Yes</label>
                  <label for="no">No</label>
                  <span></span>
                </div>
                                  
                              </div>
                        </div>
    <?php if($privacy == "personal"): ?>
   <!-- when privacy is set as personal participants block should be displayed-->
    <?php else: ?>
    <hr>
    <h5 style="color:#46A6EA;text-align: center;width: 57%;"><b>Participants</b></h5>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="min-part" name="min_participant" value="0" required>
                      <span class="min-part-error" style="color: red;display: none;">Minimum Participants should contain 2-3 Numeric values</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="max-part" name="max_participant" value="100" required>
                      <span class="max-part-error" style="color: red;display: none">Maximum partcipants should contain 2-3 Numeric values</span>
                      <span class="participant-error" style="color: red;display: none">Minimum partcipants should be less than Maximum participants</span>
                    </div>
                  </div>
                    <hr>
                    <h5 style="color:#46A6EA;text-align: center;width: 57%;"><b>Age</b></h5>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="min-age" name="min_ages" value="0" required>
                        <span class="min-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="max-age" name="max_ages" value="100" required>
                        <span class="max-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                        <span class="age-error" style="color: red;display:none">Minimum Age should be less than Maximum Age</span>
                      </div>
                    </div>
                        <!--  <button class="btn btn-primary pull-right" id="subevent"><i class="fa fa-plus"> Add Another Sub Event</i></button>-->
                      </div><br>
                      <?php endif; ?>
                  <center>
                          <button class="btn btn-primary mybtn" >Save</button>
                        </center>
                      </form>
                        <form method="get" action="<?php echo e(url('editpage/event/venue/'.$event_id)); ?>">
                        <center><button type="submit" class="btn btn-primary mybtn">Back</button></center>
                      </form>
                      </div>
                      
                       

                    </div>
                  </div>
                </div>
              </div>
                <div id="old_events">
                
                </div><br>
              </div>
            </form>
                    
                      
                       

                    </div>
                  </div>
                </div>
                <div id="old_events">
                
                </div>
              </div>
             
          </div>
          </div>
          <script>
$(document).ready(function() {
console.log('<?php echo e(url('getoldevents/subevents/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/subevents/'.$event_id)); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_events').html(html);
      }
    },
    async:true
  });
              });
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>