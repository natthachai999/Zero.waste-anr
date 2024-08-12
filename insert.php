<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anukoolnaree Zero waste</title>
    <link href="setting.css" rel="stylesheet">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</head>





<body>
    
<div class="c_">
    <div class="container mt-3">
        <div class="sha">
        <h1>Zero Waste</h1>
        </div>
        <div class="cg">
        <h3>Anukoolnaree Achool</h3>
        </div>
        <form  method="POST" >
          <div class="mb-3 mt-3">
            <label for="number">ID:</label>
            <input type="number" class="form-control" id="user" placeholder="Enter Your ID" name="user">






            

          </div>
          <P>นี่คือชื่อและนามสกุลตามข้อมูลรายชื่อ หากรายชื่อผิดพลาดกรุณาติดต่อแอดมินเพจ..</P>
          <P>This is the first and last name listed. If the list is wrong, please contact the page admin..</P>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


    <div class="table-responsive">

    <table class="table table-bordered">
    <thead>
  <tr>
    <th>ID</th>
    <th>#</th>
    <th>name</th>
    <th>class</th>
    
    <th>bottle_count</th>
    <th>score</th>
  </tr>
  <thead>
  <tbody>
    <?php
// ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zero waste";

// สร้าง connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$id = $_POST['user'];

// เตรียม SQL เพื่อค้นหาข้อมูลผู้ใช้
$sql = "SELECT * FROM user
WHERE id LIKE '$id'";
$result = $conn->query($sql);


if ($result -> num_rows > 0) {
    // หากพบข้อมูลผู้ใช้ ให้สร้าง session และ redirect
    session_start();
    $_SESSION['id'] = $id;
    while($row = $result->fetch_assoc()){
        echo "<tr>";
   echo "connection ok";
   echo "<td> : " . $row["id"]. "<br></td>";
   echo "<td>: " . $row["mr./ms."]. "<br></td>";
    echo "<td>: " . $row["name"]. "<br></td>";
   echo "<td> : " . $row["class"]. "<br></td>";
   echo "<td>: " . $row["bottle_count"]. "<br></td>";
    echo "<td>: " . $row["score"]. "<p>point<p><br></td>";
    echo "<tr>";
    //header("Location: insert.php");
}
}
 else {
    // หากไม่พบข้อมูล ให้แสดงข้อความ error
    echo "<h5>ไม่พบผู้ใช้นี้</h5>";
}

$conn->close();
?>
<tbody>
</table> 





</div>
<br><br>
<br><br>

    <footer>
    @2024 natthachai 0220 072667
    </footer>
    <div id>
  <a href="login.php">for addmin</a>
  </div>
    </div>

   
</body>






</html>

