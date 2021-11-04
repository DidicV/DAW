 $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    firstDay: 1,

    displayEventTime: false,
    editable:false,


    
    events: 'calendarul/load.php',
    selectable:true,
    selectHelper:true,



    select: function(start, end, allDay)
    {

     var title = prompt("Nume eveniment");
     if(title)
     {


      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"calendarul//insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');

       }
      })
     }
    },
    eventClick:function(event)
    {
     if(confirm("Sigur doresti sa stergi?"))
     {
      var id = event.id;
      $.ajax({
       url:"calendarul//delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
       }
      })
     }
    },

   });
  });