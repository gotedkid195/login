<!DOCTYPE html>
<html lang="en">
<head>
   <title>LAKE SHRIMP</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Teslateq,teslateq,tesla,canhnguyen" />
   <link rel="stylesheet" href="bootstrap/fonts/awesome/css/font-awesome.min.css">
</head>
<style type="text/css" media="screen">

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}

body{
  /* margin:0;
   color:#6a6f8c;
   background:#c8c8c8;
   font:600 16px/18px 'Open Sans',sans-serif;*/
   margin:0;
   background:url(https://teslateq.vn/uploads/banners/1_15230046203533.jpg)no-repeat center center fixed;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
   font-family: 'Raleway', sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
/*   width:100%;
   margin:auto;
   max-width:525px;
   min-height:670px;
   position:relative;
   background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
   box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);*/

      width:100%;
   margin:auto;
   max-width:525px;
   min-height:600px;
   position:relative; 
   box-shadow:0 12px 15px 0 rgba(0,0,0,.54),0 17px 50px 0 rgba(0,0,0,.19);

}
.login-html{
   width:100%;
   height:100%;
   position:absolute;
   padding:10px 10px 10px 10px;
   background:rgba(40,57,101,0);
}
.header-w3l  {
      padding: 2em 0;
}
.header-w3l h1{
   font-size:3em;
   font-weight: bold;
    color:#1161ee;
    text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
    letter-spacing: 4px;
   text-align: center;
}

.login-html .sign-in-htm,
.login-html .sign-up-htm{
   top:0;
   left:0;
   right:0;
   bottom:0;
   position:absolute;
   transform:rotateY(180deg);
   backface-visibility:hidden;
   transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
   display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{

   text-transform:uppercase;
}
.login-html .tab{
   font-size:22px;
   margin-right:15px;
   padding-bottom:5px;
   margin:0 15px 10px 0;
   display:inline-block;
   border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
   color:#fff;
   border-color:#1161ee;
}
.login-form{
   min-height:345px;
   position:relative;
   perspective:1000px;
   transform-style:preserve-3d;
}
.login-form .group{
   margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
   width:100%;
   color:#fff;

  /* font-weight: bold;*/
   display:block;
}
.login-form .group .input,
.login-form .group .button{
   border:none;
   padding:15px 20px;
   border-radius:25px;
 
   background:rgba(255,255,255,.2);
}
.login-form .group input[data-type="password"]{
   text-security:circle;
   -webkit-text-security:circle;
}
.login-form .group .label{
   color:#fff;
   font-size:12px;
   text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.login-form .group .button{
   background:#1161ee;
}
.login-form .group label .icon{
   width:15px;
   height:15px;
   border-radius:2px;
   position:relative;
   display:inline-block;
   background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
   content:'';
   width:10px;
   height:2px;
   background:#fff;
   position:absolute;
   transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
   left:3px;
   width:5px;
   bottom:6px;
   transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
   top:6px;
   right:0;
   transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
   color:#fff;
}
.login-form .group .check:checked + label .icon{
   background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
   transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
   transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
   transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
   transform:rotate(0);
}

.hr{
   height:2px;
   margin:60px 0 50px 0;
   background:rgba(255,255,255,.2);
}
.foot-lnk{
   text-align:center;
   color:#1161ee;
}
.foot-lnk:hover{
   color:#fff;
}
</style>
<body >
   <div class="ima">  
    
   <div class="login-wrap">

     <div class="login-html">
    <div class="header-w3l">
         <h1>VMS-SOUTH</h1>
         
      </div> 
           
         <input id="tab-1" type="radio" name="tab" class="sign-in" checked ><label for="tab-1" class="tab">Sign In</label>
         <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">Sign Up</label>
     
         <div class="login-form">
            <div class="sign-in-htm">
               <div class="group">
                  <label for="user" class="label">Username</label>
                  <input id="user" type="text" class="input">
               </div>
               <div class="group">
                  <label for="pass" class="label">Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
               </div>
               <div class="group">
                  <input id="check" type="checkbox" class="check" checked>
                  <label for="check"><span class="icon"></span> Keep me Signed in</label>
               </div>
               <div class="group">
                  <input type="submit" class="button" value="Sign In">
               </div>
              <!--  <div class="hr"></div> -->
               <div class="foot-lnk">
                  <a href="#forgot">Forgot Password?</a>
               </div>
            </div>
            <div class="sign-up-htm">
               <div class="group">
                  <label for="user" class="label">Username</label>
                  <input id="user" type="text" class="input">
               </div>
               <div class="group">
                  <label for="pass" class="label">Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
               </div>
               <div class="group">
                  <label for="pass" class="label">Repeat Password</label>
                  <input id="pass" type="password" class="input" data-type="password">
               </div>
               <div class="group">
                  <label for="pass" class="label">Email Address</label>
                  <input id="pass" type="text" class="input">
               </div>
               <div class="group">
                  <input type="submit" class="button" value="Sign Up">
               </div>
              <!--  <div class="hr"></div> -->
               <div class="foot-lnk">
                  <label for="tab-1">Already Member?</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      </div>
   </body>


</html>
