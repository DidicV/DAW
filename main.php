<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Management Project</title>

    <link rel="stylesheet" href="lib/spaCSS.css">
    <script src="lib/spaJS.js"></script>


  <link rel="stylesheet" href="lib/fullcalendar.min.css" />
  <script src="lib/jquery-3.6.0.min.js"></script>
  <script src="lib/moment.min.js"></script>
  <script src="lib/fullcalendar.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        var edit_state=false;
        var text_BD="";
    </script>

    <style>
        td,th{
            height: 50px;
            background-color: white;
        }
         .box {
        width: 120px;
        height: 30px;
        border: 2px solid #999;
        font-size: 1em;
        color:  #696969;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 1px 1px #ccc;
      }
    </style>




</head>
<body>





<!---------------------------ADMIN-------------------------------------------->
<!---------------------------------------------------------------------------->

 <div class="page" id="admin">

    <header class="sidebar">
        <div class="titlul">
            <center>Project manager</center>
            <center>Departament <?php echo $_SESSION['departament_name']; ?> </center>
            <center>Hello <?php echo $_SESSION['user_name']; ?> </center>
        </div>
            <ul>

                <?php

                    if($_SESSION['name']=="admin")
                    {
                            echo '<li><a href="#" data-target="admin" class="nav-link">
                            <i class="fa fa-user" style="font-size:24px;"></i>
                            Admin
                            </a></li>';
                    }
                ?>
                    <li><a href="#" data-target="kanbanul" class="nav-link">
                        <i class="fa fa-columns" style="font-size:24px;"></i>
                        Kanban</a>
                    </li>

                    <li><a href="#" data-target="calendarul" class="nav-link">
                        <i class="fa fa-calendar" style="font-size:24px;"></i>
                        Calendar</a>
                    </li>

                    <li><a href="logout.php">
                        <i class="fa fa-sign-out" style="font-size:24px;"></i>
                        Log out</a>
                    </li>
            </ul>
     </header>


    <section  class="main">
    <?php
    if($_SESSION['name']=="admin")
    {
        echo '

            <br>
                <div align="right"  ><button id="rel"><a style="font-size: 1em" href="#" data-target="activitatile" class="nav-link" >Activitati</a></button></div>
            <form>
            <center>
             <div class="wrapper" style=" background: white; width: 500px;">
             <center><b> Add user </b></center>
             <br>

                <input style="width: 50%;" type="text" id="fullname" placeholder="Numele" required autocomplete="off" >
                <br><br>
                <input style="width: 50%;" type="text" id="fullpassword" placeholder="Parola" required autocomplete="off">
                <br><br>

                <select id="rang" style="width: 150px;height: 30px; border-radius: 5px; border-width: 2px;"> 
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <select id="id_departament" style="width: 150px;height: 30px; border-radius: 5px; border-width: 2px;"> 
                    <option value="1">Departament Testing</option>
                    <option value="2">Departament Development</option>
                    <option value="3">Departament HR</option>
                    <option value="4">Departament DevOps</option>
                    <option value="5">Departament Heads</option>
                </select>

                <br><br>
                    <button class="btnkanban" id="btnAddUsr">Submit</button>
            </div>
            </center>
              
            </form>


            <center>
                <div id="utilizatori"></div>
            </center>
            

            <script src="lib/ajaxadmin.js"></script>
        ';
    }
    ?>
    </section> 
    </div>
        
