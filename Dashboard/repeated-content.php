<?php
include "control.php"
?>
<div class='col-xl-7 col-lg-12 col-md-12 col-sm-12'>
    <div class='card overflow-hidden'>
        <div class='card-header bg-transparent pd-b-0 pd-t-20 bd-b-0'>
            <div class='d-flex justify-content-between'>
                <h4 class='card-title mg-b-10'><?php echo $filename ?></h4>
                <i class='mdi mdi-dots-horizontal text-gray'></i>
            </div>
            <p class='tx-1'>Code Image  <a href="code/<?php echo $imagename ?>">(click the image to open)</</a><p>
            <div class="h-100 w-100 mb-3">
                <a href="code/<?php echo $imagename ?>"><img src='code/<?php echo $imagename ?>' alt=''></a>
            </div>
        </div>
    </div>
</div>