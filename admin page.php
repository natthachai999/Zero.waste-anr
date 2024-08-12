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
        <h1>Zero Waste Addmin</h1>
        </div>
        <div class="cg">
        <h3>Anukoolnaree Achool</h3>
        </div>
        <form  method="POST" >
          <div class="mb-3 mt-3">
            <label for="number">ID:</label>
            <input type="date" class="form-control" id="da" placeholder="2024-08-12" name="da">







          </div>
          <P>.......................................</P>
          <P>This is the first and last name listed. If the list is wrong, please contact the page admin..</P>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


    <div class="table-responsive">

    <table class="table table-bordered">
    <thead>
  <tr>
    <th>Date</th>
    <th>ID</th>
    <th>name</th>
    <th>class</th>
    <th>count</th>

    

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
$da = $_POST['da'];
// กำหนดวันที่ที่ต้องการกรอง
$date = '2024-08-12'; // เปลี่ยนวันที่ตามต้องการ

// เตรียม SQL เพื่อค้นหาข้อมูลผู้ใช้
$sql = "SELECT history.date, user.name, user.id, user.class, history.count 
        FROM history 
        INNER JOIN user ON history.id = user.id 
        WHERE DATE(history.date) = '$da' 
        ORDER BY history.date ASC";

$result = $conn->query($sql);

// แสดงข้อมูล
if ($result->num_rows > 0) {
    echo " ";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["date"] . "</td>
                <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["class"] . "</td>
        <td>" . $row["count"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}
    //header("Location: insert.php");



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

    </div>

   
</body>






</html>

