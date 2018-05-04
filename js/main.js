$("#man-form").submit(function() {
    //устанавливаем событие отправки для формы с id=form
    var form_data = $(this).serialize(); //собераем все данные из формы
    $.ajax({
        type: "POST", //Метод отправки
        url: "send-call-order.php", //путь до php фаила отправителя
        data: form_data,
        // error: function() {
        //     alert('Не надіслано!!!!!!!')
        // },
        success: function() {
            console.log("sent");
        }
    });
    return false;
});

