<!DOCTYPE html>
<html>
<head>
    <title>MESSAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="path/css/all.min.css" rel="stylesheet"/>
   
    <script src="/eruda/eruda.js"></script>
<script>eruda.init();</script>
      <script src="{{ asset('dist/jquery.min.js') }}"></script>
      
      <style>
       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: Arial, sans-serif;
            
 }
 .msg-navbar{
   height: 100%;
   width: 100%;
   background-color: #1a4c7d;
   
 }
 
.msg-container{
  margin: 0 0 50px 0;
}
.msg-navfooter{
  position: fixed;
  bottom: 0px;
  width: 100%;
  height: 50px;
  box-shadow: 0 0 3px rgba(0.0.0.0.2);
  background: #1a4c7d;
  overflow-x: auto;
  display: flex;
}
.msg-btn{
  border: 1px solid #1a4c7d;
  margin-right: 16px;
  margin-top: 5px;
  margin-bottom: 5px;
  padding: 0 10px;
  border-radius: 6px;
  background-color: #1a4c7d;
  color: green;
  text-align: center;
  cursor: pointer;
  
}
.msg-input {
  margin: 5px 10px;
  width: 100%;
  height: 40px;
  border: 1px solid #1a4c7d;
  border-radius: 10px;
  font-size: 16px;
  color: green;
  font-weight: bold;
  text-align: center;
  
}
.message{
  display: block;
  font-size: 20px;
  
}
.msg-rcv{
   flex: 1;
   margin: 10px 10px;
   text-align: right;
   display: block;
   color: red;
   border-radius: 10px;
   font-weight: bold;
 }
 .msg-send{
   flex: 1;
   margin: 10px 10px;
   text-align: left;
   display: block;
   color: green;
   border-radius: 10px;
   font-weight: bold;
   
 }
      </style>
      </head>
  <body>
    <div class="msg-navbar">
      <a href="/" style="margin-left: 9px;" ><i class="fas fa-arrow-left" style="font-size:30px; color: white;"></i></a>
      </div>
      <div class="message">
        <span class="msg-send">How Are you. What is your name? How Are you. What is your name?</span>
        <div class="msg-rcv">I am fine and you</div>
        </div>
        <div class="msg-navfooter">
          <input class="msg-input" type="text" placeholder="type message">
          <button class="msg-btn"><i class="fas fa-paper-plane" style="font-size:26px;"></i>
          </button>
          </div>
      </body>
</html>