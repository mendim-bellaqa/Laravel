<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="{{('public/css/login-css.css')}}">
  <script type="text/javascript" src="login-js.js"></script> -->
  <link href="{{ asset('css/login-css.css') }}" rel="stylesheet">

</head>
<body>

<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>LOGIN</h2>
    </div>
    <div class='box-login'>
      <div class='fieldset-body' id='login_form'>
        <button onclick="openLoginInfo();" class='b b-form i i-more' title='Mais Informações'></button>
        	<p class='field'>
          <label for='user'>E-MAIL</label>
          <input type='text' id='user' name='user' title='Username' />
          <span id='valida' class='i i-warning'></span>
        </p>
      	  <p class='field'>
          <label for='pass'>PASSWORD</label>
          <input type='password' id='pass' name='pass' title='Password' />
          <span id='valida' class='i i-close'></span>
        </p>

          <label class='checkbox'>
            <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in
          </label>

          <input type='submit' id='do_login' value='GET STARTED' title='Get Started' />
          
          
         
      </div>
      
      </div>
<div class='box-form'>

<a href="/welcome" id='do_login' >HOME</a>

</div>

    </div>
  </div>
  <div class='box-info'>
					    <p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Need Help?</h3>
    </p>
					    <div class='line-wh'></div>
    					<button onclick="" class='b-support' title='Forgot Password?'> Forgot Password?</button>
    <button onclick="" class='b-support' title='Contact Support'> Contact Support</button>
    					<div class='line-wh'></div>
    <button onclick="" class='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
  				</div>

 </body>
</html>