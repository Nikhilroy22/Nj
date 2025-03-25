 Echo.channel('nikhil').listen('TestEvent', (e) => {
 // console.log(e);
 // document.getElementById('event').innerHTML = e.nikhil;
// alert(e.nikhil);
$('#reverb').show();
//  $('#event').append(`<h1>${e.nikhil}</h1>`//);
$('#event').append('');
$.each(e.nikhil, function(key, vvv){
  console.log(vvv)
  
  $('#event').append(`<h1>${vvv.name}</h1>`);
})
  
});