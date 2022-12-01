<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/tailwind.js"></script>
    <title>Document</title>


</head>

<body style="padding:0px !important; margin:0px !important">
    <?php 
    session_start();
    include_once("files/header.php");
    if(!$_SESSION['username']){
        header('location:../login.php');
    }
    include_once("../inc/db_config.php");

    $sql = "SELECT * FROM book";
    $result = mysqli_query($conn, $sql);
?>

    <div class="max-w-full  h-fit flex">
        <div class="container w-2/5  ">
            <div class="container w-5/6 bg-white-500 h-20 mx-auto shadow border mt-5 rounded-md f">
                <div class="container bg-gray-200 h-1/2 flex items-center justify-center">
                    header
                </div>

                <div class="flex items-center justify-center">
                    content
                </div>
            </div>

            <div class="container w-5/6 bg-white-500 h-20 mx-auto shadow border mt-5 rounded-md f">
                <div class="container bg-gray-200 h-1/2 flex items-center justify-center">
                    header
                </div>

                <div class="flex items-center justify-center">
                    content
                </div>
            </div>

            <div class="container w-5/6 bg-white-500 h-20 mx-auto shadow border mt-5 rounded-md f">
                <div class="container bg-gray-200 h-1/2 flex items-center justify-center">
                    header
                </div>

                <div class="flex items-center justify-center">
                    content
                </div>
            </div>

            <div class="container w-5/6 bg-white-500 h-20 mx-auto shadow border mt-5 rounded-md f">
                <div class="container bg-gray-200 h-1/2 flex items-center justify-center">
                    header
                </div>

                <div class="flex items-center justify-center">
                    content
                </div>
            </div>


        </div>

        <div class="container w-3/5  h-36">
            <?php 
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <div
                class="container mx-auto bg-white h-36 w-5/6 mt-5 flex items-center justify-end rounded-md	border shadow">
                <h1 class="mr-5"><?=$row['name'] ?> </h1>
                <img src="<?=$row['image'] ?>" alt="عکس" class="h-full">
            </div>

            <?php 
                }
            ?>
            
        </div>
    </div>
    <?php 
    include_once("files/footer.php") ?>

</body>

</html>