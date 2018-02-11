<div class="card">
   <div class="card-header">ข้อมูล
   <?php if ($this->session->has_userdata('user_id') and $this->session->userdata('user_type_id') == '1') { ?>
       <div class="float-right"><a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning">แก้ไข</a></div></div>
   <?php } ?>
 <div class="card-body">
   <p><strong>ชื่่อ : </strong> <?php echo $user->fullname ?></p>
   <p><strong>อีเมล์ : </strong><?php echo $user->email ?></p>
   <p><strong>อายุ : </strong><?php echo $user->age ?></p>
 </div>
</div>