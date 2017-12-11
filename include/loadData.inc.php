<?php

function findFilms()
{
    return array(
        "film1" => array(
            "title" => "Побег из шоушенко",
            "discription" => "Успешный банкир Энди Дюфрейн обвинен в убийстве 
                собственной жены и ее любовника. Оказавшись в тюрьме под названием 
                Шоушенк, он сталкивается с жестокостью и беззаконием, царящими по обе
                стороны решетки.",
            "img" => "content/img/shoushenko.jpg",
            "likeCount" => 100
        ),
        "film2" => array(
            "title" => "Зеленая миля",
            "discription" => "Обвиненный в страшном преступлении, Джон Коффи 
                оказывается в блоке смертников тюрьмы «Холодная гора». Вновь прибывший 
                обладал поразительным ростом и был пугающе спокоен",
            "img" => "content/img/green.jpg",
            "likeCount" => 98
        ),
        "film3" => array(
            "title" => "Форрест Гамп",
            "discription" => "От лица главного героя Форреста Гампа, слабоумного безобидного
            человека с благородным и открытым сердцем, рассказывается история его 
            необыкновенной жизни.",
            "img" => "content/img/gamp.jpg",
            "likeCount" => 150
        ),
        "film4" => array(
            "title" => "Список Шиндлера",
            "discription" => "Фильм рассказывает реальную историю загадочного Оскара 
                Шиндлера, члена нацистской партии, преуспевающего фабриканта, спасшего
                во время Второй мировой войны почти 1200 евреев.",
            "img" => "content/img/list.jpg",
            "likeCount" => 85
        ),
        "film5" => array(
            "title" => "Начало",
            "discription" => "Кобб — талантливый вор, лучший из лучших в опасном искусстве 
                извлечения: он крадет ценные секреты из глубин подсознания во время сна, когда
                человеческий разум наиболее уязвим. Редкие способности Кобба сделали его ценным
                игроком в привычном к предательству мире промышленного шпионажа, но они же превратили 
                его в извечного беглеца и лишили всего, что он когда-либо любил. ",
            "img" => "content/img/Inception.jpg",
            "likeCount" => 109
        ),
        "film6" => array(
            "title" => "Жизнь прекрасна",
            "discription" => "Во время II Мировой войны в Италии в концлагерь были отправлены евреи, 
                отец и его маленький сын. Жена, итальянка, добровольно последовала вслед за ними. В лагере 
                отец сказал сыну, что все происходящее вокруг является очень большой игрой за приз в настоящий 
                танк, который достанется тому мальчику, который сможет не попасться на глаза надзирателям. ",
            "img" => "content/img/live.jpg",
            "likeCount" => 78
        )
    );
}

function loadLinks()
{
    return array(
        "link1" => array(
            "name" => "Главая станица",
            "link" => "index.php"
        ),
        "link2" => array(
            "name" => "ТЗ",
            "link" => "https://vk.cc/7kUpyp"
        ),
        "link3" => array(
            "name" => "Кинопоиск",
            "link" => "https://www.kinopoisk.ru/"
        )
        
        
    );
    
    
}