window.addEventListener('load', function(){
    const html = document.documentElement;
    const pageHeight = html.scrollHeight;
    const viewHeight = html.clientHeight;

    if (pageHeight == viewHeight) {
        document.querySelector('footer').style.position = 'absolute';
        document.querySelector('footer').style.bottom = 0; 
    }
});

