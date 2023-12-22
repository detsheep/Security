<?php
include "header.php";
// highlight_file('unserialize.php');
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title>反序列化攻击示例</title>  
</head>  
<style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: #f1f1f1;  
        }  
  
        .rce-container {  
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
  
        h1 {  
            color: #333333;  
            text-align: center;  
        }  
  
        form {  
            display: flex;  
            flex-direction: column;  
            margin-top: 20px;  
        }  
  
        label {  
            display: block;  
            margin-bottom: 10px;  
        }  
  
        input[type="text"] {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 20px;  
            border: 1px solid #dddddd;  
            border-radius: 5px;  
            font-size: 16px;  
        }  
  
        input[type="submit"] {  
            width: 50%;  
            padding: 15px;  
            background-color: #333333;  
            margin-top: 30px;
            margin-left:160px;
            color: #ffffff;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
        }  
        .code-box {  
            border: 2px solid black;    
            background-color: #f5f5f5;  
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: auto;  
            max-width: 700px;  
            position: relative;  
            top: -270px; /* 调整为适合您需求的值 */  
            right: -300px;
        }  
    </style>  
<body>  
<div style="position: absolute; top: 39%; left: 50%; transform: translate(-50%, -50%); width: 50%;">
    <h1>接收反序列化数据</h1>  
  
    <form method="post" action="">  
        <label for="input">输入内容：</label>  
        <input type="text" id="input" name="input">  
        <input type="submit" value="提交">  
    </form>  
  
    <?php  
    $userInput = $_POST['input'];  

    class bad {  
        public $d;  
          
        public function __construct() {  

        }  
        public function __destruct() {  

        } 
        public function __wakeup() {  
            // echo $this->d;
            echo(shell_exec($this->d));
        }    
    }  
    // $a=new bad();
    // $a->d='whoami';
    // echo (serialize($a));
    //O:3:"bad":1:{s:1:"d";s:6:"whoami";}
    unserialize($userInput);
    ?>  
</div>
<div class="code-box">  
        <h3>
            <pre>
$userInput = $_POST['input'];  

class bad {  
    public $d;  
      
    public function __construct() {  

    }  
    public function __destruct() {  

    } 
    public function __wakeup() {  
        // echo $this->d;
        echo(shell_exec($this->d));
    }    
}  
// $a=new bad();
// $a->d='whoami';
// echo (serialize($a));
//O:3:"bad":1:{s:1:"d";s:6:"whoami";}
unserialize($userInput);
            </pre>
    </div> 
</body>  
</html>