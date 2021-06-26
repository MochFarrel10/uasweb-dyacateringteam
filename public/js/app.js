function setMenu(itemMenu){
    window.alert("Anda memilih " + itemMenu);
    document.getElementById('select-menu').value = itemMenu;
}

gsap.from("#titleHead", {
    opacity: 0, 
    y: -50, 
    x: 0,
    duration: 2
});
gsap.from("#desc", {
    opacity: 0, 
    y: 50, 
    x: 0,
    duration: 2
});
gsap.from(".btn", {
    opacity: 0, 
    y: 50, 
    x: 0,
    duration: 2
});


if (localStorage.getItem('theme')=='light') {
    setTheme(true);
}

function setTheme(isLight) {
    if(isLight) {
        document.body.setAttribute('id', 'lightMode');
        localStorage.setItem('theme', 'light');
    }else{
        document.body.setAttribute('id', '');
        localStorage.removeItem('theme');
    }
}