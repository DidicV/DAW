$(document).ready(function(){

    function alerte(message) {
    
            swal({
      title: "Done!",
      text: message,
      icon: "info",
      timer: 1000})
    }

//TO DO
//--------------------------------------------------------------------------------------------------
  function showData() {
    $.ajax ({
      url: 'canban/todo_show.php',
      type: 'post',
      success: function(result){
        $("#data").html(result);

      }
    });
  }

  showData();

  $("#btn").on("click", function(e){
    e.preventDefault();
    txt = $("#txt").val();
    assign_to_id = $('#assign_to_id').val();

    var assign_to_id = (assign_to_id == undefined || assign_to_id == '') ? -1 : assign_to_id;


  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/todo_insert.php',
          type: 'post',
          data: {txt, assign_to_id},
          success: function(result){
            if (result == 1) {
              txt = $("#txt").val('');
              assign_to_id = $("#assign_to_id").val(0);
              showData();
            
            }else {
              console.log(result);
            }
          }
        });
    alerte("Tichet adaugat!");
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt, text_BD, assign_to_id},
          success: function(data) {
            showData();
            $("#txt").val('');
          }
          });
            text_BD='';
            edit_state=false;
            assign_to_id = $("#assign_to_id").val(0);
            alerte("Tichet modificat!");
        }
      });

  $(document).on("click", "#delete", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: 'canban/delete_card.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();

          showData();
          showData1();
          showData2();
       
        }
      }
    });
      alerte("Tichet sters!");
  });

      // UPDATE
      $(document).on("click", "#modifica", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $("#txt").val(id);
        edit_state=true;
        text_BD=id;
      });

$(document).on("change", "#filter", function(){

    filter_value = $("#filter").val();

    $.ajax ({
      url: 'canban/todo_show.php',
      type: 'post',
      data: {filter_value: filter_value},
      success: function(result){
        $("#data").html(result);

      }
    });
    $.ajax ({
      url: 'canban/doing_show.php',
      type: 'post',
      data: {filter_value: filter_value},
      success: function(result){
        $("#data1").html(result);
      }
    });

    $.ajax ({
      url: 'canban/done_show.php',
      type: 'post',
      data: {filter_value: filter_value},
      success: function(result){
        $("#data2").html(result);

      }
    });
});

//--------------------------------------------------------------------------------------------------
//DOING
//--------------------------------------------------------------------------------------------------

  function showData1() {
    $.ajax ({
      url: 'canban/doing_show.php',
      type: 'post',
      success: function(result){
        $("#data1").html(result);

      }
    });
  }

  showData1();

  $("#btn1").on("click", function(e){
    e.preventDefault();
    txt = $("#txt1").val();

    assign_to_id = $('#assign_to_id1').val();

    var assign_to_id = (assign_to_id == undefined || assign_to_id == '') ? -1 : assign_to_id;


  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/doing_insert.php',
          type: 'post',
          data: {txt, assign_to_id},
          success: function(result){
            if (result == 1) {
              txt = $("#txt1").val('');
              assign_to_id = $("#assign_to_id1").val(0);
  
              showData1();
            
            }else {
              console.log(result);
            }
          }
        });
    alerte("Tichet adaugat!");
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt, text_BD, assign_to_id},
          success: function(data) {
            showData1();
            $("#txt1").val('');
          }
          });
            text_BD='';
            edit_state=false;
            assign_to_id = $("#assign_to_id1").val(0);
            alerte("Tichet modificat!");
        }
      });



      // UPDATE
      $(document).on("click", "#modifica1", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $("#txt1").val(id);
        edit_state=true;
        text_BD=id;
      });

//--------------------------------------------------------------------------------------------------
//DONE
//--------------------------------------------------------------------------------------------------

function showData2() {
    $.ajax ({
      url: 'canban/done_show.php',
      type: 'post',
      success: function(result){
        $("#data2").html(result);

      }
    });
  }

  showData2();

  $("#btn2").on("click", function(e){
    e.preventDefault();
    txt = $("#txt2").val();

    assign_to_id = $('#assign_to_id2').val();

    var assign_to_id = (assign_to_id == undefined || assign_to_id == '') ? -1 : assign_to_id;


  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/done_insert.php',
          type: 'post',
          data: {txt, assign_to_id},
          success: function(result){
            if (result == 1) {
              txt = $("#txt2").val('');
              assign_to_id = $("#assign_to_id2").val(0);
  
              showData2();
            
            }else {
              console.log(result);
            }
          }
        });
    alerte("Tichet adaugat!");
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt, text_BD, assign_to_id},
          success: function(data) {
            showData2();
            $("#txt2").val('');
          }
          });
            text_BD='';
            edit_state=false;
            assign_to_id = $("#assign_to_id2").val(0);
            alerte("Tichet modificat!");
        }
      });



      // UPDATE
      $(document).on("click", "#modifica2", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $("#txt2").val(id);
        edit_state=true;
        text_BD=id;

      });






//--------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------
//MOVE

  $(document).on("click", "#todo", function(){
    id = $(this).data("id");
   
    $.ajax({
      url: 'canban/move_todo.php',
      type: 'post',
      data: {id}
         
    }).done(function(){
          showData();
          showData1();
          showData2();
      });

          
  });



  $(document).on("click", "#doing", function(){
    id = $(this).data("id");
   
    $.ajax({
      url: 'canban/move_doing.php',
      type: 'post',
      data: {id}
         
    }).done(function(){
          showData();
          showData1();
          showData2();
      });


  });



    $(document).on("click", "#done", function(){
    id = $(this).data("id");
   
    $.ajax({
      url: 'canban/move_done.php',
      type: 'post',
      data: {id}
         
    }).done(function(){
          showData();
          showData1();
          showData2();
      });
   
          
  });

});