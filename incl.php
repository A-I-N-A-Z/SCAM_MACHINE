<?php
    $arr = [];
    setcookie("lol", counter());
    function counter() {
        if(isset($_COOKIE["lol"])){
            $_COOKIE["lol"]++;
        } else{
            $_COOKIE["lol"] = 1;
        };
        return $_COOKIE["lol"];
    };
    $arr[$_SERVER["REMOTE_ADDR"]] = $_COOKIE["lol"];
    foreach($arr as $index => $val){
        $str = $index . " : " . $val . "; 
";
    }
    file_put_contents("content.txt", file_get_contents("content.txt") . $str);
    header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
?>