
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/001.png" alt="First slide" width="800"  height="600">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/002.jpg" alt="Second slide" width="800"  height="600">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/003.png" alt="Third slide" width="800"  height="600">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <div>
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">Success</a>
            <a href="#" class="badge badge-danger">Danger</a>
            <a href="#" class="badge badge-warning">Warning</a>
            <a href="#" class="badge badge-info">Info</a>
            <a href="#" class="badge badge-light">Light</a>
            <a href="#" class="badge badge-dark">Dark</a>
        </div>
        <hr>

        
<div class="row">
<div class="col-8"></div>
<div class="col-4">
    <div class="card">
        <div class="card-header">
        <i class="fa fa-user"></i> เข้าสู่ระบบ
        </div>
        <div class="card-body">

        <?php 
        if ($this->session->has_userdata('user_id')) {
            ?>
            <p>สวัสดี, <?php echo $this->session->userdata('fullname') ?></p>
            <p><a href="/auth/logout">Logout</a></p>
        <?php } 
        else 
        {
            ?>
        <p>Welcome</p>
        <form action="/auth/login" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <p><a href="#">Register</a></p>
            <button type="submit" class="btn btn-primary">Login</button>
           </form>
          <?php } ?>

            </form>
        </div>
    </div>
</div>
</div>

