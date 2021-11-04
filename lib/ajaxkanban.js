$(document).ready(function(){

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

  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/todo_insert.php',
          type: 'post',
          data: {txt: txt},
          success: function(result){
            if (result == 1) {
              txt = $("#txt").val('');
  
              showData();
            
            }else {
              console.log(result);
            }
          }
        });
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt: txt,text_BD: text_BD},
          success: function(data) {
            showData();
            $("#txt").val('');
          }
          });
            text_BD='';
            edit_state=false; 
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
  });

      // UPDATE
      $(document).on("click", "#modifica", function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $("#txt").val(id);
        edit_state=true;
        text_BD=id;
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

  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/doing_insert.php',
          type: 'post',
          data: {txt: txt},
          success: function(result){
            if (result == 1) {
              txt = $("#txt1").val('');
  
              showData1();
            
            }else {
              console.log(result);
            }
          }
        });
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt: txt,text_BD: text_BD},
          success: function(data) {
            showData1();
            $("#txt1").val('');
          }
          });
            text_BD='';
            edit_state=false; 
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

  if(edit_state==false)
  {    
    $.ajax({
          url: 'canban/done_insert.php',
          type: 'post',
          data: {txt: txt},
          success: function(result){
            if (result == 1) {
              txt = $("#txt2").val('');
  
              showData2();
            
            }else {
              console.log(result);
            }
          }
        });
    }

    else
    {
        $.ajax({
          url: "canban/update_card.php",
          type: "POST",
          data: {txt: txt,text_BD: text_BD},
          success: function(data) {
            showData2();
            $("#txt2").val('');
          }
          });
            text_BD='';
            edit_state=false; 
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
      data: {id: id}
         
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
      data: {id: id}
         
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
      data: {id: id}
         
    }).done(function(){
          showData();
          showData1();
          showData2();
      });
   
          
  });

});