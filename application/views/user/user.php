<h1>รายชื่อผู้เข้าร่วมอบรม</h1>
       <div class="alert alert-danger" role="alert">
           Error !
       </div>
       <?php if ($this->session->has_userdata('user_id') and $this->session->userdata('user_type_id') == '1') { ?>
       <a href="/user/adduser" class="btn btn-success"><i class="fas fa-plus-square"></i> เพิ่ม</a>
       <?php } ?>
       <table class="table">
           <thead>
               <tr>
                   <th>#</th>
                   <th>ชื่อผู้ใช้</th>
                   <th>ระดับ</th>
                   <th>ชื่อ - สกุล</th>
                   <th>อีเมล์</th>
                   <th>อายุ</th>
                   <th>จัดการ</th>
               </tr>
           </thead>
           <tbody>
           <?php foreach ($users->result() as $user) {
    ?>
               <tr>
                   <td><?php echo $user->user_id ?></td>
                   <td><?php echo $user->username ?></td>
                   <td><?php echo $user->name ?></td>
                   <td><?php echo $user->fullname ?></td>
                   <td><?php echo $user->email ?></td>
                   <td><?php echo $user->age ?></td>
                   <td>
                         <a href="/user/show/<?php echo $user->user_id ?>" class="btn btn-info"><i class="fa fa-search"></i> แสดง</a>
                       <?php if ($this->session->has_userdata('user_id') and $this->session->userdata('user_type_id') == '1') { ?>
                       <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fa fa-edit"></i> แก้ไข</a>
                       <a onclick="javascript: return confirm('เมื่อลบแล้วจะไม่สามารถนำข้อมูลกลับมาได้อีก ?')" href="/user/delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fa fa-times"></i> ลบ</a>
                       <?php } ?>
                   </td>
               </tr>
              
               <?php
} ?>
           </tbody>
       </table>
  
