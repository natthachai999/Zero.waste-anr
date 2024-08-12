<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addmin</title>
    <link href="setting1.css" rel="stylesheet">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</head>

<body>


    <div class="c_">
        <div class="container mt-3">
            <div class="sha">
                <h1>Addmin Zero Waste</h1>
            </div>
            <div class="cg">
                <h3>Anukoolnaree Achool</h3>
            </div>
            <form method="POST">
                <div class="mb-3 mt-3">
                    <label for="number">ID:</label>
                    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['pa'];

        // เปรียบเทียบรหัสผ่านกับค่าคงที่
        if ($password == "46229") {
            echo "ยินดีต้อนรับ!";
            header("Location: admin page.php"); // Redirect ไปหน้าหลัก
        } else {
            echo "รหัสผ่านไม่ถูกต้อง";
        }
    }
    ?>
                    <input type="number" class="form-control" id="pa" placeholder="Enter Your Pass word" name="pa">
                </div>
                <P>******************************************</P>
                <P>******************************************</P>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br><br>        <br><br>




        <footer>
            @2024 natthachai 0220 072667
        </footer>



    </div>






</body>

</html>