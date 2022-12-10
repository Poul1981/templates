<?php

//echo 'test<br>';
//echo pi().'<br>';
echo '<button class="btn btn-primary" data-bs-toggle="modal" id="button-modal" data-bs-target="#modal">
            Открыть модальное окно
    </button>';
$mas1 =  range(1, 10);
//echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">';

echo '<!-- Bootstrap CSS (jsDelivr CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

echo '<link rel="stylesheet" href="mystyle.css">';

echo "<div class='container'>";
    foreach ($mas1 as $key => $el){
        echo "<div>
                  $el <button class='btn btn-info' id=$key>Клик</button>
              </div>";
    }
echo '</div>';

$modal = '
            <div class="modal fade" id="modal" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Внимание!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    А роза упала на лапу азора<br>
                    А роза упала на лапу азора<br>
                    А роза упала на лапу азора<br>
                    А роза упала на лапу азора<br>
                  </div>
                </div>
              </div>
           </div>';
echo $modal;

echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                console.log('load');
                // получим кнопку id='btn' с помощью которой будем открывать модальное окно
                const btn = document.querySelectorAll('.btn');
                console.log(btn);
                // активируем контент id='modal' как модальное окно
                const modal = new bootstrap.Modal(document.querySelector('#modal'));
                // при нажатии на кнопку
                
                btn.forEach(item => {
                    if (item.id !== 'button-modal'){
                        item.addEventListener('click', function() {
                            // открываем модальное окно
                            item.innerHTML = 'Go';
                            //alert(item.id);
                            //modal.show();
                        })
                    }
                });
            });
        </script>
    ";
