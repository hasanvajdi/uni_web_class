<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once("files/header.php");
    session_start();
    if(!$_SESSION['username']){
        header('location:../login.php');

    }
?>
    <form action="#" method="POST">
        <div class=" w-full bg-gray-50 shadow-md rounded-xl mx-auto mb-8  p-8">
            <h1 class="text-center font-bold text-3xl">افزودن دسته</h1>
            
            <div class="mb-4 w-100 mt-5">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="username">
                عنوان دسته
                </label>
                <input
                    class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker"
                    name="name" type="text" placeholder="عنوان دسته">
            </div>
            <div class="mt-8 w-full">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="password">
                     توضیحات
                </label>
                <textarea name="description" id=""  rows="10" class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker" ></textarea>
            </div>
            <button class="bg-blue-500	hover:bg-blue-400 text-white font-bold py-2 px-7 rounded mt-5" type="submit">
                ثبت
            </button>

        </div>
    </form>

<?php 
    require_once("../inc/db_config.php");
    if($_POST){
        $name= $_POST['name'];
        $description = $_POST["description"];
        $sql = "INSERT INTO category (name, description) VALUES ('$name', '$description')";
        mysqli_query($conn, $sql);
    }
?>
<?php 
    include_once("files/footer.php") ?>

   
</body>
</html>