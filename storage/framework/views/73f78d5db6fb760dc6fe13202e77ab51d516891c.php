<?php $__env->startSection('content'); ?>

	<!--New hari Modal content-->
<div class="modal fade" id="myModalh" role="dialog">
<div class="modal-dialog">
<div class="modal-content" style="max-height: 360px;overflow: auto;">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 style="color:#46A6EA;background-color:#fff;padding-left:9px">Previous Entries</h3>
</div>
<div class="modal-body">
<div id="old_events">
                
                </div>
</div>
<!--<div class="modal-footer">
    <button class="btn btn-primary col-sm-offset-5 col-sm-2 mybtn" type="submit">Post</button>

</div>--></div>
</div></div>

<!-- model popup ends here -->
<div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('addvenue/'.$venue_id)); ?>">Add Venue</a></li>
  <li class="breadcrumb-item">Venue Pool</li>
  </ol>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <?php if(count($venue_pool)>0): ?>
<div class="row"><h4 class="col-sm-9 " style="color:green;text-align:center;"></h4>
 <button class="col-sm-2 btn btn-warning" data-toggle="modal" data-target="#myModalh"><i class="fa fa-bars"></i> Previous Entries</button></div>
 <?php endif; ?>
      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">
      <?php if(count($venue_image)>0): ?>
 <img alt="Profile image" class="img-rounded profile_image" src="<?php echo e($venue_image[0]->ImagePath); ?>">
 <?php endif; ?>
 
