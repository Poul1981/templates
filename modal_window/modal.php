<?php
echo $page = '
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 5 демонстрационная страница</title>
        <!-- Подключение CSS файла bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- Далее может идти подключение любого другого CSS файла сайта -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Привет мир!</h1>
        </div>
        
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Нажми на меня
        </button>
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Модальное окно</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Все работает! Модальное окно открылось!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="container">
            <img src="img/zimorodok-1.jpg" class="img img-fluid img-thumbnail" alt="bird">
            <img src="img/zimorodok-1.jpg" class="img img-fluid img-thumbnail" alt="bird">
            <img src="img/zimorodok-1.jpg" class="img img-fluid img-thumbnail" alt="bird">
            <img src="img/zimorodok-1.jpg" class="img img-fluid img-thumbnail" alt="bird">
            <img src="img/zimorodok-1.jpg" class="img img-fluid img-thumbnail" alt="bird">
        </div>
        <!--carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/zimorodok-1.jpg" class="d-block w-100 img img-fluid img-thumbnail" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/ice.jpg" class="d-block w-100 img img-fluid img-thumbnail" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/dog.jpeg" class="d-block w-100 img img-fluid img-thumbnail" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
        <!--carousel end-->
        
            
            
            
            
    <!-- Подключение JS файла bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>    
    </body>
</html>
';