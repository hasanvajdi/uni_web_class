<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/tailwind.js"></script>
    <title>Document</title>


</head>

<body style="padding:0px !important; margin:0px !important">
    <?php 
    include_once("files/header.php");
    //include_once("inc/db_config.php");
    require_once("inc/db_config.php");

    $sql = "SELECT * FROM book";
    $bookresult = mysqli_query($conn, $sql);
    //var_dump(mysqli_fetch_assoc($result));
?>

    <div class="max-w-full  h-fit flex">
        <div class="container w-2/5  ">
            <div class="container w-5/6 bg-white-500 mx-auto shadow border mt-5 rounded-md  h-fit">
                <div class="container bg-gray-200 h-10 flex items-center justify-center">
                    دسته بندی موضوعی
                </div>


                <div class="flex items-center justify-center h-fit py-5">

                <?php 
                    $sql = "SELECT * FROM category";
                    $result = mysqli_query($conn, $sql);
                    
                ?>
                <ul class="list-disc" style="direction:rtl">

                    <?php 
                        while($row =  mysqli_fetch_assoc($result)){
                    ?>
    
    
                        <li class="pr-4"><?= $row["name"] ?></li>

                    <?php } ?>
                </ul>

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
                while($row = mysqli_fetch_assoc($bookresult)){
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