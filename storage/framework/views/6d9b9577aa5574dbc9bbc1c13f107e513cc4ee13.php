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
    <li><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                  <li><a href="<?php echo e(url('/subevent')); ?>" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li class="active"><a href="<?php echo e(url('/schedule-event/'.$event_id)); ?>" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="<?php echo e(url('/contact-event')); ?>" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li><a href="<?php echo e(url('/confirm-event')); ?>" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li> 


                      </ul></div>
<div class="tab-content tab_details">
  
                      <div class="tab-pane fade in active" id="eventschedule">
                          <div class="row">
                            <div class="tab-pane" id="tab-3">
        <div class="container">
                           
                              <div class="form-group" id="field1">
                                  <label class="control-label col-sm-2" for="txt">Occurance:</label>
                                         <ul class="nav nav-pills">
                <li><a href="<?php echo e(url('schedule-event/'.$event_id)); ?>" style="background-color:#ddd;color:#46A6EA">One Time</a></li>
                <li><a href="<?php echo e(url('multiple-event/'.$event_id)); ?>"  style="background-color:#ddd;color:#46A6EA">Multiple</a></li>
                <li class="active"><a href="<?php echo e(url('recurring-event/'.$event_id)); ?>" style="background-color:#46A6EA">Recurring</a></li>
           </ul>
                                      
                              </div>
                    </div>
                    <hr>
                      
             
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#week">By Week</a></li>
    <li><a data-toggle="tab" href="#month">By Month</a></li>
    <li><a data-toggle="tab" href="#year">By Year</a></li>
  </ul>
 <form method="post" action="<?php echo e(url('week-event/'.$event_id)); ?>">
      <?php echo e(csrf_field()); ?>

  <div class="tab-content">
    <div id="week" class="tab-pane fade in active">
      <div class="container"  style="padding-left:50px;border:1px solid #eee;margin-top:20px">
      <div class="col-sm-3 row" style="margin-top:10px">
        <div class="checkbox">
                        <input id="checkbox1" type="checkbox" name="weekday[]" value="Monday">
                        <label for="checkbox1">
                            Monday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox" name="weekday[]" value="Tuesday">
                        <label for="checkbox2">
                            Tuesday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox3" type="checkbox" name="weekday[]" value="Wednesday">
                        <label for="checkbox3">
                            Wednesday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox4" type="checkbox" name="weekday[]" value="Thursday">
                        <label for="checkbox4">
                            Thursday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox5" type="checkbox" name="weekday[]" value="Friday">
                        <label for="checkbox5">
                          Friday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox6" type="checkbox" name="weekday[]" value="Saturday">
                        <label for="checkbox6">
                          Saturday
                        </label>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox7" type="checkbox" name="weekday[]" value="Sunday">
                        <label for="checkbox7">
                          Sunday
                        </label>
                    </div>
  </div>
  <div class="col-sm-6 row" style="margin-top:20px">
<div class="form-group">
    <label class="control-label col-sm-4" for="dte">Between:</label>
    <div class="input-group">
        <input type="date" class="form-control" id="dte" name="start_date">
        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-4" for="dte">And:</label>
  <div class="input-group">
      <input type="date" class="form-control" id="dte" name="end_date">
      <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
  </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-4" for="tme">StartTime:</label>
  <div class="input-group">
    <input type="time" class="form-control" id="tme" name="time">
    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
  </div>
  </div>
   <div class="form-group">
  <label class="control-label col-sm-4" for="tme">EndTime:</label>
  <div class="input-group">
    <input type="time" class="form-control" id="tme" name="endtime">
    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
  </div>
  </div>
  <center>
<button class="btn btn-primary">Save</button>
  
  </form>
  </div>
</div>
    </div>

     <div id="month" class="tab-pane fade">
      <form method="post" action="<?php echo e(url('month-event/'.$event_id)); ?>">
        <?php echo e(csrf_field()); ?>

    <div style="padding:50px;*margin-top:20px">

                      <div class="form-group">
                          <div class="radio">
<label class="radio-inline containerh col-sm-2 mob-none">The<input type="radio" name="month_details" value="mothly_day"><span class="checkmarka"></span></label>                     <div class="form-group">
                              <div class="col-sm-2">
                                      <select  class="form-control" id="sel" name="recuring_monthday">
                                        <option value="1">First</option>
                                        <option value="2">Second</option>
                                        <option value="3">Third</option>
                                        <option value="4">Fourth</option>
                                      </select>
                                      </div>
                                      <div class="col-sm-2">
                                    <select  class="form-control" id="sel" name="recuring_day">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                  </select>
                                </div>
                                  <div class="col-sm-2">of Every</div>
                                    <div class="col-sm-2">
                                      <select  class="form-control" id="sel" name="recuring_month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                  </select>
                                </div>
                                    <div class="col-sm-2">Months</div>
                          </div></div></div><br><br>
                          <div class="radio">
