

let url = "https://api.weatherapi.com/v1/forecast.json?key=fcfabfa587014e258b1180152222307&q=Belgorod&days=3&aqi=no&alerts=no";
function getRequest() {
    fetch(url).then(response => {
        if (response.ok) {
            response.json().then(data => {
                console.log(data);
                document.querySelector('.result').innerHTML = `Температура воздуха - ${data['current']['temp_c']}
                Регион - ${data['location']['name']}
                Облачность - ${data['current']['condition']['text']}`;
            });
        }
    }).catch(error => console.log(error));
}
document.querySelector("button").addEventListener('click', getRequest);
let p_bar = document.querySelector('.progress-bar');
console.log(p_bar.value);
p_bar.addEventListener('change', () => alert(p_bar.value));

//JQURY
$(function (){
    $('.btn').on('click', function(){
        alert('surprise!');
        // day = $('.inputdate').getDate();
        // month = $('.inputdate').getMonth() + 1;
        // year = $('.inputdate').getFullYear();
        // alert(day, month, year);
    });

    $('.mybtn').on('click', function (){
        // alert($(this).data('id'));
        console.log($(this)[0].id);
        console.log($(this).attr('id'));
        if ($(this)[0].innerHTML !== "Print"){
            $(this)[0].innerHTML = "Print";
        } else $(this)[0].innerHTML = "Добавить";
        console.log($(this));
        //alert($(this)[0].id);
    })

    $('.progress-bar').on('change', function (){
        console.log('change');
        console.log($(this)[0].value);
    })

})