</div>
</div>
<div class="col-sm-8 col-xs-12">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <ul class="nav nav-tabs nav_info" id="myTab">
                 <div class="liner"></div>
                  <li>
                  <a href="" class="tab-one" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li class="active"><a href="" title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>
             
                  <li><a href="" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>
                  <li><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="" data-toggle="tab" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                   
                  <div class="tab-pane fade in active" id="venueinformation">
                    <form class="form-horizontal" style="background:#fff;padding:35px" method="post" action="<?php echo e(url('venuepool/'.$venue_id)); ?>" enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>

                      <?php if($show=="yes"): ?>
                      <?php $__currentLoopData = $pool_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row">
                            <div class="form-group" id="field1">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Name:</label>
                                  <div class="col-xs-8 col-sm-9">
                                     <input type="hidden" id="next" value="<?php echo e($next); ?>">
                                    <input type="hidden" id="show" value="<?php echo e($show); ?>">
                                    <input type="hidden" name="pool_id" value="<?php echo e($pool->PoolId); ?>">
                                    <input type="text" class="form-control" id="pool-name" name="pool_name" value="<?php echo e($pool->PoolName); ?>" required>
                                  </div>
                                  <br><br>
                                </div>
                                <?php 
                                $width = explode(' ',$pool->Width);
                                 ?>
                      <div class="form-group">
                          <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Width:</label>
                          <div class="col-xs-4 col-sm-6">
                            <input type="text" class="form-control" id="pool-width" name="pool_width" value="<?php echo e($width[0]); ?>" required>
                            <span class="pool-width-error" style="color: red;display: none;">Pool Width should contain Numeric Values</span>
                          </div>
                          <div class="col-xs-4 col-sm-3">
                            <select  class="form-control pool" id="width-dimensions" name="width_dimension" onchange="widthdimensions()">
                              <?php if($width[1]=="mts"): ?>
                              <option value="mts" selected>mts</option>
                              <option value="fts">fts</option>
                              <option value="yard">yard</option>
                              <?php elseif($width[1]=="fts"): ?>
                              <option value="mts" >mts</option>
                              <option value="fts" selected>fts</option>
                              <option value="yard">yard</option>
                              <?php else: ?>
                              <option value="mts" >mts</option>
                              <option value="fts" >fts</option>
                              <option value="yard" selected>yard</option>
                              <?php endif; ?>
                            </select>
                          </div>
                          <br>
                        </div>
                        <?php 
                                $length = explode(' ',$pool->Length);
                                 ?>
                         <div class="form-group">
                            <label class="control-label  col-xs-4 col-sm-2" for="txt">Pool Length:</label>
                            <div class="col-xs-4 col-sm-6">
                              <input type="text" class="form-control" id="pool-length" name="pool_length" value="<?php echo e($length[0]); ?>" required>
                              <span class="pool-length-error" style="color: red;display: none;">Pool Length should contain Numeric Values</span>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                              <select  class="form-control" name="length_dimension" readonly>
                                 <?php if($length[1]=="mts"): ?>
                              <option value="mts" id="height-dimensions" selected>mts</option>
                              <?php elseif($length[1]=="fts"): ?>
                              <option value="fts" id="height-dimensions" selected>fts</option>
                              <?php else: ?>
                              <option value="yard" id="height-dimensions" selected>yard</option>
                              <?php endif; ?>
                              </select>
                            </div>

                          </div>
                          <?php 
                                $shallow = explode(' ',$pool->MaximumDepth);
                                 ?>
                          <div class="form-group">
                              <label class="control-label col-xs-4 col-sm-2" for="txt">Shallow End:</label>
                              <div class="col-xs-4 col-sm-6">
                                <input type="text" class="form-control" id="shallow-end" name="shallow_end" value="<?php echo e($shallow[0]); ?>" required>
                                <span class="shallow-end-error" style="color: red;display: none;">Shallow End should contain Numeric Values</span>
                              </div>
                              <div class="col-xs-4 col-sm-3">
                                <select  class="form-control" id="shallow-dimensions" name="shallow_dimension" onchange="depth()">
                                  <?php if($shallow[1]=="mts"): ?>
                              <option value="mts" selected>mts</option>
                              <option value="fts">fts</option>
                              <option value="yard">yard</option>
                              <?php elseif($shallow[1]=="fts"): ?>
                              <option value="mts" >mts</option>
                              <option value="fts" selected>fts</option>
                              <option value="yard">yard</option>
                              <?php else: ?>
                              <option value="mts" >mts</option>
                              <option value="fts" >fts</option>
                              <option value="yard" selected>yard</option>
                              <?php endif; ?>
                                </select>
                              </div>

                            </div>
                             <?php 
                                $deep = explode(' ',$pool->MinimumDepth);
                                 ?>
                            <div class="form-group">
                                <label class="control-label col-xs-4 col-sm-2" for="txt">Deep End:</label>
                                <div class="col-xs-4 col-sm-6">
                                  <input type="text" class="form-control" id="deep-end" name="deep_end" value="<?php echo e($deep[0]); ?>" required>
                                   <span class="deep-end-error" style="color: red;display: none;">Deep End should contain Numeric Values</span>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                  <select  class="form-control" name="deep_dimension" readonly>
                              <?php if($deep[1]=="mts"): ?>
                              <option value="mts" id="deep-dimensions" selected>mts</option>
                              <?php elseif($deep[1]=="fts"): ?>
                              <option value="fts" id="deep-dimensions" selected>fts</option>
                              <?php else: ?>
                              <option value="yard" id="deep-dimensions" selected>yard</option>
                              <?php endif; ?>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Shape:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <select class="form-control shape" id="pool-shape" name="pool_shape" onchange="poolarea()" required>
                                      <option>select</option>
                                      <?php if($pool->Shape == "Rectangular"): ?>
                                      <option value="Rectangular" selected>Rectangular</option>
                                      <option value="Triangular">Triangular</option>
                                      <?php else: ?>
                                      <option value="Rectangular" >Rectangular</option>
                                      <option value="Triangular" selected>Triangular</option>
                                      <?php endif; ?>
                                    </select>
                                  </div>
                                 
                                </div>
                                 <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Area:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="text" class="form-control" id="pool-area" name="pool_area" value="<?php echo e($pool->Area); ?>" readonly>
                                  </div>
                                 
                                </div>
                                <div class="form-group">
                         <label class="control-label col-xs-4 col-sm-2" for="description" >Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description" required><?php echo e($pool->SpecialRequirements); ?></textarea>
                         </div>
                       </div>
                       <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" for="imgUpload">Image:</label>
                <div class="col-xs-8 col-sm-9">
                    <input type="file" class="form-control myful" id="imgUpload" name="imgUpload"  accept="image/*">
                </div>
			
              </div>
			  <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic mob-none" >
              <?php if(count($pool_image)>0): ?>
				<img src="<?php echo e($pool_image[0]->ImagePath); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 132px;" width="100%">
              
			  </div>
        <?php else: ?>
        <img src="<?php echo e(url('public/images/pool.jpg')); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 132px;" width="100%">
              
        </div>
        <?php endif; ?>
        <?php if(count($pool_image)>0): ?>
			  <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic desk-none tab-none mob-block" >
				<img src="<?php echo e($pool_image[0]->ImagePath); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 76px;" width="100%">
        <?php else: ?>
        <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic desk-none tab-none mob-block" >
        <img src="<?php echo e(url('public/images/pool.jpg')); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 76px;" width="100%">
        <?php endif; ?>
              </div> 
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <div class="row">
                            <div class="form-group" id="field1">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Name:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="hidden" id="next" value="<?php echo e($next); ?>">
                                    <input type="hidden" id="show" value="<?php echo e($show); ?>">
                                    <input type="text" class="form-control" id="pool-name" name="pool_name"required>
                                  </div>
                                  <br><br>
                                </div>

                      <div class="form-group">
                          <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Width:</label>
                          <div class="col-xs-4 col-sm-6">
                            <input type="text" class="form-control" id="pool-width" name="pool_width" required>
                            <span class="pool-width-error" style="color: red;display: none;">Pool Width should contain Numeric Values</span>
                          </div>
                          <div class="col-xs-4 col-sm-3">
                            <select  class="form-control pool" id="width-dimensions" name="width_dimension" onchange="widthdimensions()">
                              <option value="mts">mts</option>
                              <option value="fts">fts</option>
                              <option value="yard">yard</option>
                            </select>
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label  col-xs-4 col-sm-2" for="txt">Pool Length:</label>
                            <div class="col-xs-4 col-sm-6">
                              <input type="text" class="form-control" id="pool-length" name="pool_length" required>
                              <span class="pool-length-error" style="color: red;display: none;">Pool Length should contain Numeric Values</span>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                              <select  class="form-control"  name="length_dimension" readonly>
                                 <option id="height-dimensions">mts</option>
                              </select>
                            </div>

                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-4 col-sm-2" for="txt">Shallow End:</label>
                              <div class="col-xs-4 col-sm-6">
                                <input type="text" class="form-control" id="shallow-end" name="shallow_end" required>
                                <span class="shallow-end-error" style="color: red;display: none;">Shallow End should contain Numeric Values</span>
                              </div>
                              <div class="col-xs-4 col-sm-3">
                                <select  class="form-control" id="shallow-dimensions" name="shallow_dimension" onchange="depth()">
                                  <option value="mts">mts</option>
                              <option value="fts">fts</option>
                              <option value="yard">yard</option>
                                </select>
                              </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4 col-sm-2" for="txt">Deep End:</label>
                                <div class="col-xs-4 col-sm-6">
                                  <input type="text" class="form-control" id="deep-end" name="deep_end" required>
                                   <span class="deep-end-error" style="color: red;display: none;">Deep End should contain Numeric Values</span>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                  <select  class="form-control"  name="deep_dimension" readonly>
                                  <option id="deep-dimensions">mts</option>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Shape:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <select class="form-control shape" id="pool-shape" name="pool_shape" onchange="poolarea()" required>
                                      <option>select</option>
                                      <option value="Rectangular">Rectangular</option>
                                      <option value="Triangular">Triangular</option>
                                    </select>
                                  </div>
                                 
                                </div>
                                 <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Area:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="text" class="form-control" id="pool-area" name="pool_area" readonly>
                                  </div>
                                 
                                </div>
                                <div class="form-group">
                         <label class="control-label col-xs-4 col-sm-2" for="description" required>Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description"></textarea>
                         </div>
                       </div>
                       <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" for="imgUpload">Image:</label>
                <div class="col-xs-8 col-sm-9">
                    <input type="file" class="form-control myful" id="imgUpload" name="imgUpload"  accept="image/*">
                </div>
      
              </div>
        <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic mob-none" >
        <img src="<?php echo e(url('public/images/pool.jpg')); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 132px;" width="100%">
        </div>
        <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic desk-none tab-none mob-block" >
        <img src="<?php echo e(url('public/images/taylor.png')); ?>" alt="img" id="poolimage" class="img-thumbnail" style="height: 76px;" width="100%">
              </div> 
        </div>
      <?php endif; ?> 
                     
                      <div class="col-sm-offset-4 col-xs-offset-3">
              <a href="<?php echo e(url('addvenue/'.$venue_id)); ?>" class="btn btn-primary mybtn" type="reset">Back</a>
				 <button class="btn btn-primary mybtn" id="savepool">Save</button> </form>
         <?php if( count($venue_pool) > 0): ?>
        
          <a href="<?php echo e(url('/venuecontact/'.$venue_id)); ?>" class="btn btn-primary mybtn"  >Next</a>
          <?php else: ?>
          <a href="javascript:;" class="btn btn-primary mybtn disabled"  readonly>Next</a>
          <?php endif; ?> 
        
