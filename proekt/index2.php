<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Тестирование</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method='_GET'>
            <div>
                <h4>1.Сколько лет Феде?</h4>
                <label><input type="radio" name="answer[2]" value="Верно">17</label><br>
                <label><input type="radio" name="answer[2]" value="Неверно">18</label><br>
                <label><input type="radio" name="answer[2]" value="Неверно">19</label><br>
            </div>

            <div>
                <h4>2.Сколько лет Кирилу?</h4>
                <label><input name="answer[0]" type="radio" value="Верно">17</label><br>
                <label><input name="answer[0]" type="radio" value="Неверно">18<label><br>
                <label><input name="answer[0]" type="radio" value="Неверно">19</label>
            </div>

            <div>
                <h4>3.В каком мы щас городе?</h4>
                <label><input name="answer[1]" type="checkbox" value="Верно">Копейск</label> 
                <label><input name="answer[1]" type="checkbox" value="Неверно">Челябинск</label> 
                <label><input name="answer[1]" type="checkbox" value="Неверно">Екатеринбург</label>
                <label><input name="answer[1]" type="checkbox" value="Неверно">Питер</label>
            </div>
            <input type='submit' name="Submit" value='Отправить'>
        </form>

        <?php
            $a=0;
            if (is_array($_GET['answer'])){
            foreach($_GET['answer'] as $value) 
                    {
                    if ($value=='Верно') { 
                    $a=$a+1;
                    }
                    echo $value, '<br>'; 
                    }
            echo "У вас {$a} правильных ответов", '<br>'; 
                }
        ?>
        <a href="index.php"> 231</a>
    </body>
</html>