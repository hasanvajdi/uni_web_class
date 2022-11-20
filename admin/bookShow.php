<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/sweet.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

</head>
<body>
<?php
    session_start();
    include_once("files/header.php");
    if(!$_SESSION['username']){
        header('location:../login.php');

    }
    require_once("../inc/db_config.php");
    $sql = "SELECT * FROM  book order by createdTime desc";
    $result = mysqli_query($conn, $sql);
?>

<table class="w-4/5 mt-12 mx-auto border-2 h-fit rounded" style="direction:rtl;" >
    <thead>
        <tr class="border-2 h-fit p-3 text-center">
            <th class="py-4">نام</th>
            <th class="py-4">توضبحات</th>
            <th class="py-4">عملیات</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="border-2 p-3 text-center hover:bg-gray-100 hover:cursor-pointer" >
            <td class="py-4"><?= $row['name'] ?></td>
            <td class="py-4"><?= $row['description'] ?></td>

            <td class="py-4">
                <a onClick="askToDelete(<?= $row['id'] ?>);" class="bg-red-400 py-2 px-4 text-white hover:bg-red-500 rounded-full">
                حذف
                </a>
            </td>
        </tr>
    </tbody>
    <?php 
            }
            ?>
</table>

<?php 
    include_once("files/footer.php") ?>

    <script>
        const askToDelete = (id)=>{
            Swal.fire({
                title: "حذف کتاب",
                text: "آیا مایل به حذف این کتاب هستید؟",
                icon:"error",
                showCancelButton: true,
                confirmButtonText: "حذف",
                cancelButtonText: 'لفو',
                confirmButtonColor: "red",
                cancelButtonColor: "lightgray",
            }).then((result)=>{
                console.log('ree :', result)
                if(result.isConfirmed){
                    location.replace(`bookDelete.php?id=${id}`)
                }
            })
        }
    </script>
</body>
</html>


