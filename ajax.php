$(document).ready(function() {
$("#tahunajaran").change(function() {
    var idfilm = $("#idfilm").val();
       
    $.ajax({
      url : "inc/get_film.php",
      data : "idfilm=" + idfilm,
      success : function(data) {
        $("#info").html(data);
       
      }
    });
  }); 
  });