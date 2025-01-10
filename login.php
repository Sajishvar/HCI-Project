<?php
$pageTitle = "Home Page";
ob_start();
?>

<div style="display: flex; justify-content: space-around; align-items: center; min-height: 100vh;">
    <div style="background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); width: 600px;">
      <h4 style="text-align: center; margin-bottom: 20px;">Create an account</h4>
      <form>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 5px;">Name</label>
          <input type="text" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 5px;">Email or Phone Number</label>
          <input type="text" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 5px;">Password</label>
          <input type="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <button style="background-color: #ff5959; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Create Account</button>
        <br>
        <p>Or</p>
        <button style="background-color: #fff; color: #4285F4; border: 1px solid #4285F4; padding: 10px 20px; border-radius: 5px; cursor: pointer; display: flex; align-items: center;"><img src="assets/images/brands/google.svg" alt="Google Logo" style="margin-right: 10px;" width="30">Sign up with Google</button>
        <p style="text-align: center;"><small>By clicking the button, you agree to our <a href="#" style="color: #ff5959; text-decoration: none;">Terms & Conditions</a></small></p>
        <div style="text-align: center; margin-top: 10px;">Already have an account? <a href="#" style="color: #ff5959; text-decoration: none;">Log in</a></div>
      </form>
    </div>

    <div style="background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); width: 600px;">
      <h4 style="text-align: center; margin-bottom: 20px;">Log in to PCMART</h4>
      <form>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 5px;">Email or Phone Number</label>
          <input type="text" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 5px;">Password</label>
          <input type="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <button style="background-color: #ff5959; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Log In</button>
        <a href="#" style="color: #ff5959; text-decoration: none;">Forget Password?</a>
      </form>
    </div>
  </div>
<?php
$pageContent = ob_get_clean();
include("includes/main-layout.php");
?>