<label class="radio-inline containerh col-sm-2 mob-none">The <input type="radio" name="month_details" value="monthly"><span class="checkmarka"></span></label> 
                              <div class="form-group">
                              <div class="col-sm-2">
                                      <select  class="form-control" id="sel" name="recuring_monthday">
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                      </select>
                                      </div>
                                      <div class="col-sm-2">Day of Every</div>
                                    <div class="col-sm-2 mob-none"></div>
                                    <div class="col-sm-2">
                                      <select  class="form-control" id="sel" name="recuring_month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                  </select>
                                </div>
                                    <div class="col-sm-2">Months</div>
                          </div></div>
                    </div>
<br>

    <div class="row between_months">
    <div class="col-md-3">
    <div class="form-group">
    <label class="control-label col-sm-4" for="dte">Between:</label>
    <div class="input-group">
        <input type="date" class="form-control" id="dte" name="start_date">
        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
    <label class="control-label col-sm-4" for="dte">And:</label>
    <div class="input-group">
      <input type="date" class="form-control" id="dte" name="end_date">
      <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
    <label class="control-label  col-sm-4" for="tme">StartTime:</label>
    <div class="input-group">
    <input type="time" class="form-control" id="tme" name="time">
    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
    <label class="control-label  col-sm-4" for="tme">EndTime:</label>
    <div class="input-group">
    <input type="time" class="form-control" id="tme" name="endtime">
    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
    </div>
    </div>
    </div>

    </div>

                  <center>
                       <button class="btn btn-primary">Back</button>
                    <button class="btn btn-primary">Save</button>
                  </form>


  </div>


    <div id="year" class="tab-pane fade">
      <form method="post" action="<?php echo e(url('year-event/'.$event_id)); ?>">
        <?php echo e(csrf_field()); ?>

      <div class="" style="padding:50px;*margin-top:20px">
                    <div class="form-group">
                        <div class="radio">
<label class="radio-inline containerh col-sm-2 mob-none">The<input type="radio" name="year" value="yearly"><span class="checkmarka"></span></label>

                         
                            <div class="form-group">
                            <div class="col-sm-2">
                                    <select  class="form-control" id="year_monthly_days">
                                      <option>First</option>
                                      <option>Second</option>
                                      <option>Third</option>
                                      <option>Fourth</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-2">
                                  <select  class="form-control" id="year_weekly_days">
                                  <option>Monday</option>
                                  <option>Tuesday</option>
                                  <option>Wednesday</option>
                                  <option>Thursday</option>
                                  <option>Friday</option>
                                  <option>Saturday</option>
                                  <option>Sunday</option>
                                </select>
                              </div>
                                <div class="col-sm-2">of Every</div>
                                  <div class="col-sm-2">
                                    <select  class="form-control" id="year_monthly">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                              </div>
                                  <div class="col-sm-2">Months</div>
                        <br><br>

                          <div class="col-sm-2">Every</div>
                            <div class="col-sm-4"><input type="text" class="form-control" id="txt" name="recuring_year" placeholder="Enter Number"></div>
                              <div class="col-sm-2">Years</div>
                            <br><br>
                        <div class="radio">
<label class="radio-inline containerh col-sm-2 mob-none">The <input type="radio" name="year" value="monthly"><span class="checkmarka"></span></label>
                            <div class="form-group">
                            <div class="col-sm-2">
                                    <select  class="form-control" id="sel" name="year_monthly_days">
                                      <option>1st</option>
                                      <option>2nd</option>
                                      <option>3rd</option>
                                      <option>4th</option>
                                    </select>
                                    </div>

                                <div class="col-sm-2">Day of Every</div>
                                  <div class="col-sm-2"></div>
                                  <div class="col-sm-2">
                                  <select  class="form-control" id="sel" name="year_monthly">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                              </div>
                                  <div class="col-sm-2">Months</div>
                        </div></div>
                  </div>
                </div>
                      </div>
    </div>

                  <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label  col-sm-4" for="dte">Between:</label>
                  <div class="input-group">
                      <input type="date" class="form-control" id="dte" name="start_date">
                      <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                  </div>
                  </div>
                  </div>
                  <div class=" col-md-3">
                  <div class="form-group">
                  <label class="control-label col-sm-4" for="dte">And:</label>
                  <div class="input-group">
                    <input type="date" class="form-control" id="dte" name="end_date">
                    <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label col-sm-4" for="tme">StartTime:</label>
                  <div class="input-group">
                  <input type="time" class="form-control" id="tme" name="time">
                  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                  <label class="control-label col-sm-4" for="tme">EndTime:</label>
                  <div class="input-group">
                  <input type="time" class="form-control" id="tme" name="endtime">
                  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                  </div>
                  </div>
                  

                                <center>
                                  <button class="btn btn-primary">Save</button>
                                </form>



    </div>

  </div>
</div>

      </div>
    </div>
    </div>

              </div>
              

                    </div>
                  </div>
                </div>
              </div>
            </center>
          </div>
        </center>
      </div>
    </center>
  </div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

                      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>