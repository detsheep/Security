<?php
include "header.php";
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title>文件上传</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f1f1f1;  
        }  
  
        .upload-container {  
            position: absolute;  
            top: 50%;  
            left: 50%;  
            transform: translate(-50%, -50%);  
            width: 50%;  
            background-color: #ffffff;  
            border-radius: 5px;  
            padding: 20px;  
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);  
        }  
  
        h2 {  
            color: #333333;  
            text-align: center;  
        }  
  
        form {  
            display: flex;  
            flex-direction: column;  
            margin-top: 20px;  
        }  
  
        input[type="file"] {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 20px;  
            border: 1px solid #dddddd;  
            border-radius: 5px;  
            font-size: 16px;  
        }  
  
        input[type="submit"] {  
            width: 100%;  
            padding: 10px;  
            background-color: #333333;  
            color: #ffffff;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
        }  
    </style>  
</head>  
<body>  
    <div class="upload-container">  
        <h2>文件上传</h2>  
        <form action="upload.php" method="post" enctype="multipart/form-data">  
            <input type="file" name="fileToUpload" id="fileToUpload">  
            <input type="submit" value="上传" name="submit">  
        </form>  
    </div>  
</body>  
</html>
<?php  
if(isset($_POST["submit"])) {  
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1; // 用于标记上传是否成功  
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
  
   
    if (file_exists($targetFile)) {  
        echo "对不起，文件已存在.";
        $uploadOk = 0;  
    }  
  
  
 
    if ($uploadOk == 0) {  
        echo "对不起，文件未被上传."; 
    } else {  
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {  
            echo "文件 ". basename( $_FILES["fileToUpload"]["name"]). " 已经被成功上传."; // 这里可以添加更多的处理逻辑，比如将文件信息保存到数据库等操作。  
        } else {  
            echo "对不起，上传文件时发生错误."; 
        }  
    }  
} else {  
    echo "请上传文件";
}?>
