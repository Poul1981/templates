console.log('surprise');
document.querySelectorAll('ul li')[2].style.color = 'brown';

document.querySelectorAll('ul li').forEach(
        item => item.addEventListener('click', () => {
            console.log(item.textContent);
            item.textContent = item.textContent.toUpperCase();
        })
)
