<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta content="text/html; charset=utf-8" />
</head>

<body>
    <div style="margin-left: 50px;">
        <h1>Hello world </h1>
    </div>

    <?php
    include_once('functions.php');
    $fetchdataMember = new DB_con();
    $sql = $fetchdataMember->showlist();
    ?>

    <div class="container" style="margin-left: 150px; font-size: 25px; background-color: #ffffff; width: 800px; padding: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 10, 0.15); text-align: center;">
        <b>รายชื่อ</b>
        <div style="margin-top: 20px;">
            <table class="table table-bordered" style="font-size: 15px;" id="placesTable">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">รายชื่อ</th>
                        <th scope="col">ตำเเหน่ง</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($sql) {
                        while ($row = mysqli_fetch_array($sql)) {
                    ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['position']; ?></td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='3'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>