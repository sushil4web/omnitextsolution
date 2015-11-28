<?php include('header.php'); ?>
          <h1 class="text-center">Login to Your Account</h1>
        <form class="myac">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remeber Me
            </label>
          </div>
          <button type="submit" class="btn btn-default">LogIn</button>
        </form>
        <h3>Login help</h3>
        <h6><a href="">Forgot your password?</a><h6>
        <h6>New Member? <a href="">Creat New Account</a><h6>
<?php include('footer.php'); ?>