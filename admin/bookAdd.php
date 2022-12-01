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
?>
    <?php 
        require_once("../inc/db_config.php");
        $sql = "SELECT * FROM category";
        $result = mysqli_query($conn, $sql);      
    ?>

    <form action="#" method="POST" enctype="multipart/form-data">

        <div class=" w-full bg-gray-50 shadow-md rounded-xl mx-auto mb-8  p-8">
        <h1 class="text-center font-bold text-3xl">افزودن کتاب</h1>

            <div class="mb-4 w-100 mt-5">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="username">
                 دسته بندی
                </label>
                <select name="category" id="" class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker">
                    <option>انتخاب دسته</option>

                    <?php 
                        while($row =  mysqli_fetch_assoc($result)){
                    ?>
                        <option class="pr-4" value="<?= $row['id'] ?>"><?= $row["name"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-4 w-100">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="username">
                عنوان کتاب
                </label>
                <input
                    class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker"
                    name="name" type="text" placeholder="عنوان کتاب">
            </div>

           

            <div class="mt-8 w-full">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="password">
                     توضیحات
                </label>
                <textarea name="description" id=""  rows="10" class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker" style="direction:rtl" ></textarea>
            </div>

            <div class="mb-4 w-100 mt-5 bg-white">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="username">
                عکس کتاب
                </label>
                <input
                    class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker"
                    name="image" type="file" placeholder="عکس کتاب">
            </div>

            
            <button onClick="askToDelete()" class="bg-blue-500	hover:bg-blue-400 text-white font-bold py-2 px-7 rounded mt-5" type="submit">
                ثبت
            </button>

        </div>
    </form>

<?php 
    if($_POST){
        require_once("../inc/db_config.php");
        $category= $_POST["category"];
        $name = $_POST["name"];
        //var_dump($_FILES);
            $description = $_POST["description"];
            $target_dir = "../upload/";
            $tartget_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $tartget_file);
            //echo $category;
            //echo $name;
            //echo $description;
            $sql = "INSERT INTO book (category, name, description, image) VALUES ('$category', '$name', '$description', '$tartget_file')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);

        //echo askToDelete2();
        //echo askToDelete();  
    }
    ?>
<?php 
    include_once("files/footer.php") ?>


    <script>
        const askToDelete = ()=>{
            Swal.fire({
                title: "Profile Picture",
                text: "Do you want to make the above image your profile picture?",
                //imageUrl: "https://images3.imgbox.com/4f/e6/wOhuryw6_o.jpg",
                imageWidth: 550,
                imageHeight: 225,
                imageAlt: "Eagle Image",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                confirmButtonColor: "#00ff55",
                cancelButtonColor: "#999999",
                reverseButtons: true,
                timer:3000
            })
        }

        

        
    </script>
</body>
</html>