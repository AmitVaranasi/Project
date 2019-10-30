<?php session_start() ; 
    include 'header.php';
?>

<title>Confirm</title>
</head>
<body>
  <?php include 'header.php' ?>
  <script>

    function func(val){

        if (val == "Regular"){

            document.getElementById("ordertype").value = "Regular";

        }

        else{

            document.getElementById("ordertype").value = "Express";

        }

    }

    function service(val){

        document.getElementById("service").value += val+" ";

    }

    // function pickup(){
      
    //   var order =  document.getElementById("ordertype").value;

    //   var service =  document.getElementById("service").value;

    //   var date = document.getElementById("datetime").value ;

    //   if(order !== ""&&service!==""&&date!==""){

      

    //     //alert("this is a test");

    //     document.getElementById("ordertype").value = "";

    //     document.getElementById("service").value = "";

    //     document.getElementById("datetime").value  = "";

    //     $('#exampleModalLong').modal('show')


    //   }

    //   else{

    //     alert("please enter all the values");

    //   }



    // }

    function handler(e){

    document.getElementById("datetime").value = e.target.value



    }

  </script>

  <?php 
  if(isset($_POST['orderid']){
    $conn = mysqli_connect('localhost','root','Himavarsha','login_swe') or die('Unable To connect');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $u = mysqli_real_escape_string($conn,$_SESSION['user']);
    $sql = "select * from confirm where order_id = '".$_POST['orderid']."';";
    $result = $conn->query($sql);
    $_POST['ordertype'] = $result['oder'];
    $_POST['service'] = $result['service'];
    $_POST['time'] = $result['time'];
        
  }
  
  ?>

<div class = "row" style="padding:100px;">

<div class = "col-sm-6">

        <h3>1.Select Service type</h3>

        <br>

        

            <button type="button" class="btn btn-secondary" value = "Regular" onclick="func(this.value)">Regular</button>

            <button type="button" class="btn btn-secondary" value = "Express" onclick="func(this.value)">Express</button>

          

          <br><hr>

          <h3>2. Select any of this Service</h3>

          <br>

          

            <button type="button" class="btn btn-secondary" value = "Steam&press" onclick="service(this.value)">Steam and Press</button>

            <button type="button" class="btn btn-secondary" value = "wash&fold" onclick="service(this.value)">wash and fold</button>

            <button type="button" class="btn btn-secondary" value = "wash&press" onclick="service(this.value)">wash & press</button>

            <button type="button" class="btn btn-secondary" value = "DryClean" onclick="service(this.value)">Dry clean</button>        

          

          <br><hr>

          <h3>3. Pickup Date & Time</h3>

          <input type="datetime-local" name="" id="" onchange="handler(event);">

</div>

<div class="col-sm-6">

        <form action="" method="POST">
        <h3>Order Summary</h3>

        <input type="text" class = "form-control" id = "ordertype" placeholder="order type" name = "ordertype" readonly>

        <br><hr>

        <input type="text" class = "form-control" id = "service" placeholder="service" name = "service" readonly>

        <br><hr>

        <input type="text" class = "form-control" id = "datetime" placeholder="time" name = "time" readonly>

        <br><hr>

        <button type="submit" class="btn btn-primary btn-lg btn-block" name="confirm" onclick="pickup()">Confirm Pick Up</button>
        </form>

  </div>

        

</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

<div class="modal-dialog" role="document">

  <div class="modal-content">

    <div class="modal-header">

      <h5 class="modal-title" id="exampleModalLongTitle" style="padding-left:100px;margin-left: 10px;">Booking Successful</h5>

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        <span aria-hidden="true">&times;</span>

      </button>

    </div>

    <div class="modal-body">

            <img src="img/progress-and-tick-icon-animation.gif" alt="" style="width: 466px;">

    </div>

    <div class="modal-footer">

      <button type="button" class="btn btn-secondary" data-dismiss="modal">ok</button>

      

    </div>

  </div>

</div>

</div>







</body>