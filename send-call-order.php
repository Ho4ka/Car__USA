<?php
    print_r($to);
        $to = 'm.domaretsky@gmail.com,m.fedochunska@gmail.com,car4yousa@gmail.com';
        $subject = 'Підбір машини';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                    <p> Тип машини: '.$_POST['type'].'</p>
                        <p> Марка: '.$_POST['marka'].'</p>
                        <p> Модель: '.$_POST['model'].'</p>
                        <p> Ціна: '.$_POST['price'].'</p>
                        <p> Мінімальний рік: '.$_POST['minYear'].'</p>
                        <p> Максимальний рік: '.$_POST['maxYear'].'</p>
                        <p> Телефон: '.$_POST['phone'].'</p>
                        <p> Імя: '.$_POST['name'].'</p>  
                        <p> Email: '.$_POST['mail'].'</p>

                                        
                    </body>
                </html>'; 
        $headers  = 'Content-type: text/html; charset=utf-8' . "\n"; 
        $headers .= 'From: Отправитель <m.domaretsky@gmail.com>' . "\n";
        $res=mail($to, $subject, $message, $headers); 
        print_r($res);
?>