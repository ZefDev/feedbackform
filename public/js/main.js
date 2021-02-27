$(document).ready(function(){

    $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      var link = ($(this).attr('href').split('/')[3]).split('?')[0];
      fetch_data(page,link);
    });
    function fetch_data(page,link){
      $.ajax({
        url: '/'+link+'/fetch_data?page='+page,
        success:function(data){
          $('#content_container').html(data);
        }
      });
    }
    $('form').submit(function(e) {
       var $form = $(this);
       $.ajax({
         type: $form.attr('type'),
         url: $form.attr('action'),
         data: { name_user: $("#name_user").val(), email_user: $("#email_user").val(),
         name_book: $("#name_book").val(), name_author: $("#name_author").val() }
       }).done(function(result) {
          close();

       }).fail(function() {
         console.log('fail');
       });
       e.preventDefault();
     });
     $('#myModal__close, #myOverlay').click( function(){
      close();
    });

});

function close() {
  $('#myModal').animate({opacity: 0}, 198,
    function(){
      $(this).css('display', 'none');
      $('#myOverlay').fadeOut(297);
  });
}

function open() {
  $('#myOverlay').fadeIn(297, function(){
    $('#myModal')
    .css('display', 'block')
    .animate({opacity: 1}, 198);
  });
}

function give(){
  author = $(event.target).attr('data-author');
  name_book = $(event.target).attr('data-book');
  $("#name_book").val(name_book);
  $("#name_author").val(author);
  open();

}