<!----------------------------ACTIVITIES----------------------------------------->
<!------------------------------------------------------------------------------->

        <div class="page" id="activitatile">

            <header class="sidebar">
            <div class="titlul">
                <center>Project manager</center>
                <center>Departament <?php echo $_SESSION['departament_name']; ?> </center>
                <center>Hello <?php echo $_SESSION['user_name']; ?> </center>
            </div>
                <ul>
            <?php

                if($_SESSION['name']=="admin")
                {
                    echo '<li><a href="#" data-target="admin" class="nav-link">
                    <i class="fa fa-user" style="font-size:24px;"></i>
                    Admin
                    </a></li>';
                }

            ?>
            <li><a href="#" data-target="kanbanul" class="nav-link">
                <i class="fa fa-columns" style="font-size:24px;"></i>
                Kanban</a>
            </li>

            <li><a href="#" data-target="calendarul" class="nav-link">
                <i class="fa fa-calendar" style="font-size:24px;"></i>
                Calendar</a>
            </li>

            <li><a href="logout.php">
                <i class="fa fa-sign-out" style="font-size:24px;"></i>
                Log out</a>
            </li>
                </ul>
            </header>


            <section class="main">

    <?php
    if($_SESSION['name']=="admin")
    {
        echo '


            <center>
                
                <h1 style="color:white;">Filtru de interogari</h1>
                <input style="width: 300px; " type="text" name="search_text" id="search_text"/> 
                <span></span> <span></span><span></span>
                <button class="del_tot" id="delete_activiti" data-id="1">Sterge tot</button>
                <br><br>



                <div id="result"></div>


            </center>

 
        ';
    }
    ?>


<script>
$(document).ready(function(){

//se incarca pagina cand o accesam
    $(document).on("click", "#rel", function(){

                load_data();        
  });

//incarcarea contentului
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"activity/activiti_show.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }

//stergere dn activitate
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
          var url = $("#search_text").val();

          load_data(url);
        }
      }
    });
  });
    
//interogari la baza e date dupa introducere in input
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();            
        }
    });
});
</script>



</section>


</div>
    

<!------------------------- KANBAN ----------------------------------------->
<!-------------------------------------------------------------------------->


<div class="page active" id="kanbanul">

    <header class="sidebar">
    <div class="titlul">

        <center>Project manager</center>
        <center>Departament <?php echo $_SESSION['departament_name']; ?> </center>
        <center>Hello <?php echo $_SESSION['user_name']; ?> </center>
    </div>
        <ul>
            <?php

                if($_SESSION['name']=="admin")
                {
                    echo '<li><a href="#" data-target="admin" class="nav-link">
                    <i class="fa fa-user" style="font-size:24px;"></i>
                    Admin
                    </a></li>';
                }

            ?>
            <li><a href="#" data-target="kanbanul" class="nav-link">
                <i class="fa fa-columns" style="font-size:24px;"></i>
                Kanban</a>
            </li>

            <li><a href="#" data-target="calendarul" class="nav-link">
                <i class="fa fa-calendar" style="font-size:24px;"></i>
                Calendar</a>
            </li>

            <li><a href="logout.php">
                <i class="fa fa-sign-out" style="font-size:24px;"></i>
                Log out</a>
            </li>
        </ul>
    </header>


    <section class="main">
        <script src="lib/ajaxkanban.js"></script>


<!--------------------------------- TO DO   ------------------------------------->
<!------------------------------------------------------------------------------->

<div class="rand">
<div class="coloana">

<center><h1 style="color: white;">To Do</h1></center> 

<div class="wrapper" style=" margin-top: 0px; background: rgba(52, 61, 93);">

    <form>
   
    <input type="text" id="txt" placeholder="Enter task" required autocomplete="off">
    &nbsp;
    <button class="btnkanban" id="btn">Submit</button>



    <?php 
    if($_SESSION['name']=="admin")
    {
        $mysqli =  NEW MySQLi("localhost","root", "","daw");
        $resultSet = $mysqli->query("SELECT id, user_name FROM users");  
    ?>

        <br><br>
        <center>

            <select id="assign_to_id" class="box">

                <option value="0">For all</option>
                <option value="1">Departament Testing</option>
                <option value="2">Departament Development</option>
                <option value="3">Departament HR</option>
                <option value="4">Departament DevOps</option>
                <option value="5">Departament Heads</option>

                <?php 

                while($rows= $resultSet->fetch_assoc())
                {
                    $nume=$rows["user_name"];
                    $id=$rows['id'];
                    echo "<option value='$id'> $nume </option>";
                }
                ?>
            </select>
        </center>

        <?php 
    }
    else
    {
    ?>
        <div id="assign_to_id" value="0"></div>
        <?php   
    }
    ?>
    </form>
<br>
<table id="data"></table>

</div>
</div>


<!--------------------------------- DOING   -------------------------------------->
<!-------------------------------------------------------------------------------->