</div>
<br>
                       
                                </div>
                                </div>
                              </div>
  
                            </div>
  <script>
    function widthdimensions(){
var width = $("#width-dimensions").val();
$("#height-dimensions").html(width);
}
function depth(){
  var shallow = $("#shallow-dimensions").val();
  $("#deep-dimensions").html(shallow);
}
    $("#save-venue").ready(function(){
     
      $("#pool-width").ready(function(){
  var $regexname = /^((?<=^| )\d+(\.\d+)?(?=$| ))$/;
  $("#pool-width").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('.pool-width-error').show();
      $("#savepool").attr('disabled', 'disabled');
    }
    else{
      $('.pool-width-error').hide();
      $("#savepool").removeAttr('disabled');
    }
  });
});
$("#pool-length").ready(function(){
  var $regexname = /^((?<=^| )\d+(\.\d+)?(?=$| ))$/;
  $("#pool-length").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('.pool-length-error').show();
      $("#savepool").attr('disabled', 'disabled');
    }
    else{
      $('.pool-length-error').hide();
       $("#savepool").removeAttr('disabled');
    }
  });
});
$("#shallow-end").ready(function(){
  var $regexname = /^((?<=^| )\d+(\.\d+)?(?=$| ))$/;
  $("#shallow-end").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $("#savepool").attr('disabled', 'disabled');
      $('.shallow-end-error').show();
    }
    else{
      $('.shallow-end-error').hide();
       $("#savepool").removeAttr('disabled');
    }
  });
});
$("#deep-end").ready(function(){
  var $regexname = /^((?<=^| )\d+(\.\d+)?(?=$| ))$/;
  $("#deep-end").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('.deep-end-error').show();
      $("#savepool").attr('disabled', 'disabled');
    }
    else{
      $('.deep-end-error').hide();
       $("#savepool").removeAttr('disabled');
    }
  });
});
function readURL(input) {
   if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#poolimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
      }
         $("#imgUpload").change(function(){
        readURL(this);
      });

});
$(document).ready(function() {
console.log('<?php echo e(url('getoldvenues/poolinfo/'.$venue_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldvenues/poolinfo/'.$venue_id)); ?>',
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
function poolarea() {
  var poolwidth = $("#pool-width").val();
 var poollength = $("#pool-length").val();
 var shallowend = $("#shallow-end").val();
 var deepend = $("#deep-end").val();
 var selectedPool = $(".pool option:selected ").val();
 var selectedlength = $(".length option:selected ").val();
 var selectedshallow = $(".shallow option:selected ").val();
 var selecteddeep = $(".deep option:selected").val();
 var shape = $(".shape option:selected").val();
if(selectedPool!="fts" && selectedPool!="mts"){
  var pool = poolwidth*3;
}
else if(selectedPool!="fts" && selectedPool!="yards"){
  var pool = poolwidth*3.28;
}
else{
  var pool = poolwidth;
}
if(selectedlength!="fts" && selectedlength!="mts"){
  var length = poollength*3;
}
else if(selectedlength!="fts" && selectedlength!="mts"){
  var length = poollength*3.28;
}
else{
  var length = poollength;
}
if(selectedshallow!="fts" && selectedshallow!="mts"){
  var shallow = shallowend*3;
}
else if(selectedshallow!="fts" && selectedshallow!="mts"){
  var shallow = shallowend*3.28;
}
else{
  var shallow = shallowend;
}
if(selecteddeep!="fts" && selecteddeep!="mts"){
  var deep = deepend*3;
}
else if(selecteddeep!="fts" && selecteddeep!="mts"){
  var deep = deepend*3.28;
}
else{
  var deep = deepend;
}
if(shape == "Rectangular"){
    var area = pool*length;
    console.log(area);
    document.getElementById('pool-area').value = area+' '+'fts';
 }
 if(shape == "Triangular"){
  var area = (pool*length)/2;
  console.log(area);
  document.getElementById('pool-area').value = area+' '+'fts';
 }
}


</script>                        

                              <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>