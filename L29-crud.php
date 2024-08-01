<?php
$conn = mysqli_connect("localhost", "root", "", "b83m");

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delete = $conn->query("DELETE FROM `students` WHERE `id` = '$id'");
    if($delete){
        echo "<script>alert('Student deleted successfully');location.href='./L29-crud.php'</script>";
    }else{
        echo "<script>alert('Failed to delete student')</script>";
    }
}

if (isset($_POST['addStudent'])) {
    $yname = $_POST['yname'];
    $insert = $conn->query("INSERT INTO `students` (`name`) VALUES ('$yname')");
    if ($insert) {
        echo "<script>alert('Student added successfully')</script>";
    } else {
        echo "<script>alert('Failed to add student')</script>";
    }
}

if(isset($_POST['editStudent'])){
    $ename = $_POST['ename'];
    $id = $_GET['edit'];
    $update = $conn->query("UPDATE `students` SET `name` = '$ename' WHERE `id` = '$id'");
    if($update){
        echo "<script>alert('Student updated successfully');location.href='./L29-crud.php'</script>";
    }else{
        echo "<script>alert('Failed to update student')</script>";
    }
}

$select = $conn->query("SELECT * FROM `students`");

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $singleStudentInfoQuery = $conn->query("SELECT * FROM `students` WHERE `id` = '$id'");
    $singleStudentInfo = $singleStudentInfoQuery->fetch_assoc();
}
?>
<?php if (!isset($_GET['edit'])) { ?>
    <form action="" method="post">
        <input type="text" placeholder="Student Name" name="yname" required>
        <button type="submit" name="addStudent">Add Student</button>
    </form>
<?php } else { ?>
    <form action="" method="post">
        <input type="text" placeholder="Student Name" name="ename" required value="<?= $singleStudentInfo['name'] ?? null ?>">
        <button type="submit" name="editStudent">Edit Student</button>
    </form>
<?php } ?>

<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    <?php while ($row = $select->fetch_assoc()) { ?>
        <tr>
            <td>
                <?= $row['id'] ?>
            </td>
            <td>
                <?= $row['name'] ?>
            </td>
            <td>
                <a href="./L29-crud.php?edit=<?= $row['id'] ?>"><button>Edit</button></a>
                <a href="./L29-crud.php?del=<?= $row['id'] ?>"><button>Delete</button></a>
            </td>
        </tr>
    <?php } ?>
</table>