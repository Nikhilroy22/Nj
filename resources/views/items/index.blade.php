{{-- resources/views/items/index.blade.php --}}
<x-nikhil>
<div id="item-container">
    @include('items.partials.item-list', ['items' => $items])
</div>

<center><button id="load-more" data-page="2" style="margin-bottom:15px;"><h1>Load More</h1></button></center>
<center><h1 style="display:none; color:red;" id="fett" class="loader">N</h1></center>
<script>
$(document).ready(function () {
    $('#load-more').on('click', function () {
      $('#load-more').hide();
      $('#fett').show();
        let page = $(this).data('page');
$('#item-container').append('');
        $.ajax({
            url: "{{ route('load-more-data') }}",
            type: "GET",
            data: { page: page },
            
            success: function (res) {
                $('#item-container').append(res);
               console.log(res)
                $('#load-more').data('page', page + 1);
$('#fett').hide();
$('#load-more').show();
                // Hide button if no more data
                if (res.trim() === "") {
                  
                    $('#load-more').hide();
                }
            }
        });
    });
});
function jaja(){
  
$(window).html('kkk');
  
}

$(window).click(function(){
alert('scroll')  
  
});
</script>
<h1 onclick="jaja()">NVG</h1>
</x-nikhil>

