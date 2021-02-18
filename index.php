<!DOCTYPE html>
<html lang="en">
<head> 
<style>
    
</style>

</head>
<body style="background-color:#D3D3D3;">
    <h1 style="color:red; text-align:center;">ONLINE PHP QUIZ</h1>
    <?php
    $quiz = array(
        "1. What does HTML stand for?" => array(
            'op1' => "Home Tool Markup Language",
            'op2' => "Hyperlinks and Text Markup Language",
            'op3' => "Hyper Text Markup Language",
            'op4' => "Hyper Text Manipulation Language",
            "correct" =>"op1",
        ),

        "2. What does PHP stand for?" => array(
            'op1' => "Home Tool Markup Language",
            'op2' => "Hyperlinks and Text Markup Language",
            'op3' => "Hypertext Preprocessor",
            'op4' => "Hyper Text Manipulation Language",
            "correct" =>"op3",
        ),

        "3. Which of the following type of variables are floating-point numbers, like 3.14159 or 49.1?" => array(
            'op1' => "Integers",
            'op2' => "Double",
            'op3' => "Booleans",
            'op4' => "Strings",
            "correct" =>"op2",
        ),

        "4. Which of the following magic constant of PHP returns class name?" => array(
            'op1' => "_Line_",
            'op2' => "_File_",
            'op3' => "_Function_",
            'op4' => "_Class_",
            "correct" =>"op4",
        ),

        "5. Which of the following function can be used to get an array in the reverse order?" => array(
            'op1' => "array_reverse",
            'op2' => "array_search",
            'op3' => "array_shift",
            'op4' => "array_slice",
            "correct" =>"op1",
        ),

        "6. Which of the following function is used to read the content of a file?" => array(
            'op1' => "fopen",
            'op2' => "fread",
            'op3' => "filesize",
            'op4' => "file_exist",
            "correct" =>"op1",
        ),
        
        "7. What does PHP stands for?" => array(
            'op1' => "Personal Hypertext Preprocessor",
            'op2' => "PHP: Hypertext PreProcessor",
            'op3' => "Hyper Text Markup Language",
            'op4' => "Hyper Text Manipulation Language",
            "correct" =>"op2",
    ),

        "8. Which of the following function is used to get the size of a file?" => array(
            'op1' => "Home Tool Markup Language",
            'op2' => "Hyperlinks and Text Markup Language",
            'op3' => "Hyper Text Markup Language",
            'op4' => "Hyper Text Manipulation Language",
            "correct" =>"op3",
        ),

        "9. How do you write 'Hello World' in PHP?" => array(
            'op1' => "Hello world;",
            'op2' => "echo Hello world;",
            'op3' => "Document.write('Hello world';)",
            'op4' => "None",
            "correct" =>"op2",
        ),

        "10. Which of the following method connect a MySql database using PHP?" => array(
            'op1' => "mysql_connect()",
            'op2' => "mysql_query()",
            'op3' => "mysql_close()",
            'op4' => "None",
            "correct" =>"op1",
        ),
       
        );

        $a = 1;
        echo "<form method = 'POST' action = 'index.php'>";
        foreach($quiz as $question => $answers) {
        echo "<h3> $question</h3>";
        foreach($answers as $index => $answer) {
            if($index !="correct")
                echo "<input type='radio' name = 'option".($a)."' value = '".$index."'>".$answer."<br/>";
                     
        }
        $a++;
        
    }

        echo "<br><br>";
        echo '<input type="submit" name="btnSubmit" value="Submit Answers">&nbsp <button type="reset" value ="Clear Answers"><a href="index.php" style="text-decoration:none; color:black">Clear Answers</button>';
        echo "</form>";

        if(isset($_POST["btnSubmit"]))
        {
            $i = 1;
            $result = 0;
            foreach($quiz as $question => $answers)
            {
            if(isset($_POST['option'.$i]))
                if($_POST['option'.$i] == $answers['correct'])
                {
                    $result++;
                }
                $i++;
        }
            echo '<h1 style="color:red; text-align:center;">Your Score Is: '.$result.'</h1>';
        }
        
        
    
        
?>
</body>
</html>

