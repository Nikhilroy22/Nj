<div class="src" id="msearch">
  <div id="mg1"></div>
 <form role="search" id="forms">
  <input type="search" id="query" name="q"
   placeholder="Search..."
   aria-label="Search through site content">
  <button>
    <span> <i class="fas fa-search" style="font-size:26px;"></i></span>
  </button>
</form>
</div>
 <script>
   $('#forms').on('submit', function(e){
     e.preventDefault();
   const srcv =  $('#query').val()
     console.log(srcv)
     $('#mg1').append(`<br>${srcv}`)
   })
   
   var btns = document.getElementById("serchbar");
   var modals = document.getElementById("msearch");
   
   
btns.onclick = function() {
  console.log('jjjj')
  modals.style.display = "block";
}
modals.onclick = function(event) {
  
  if (event.target == modals) {
    modals.style.display = "none";
   
  }
}
   
 </script>
   
   
 
 <style>
 .src{
   display: none;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  overflow: hidden;
  top: 0;
  bottom: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
   /* Enable scroll if needed */
 /* background-color: rgb(0,0,0); *//* Fallback color */
 background-color: #e7e8f5; /* Fallback color */
 /* background-color: rgba(0,0,0,0.8); *//* Black w/ opacity */
  
   }
   
 
 .src  form {
     margin: 20px 10px;
  background-color: #4654e1;
  width: 100;
  height: 44px;
  border-radius: 5px;
  display: flex;
  flex-direction: row;
  align-items: center;
}
.src input {
  all: unset;
  font: 25px system-ui;
  color: #fff;
  height: 100%;
  width: 100%;
  padding: 6px 10px;
}
.src ::placeholder {
  color: #fff;
  opacity: 0.7; 
}
.src ::type{
  color: red;
  
}
.src button {
  border-radius: 5px;
  cursor: pointer;
  width: 44px;
  height: 44px;
}
.src #mg1{
  
  color: red;
  font-size: 30px;
  
}
 </style>
 