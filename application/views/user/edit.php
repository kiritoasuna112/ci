<hr>
        <div class="row">
            <div class="col-8">
            <form action="/user/update/<?php echo $user->user_id ?>" method="post">
            <div class="form-group">
                    <label>Username</label>
                    <input value="<?php echo $user->username ?>" type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input value="<?php echo $user->password ?>"type="password" name="password" class="form-control" placeholder="password">
                </div>
            <div class="form-group">
                <label>ชื่อ</label>
                <input value="<?php echo $user->fullname ?>" name="fullname" type="text" class="form-control" placeholder="กรอกชื่อ สกุล">
            </div>
            <div class="form-group">
                <label>อีเมล์</label>
                <input  value="<?php echo $user->email ?>" name="email" type="email" class="form-control" placeholder="กรอกอีเมล์">
            </div>
            <div class="form-group">
                <label>อายุ</label>
                <input  value="<?php echo $user->age ?>" name="age" type="number" class="form-control" placeholder="กรอกอายุ">
            </div>
            <button type="submit" class="btn btn-primary">บันทึก</button>
            </form>
            </div>
            <div class="col-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <hr>