<div class="coloana">

    <center><h1 style="color: white;">Doing</h1></center> 
    <div class="wrapper" style=" margin-top: 0px; background: rgba(52, 61, 93);">

        <form>
            <input type="text" id="txt1" placeholder="Enter task" required autocomplete="off">
            &nbsp;
            <button class="btnkanban" id="btn1">Submit</button>

            <?php 

            if($_SESSION['name']=="admin")
            {
                $mysqli =  NEW MySQLi("localhost","root", "","daw");
                $resultSet = $mysqli->query("SELECT id, user_name FROM users");  
            ?>

            <br><br>

            <center>

                <select id="assign_to_id1" class="box">
                <option value="0">For all</option>
                <option value="1">Departament Testing</option>
                <option value="2">Departament Development</option>
                <option value="3">Departament HR</option>
                <option value="4">Departament DevOps</option>
                <option value="5">Departament Heads</option>
                <?php 

                while($rows= $resultSet->fetch_assoc())
                {
                    $nume=$rows["user_name"];
                    $id=$rows['id'];
                    echo "<option value='$id'> $nume </option>";
                }
                ?>

                </select>
            </center>

            <?php 
            }
            ?>
        </form>

    <br>
    <table id="data1" ></table>

    </div>

</div>


<!---------------------------------  DONE   -------------------------------------->
<!-------------------------------------------------------------------------------->

<div class="coloana">

    <center><h1 style="color: white;">Done</h1></center> 

<div class="wrapper" style=" margin-top: 0px; background: rgba(52, 61, 93);">
    <form>

        <input type="text" id="txt2" placeholder="Enter task" required autocomplete="off">
        &nbsp;
        <button class="btnkanban" id="btn2" >Submit</button>

            <?php 

            if($_SESSION['name']=="admin")
            {
                $mysqli =  NEW MySQLi("localhost","root", "","daw");
                $resultSet = $mysqli->query("SELECT id, user_name FROM users");  
            ?>

        <br><br>

        <center>
            <select id="assign_to_id2" class="box">
                <option value="0">For all</option>
                <option value="1">Departament Testing</option>
                <option value="2">Departament Development</option>
                <option value="3">Departament HR</option>
                <option value="4">Departament DevOps</option>
                <option value="5">Departament Heads</option>
                <?php 
                while($rows= $resultSet->fetch_assoc())
                {
                    $nume=$rows["user_name"];
                    $id=$rows['id'];
                    echo "<option value='$id'> $nume </option>";
                }
                ?>
            </select>
        </center>

        <?php 
        }
        ?>
    </form>

<br>

    <table id="data2" ></table>

</div>
</div>
</div>
</section>
</div>



<!--------------CALENDAR--------------------------------------------------------->
<!------------------------------------------------------------------------------->

<div class="page" id="calendarul">

    <header class="sidebar">
        <div class="titlul">
            <center>Project manager</center>
            <center>Departament <?php echo $_SESSION['departament_name']; ?> </center>
            <center>Hello <?php echo $_SESSION['user_name']; ?> </center>
        </div>
            <ul>
                <?php
                    if($_SESSION['name']=="admin")
                    {
                        echo '
                        <li>
                            <a href="#" data-target="admin" class="nav-link">
                                <i class="fa fa-user" style="font-size:24px;"></i>
                                Admin
                            </a>
                        </li>
                        ';
                    }
                ?>
            <li>
                <a href="#" data-target="kanbanul" class="nav-link">
                    <i class="fa fa-columns" style="font-size:24px;"></i>
                    Kanban
                </a>
            </li>

            <li>
                <a href="#" data-target="calendarul" class="nav-link">
                    <i class="fa fa-calendar" style="font-size:24px;"></i>
                    Calendar
                </a>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out" style="font-size:24px;"></i>
                    Log out
                </a>
            </li>
        </ul>
    </header>


    <section class="main">
    <br>
    <br>
    <script src="lib/ajaxcalendar.js"></script>


    <div id="calendar">



    </section>
</div>
<!------------------------------------------------------------------------------------------------>

</body>
</html>

<?php 
}
else
{
     header("Location: index.php");
     exit();
}

?>
