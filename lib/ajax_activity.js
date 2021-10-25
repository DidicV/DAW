$(document).ready(function(){

//TO DO
//--------------------------------------------------------------------------------------------------
  function show_activiti() {
    $.ajax ({
      url: 'activity/activiti_show.php',
      type: 'post',
      success: function(result){
        $("#actions").html(result);

      }
    });
  }

  show_activiti();

  



  $(document).on("click", "#delete_activiti", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: 'activity/activiti_delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();

          show_activiti();

       
        }
      }
    });
  });

   





     $(document).on("click", "#rel", function(){
    
   
show_activiti();
   
          
  });



   



});
