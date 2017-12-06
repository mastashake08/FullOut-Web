$('.delete-btn').click(function () {
   var id = $(this).data('id');
   var product = $(this).data('route');

   var route = '/cheerleader/delete-'+ product;

   $('.delete-modal-content').text(product);
   $('.delete-modal-form-input-hidden').val(id);
   $('.delete-modal-form').prop('action', route);

});

//award
$(".update").click(function () {
   $(this).parent().children('.update-section').toggleClass('d-none');

});
