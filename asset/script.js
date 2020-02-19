var M = document.getElementById('menu');
var S = document.getElementById('se');
M.addEventListener('click', () => {
    S.classList.toggle('Hide');
    // if (S.style.left == 0) {
    //     S.classList.add('Hide');
    //     S.classList.remove('Show');
    // } else {
    //     S.classList.remove('Hide');
    //     S.classList.add('Show');
    // }
});