$(document).ready(function(){

//TO DO
//--------------------------------------------------------------------------------------------------
  function show_user() {
    $.ajax ({
      url: 'admin/user_show.php',
      type: 'post',
      success: function(result){
        $("#utilizatori").html(result);

      }
    });
  }

  show_user();

  

  $("#btnAddUsr").on("click", function(e){
    e.preventDefault();
    user_name = $("#fullname").val();
    password = $("#fullpassword").val();
    name = $("#rang").val();
    id_departament = $("#id_departament").val();

  if(edit_state==false)
  {    

    $.ajax({
          url: 'admin/user_insert.php',
          type: 'post',
          data: {user_name,password,name, id_departament},
          success: function(result){
            if (result == 1) {

              user_name = $("#fullname").val('');
              password = $("#fullpassword").val('');
              
  
              show_user();
            
            }else {
              console.log(result);
            }
          }
        });
    }

    else
    {

        $.ajax({
          url: "admin/user_update.php",
          type: "POST",
          data: {user_name, password, name, text_BD, id_departament},
          success: function(data) {
            show_user();
            $("#fullname").val('');
            $("#fullpassword").val('');
          }
          });
      
            edit_state=false; 
        }
      });



  $(document).on("click", "#delete_user", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: 'admin/user_delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();

          show_user();

       
        }
      }
    });
  });

      // UPDATE
      $(document).on("click", "#modifica_user", function(e) {
        e.preventDefault();
        id = $(this).data("id");
        var currentRow=$(this).closest("tr"); 

        var user_name=currentRow.find("td:eq(0)").text(); 
        var password =currentRow.find("td:eq(1)").text();



        $("#fullname").val(user_name);
        $("#fullpassword").val(password);

        edit_state=true;
        text_BD=id;
      });



});
