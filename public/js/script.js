$(document).ready(function($){

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $('#addNewGenre').click(function () {
       $('#addEditGenreForm').trigger("reset");
       $('#ajaxGenreModel').html("Add Genre");
       $('#ajax-genre-model').modal('show');
    });
  
    $('body').on('click', '.edit', function () {
  
        var id = $(this).data('id');
         
        // ajax
        $.ajax({
            type:"POST",
            url: '/edit-genre',
            data: { id: id },
            dataType: 'json',
            success: function(res){
              $('#ajaxGenreModel').html("Edit Genre");
              $('#ajax-genre-model').modal('show');
              $('#id').val(res.id);
              $('#genre').val(res.genre);
           }
        });
  
    });
  
    $('body').on('click', '.delete', function () {
  
       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
         
        // ajax
        $.ajax({
            type:"POST",
           url:'/delete-genre',
            data: { id: id },
            dataType: 'json',
            success: function(res){
  
              window.location.reload();
           }
        });
       }
  
    });
  
    $('body').on('click', '#btn-save', function (event) {
  
          var id = $("#id").val();
          var genre = $("#genre").val();
          
          $("#btn-save").html('Please Wait...');
          $("#btn-save"). attr("disabled", true);
         
        // ajax
        $.ajax({
            type:"POST",
           url: '/add-update-genre',
            data: {
              id:id,
              genre:genre
            },
            dataType: 'json',
            success: function(res){
             window.location.reload();
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
           }
        });
  
    });
  
  });

