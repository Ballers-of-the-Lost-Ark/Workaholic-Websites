if (window.location.pathname == '/') {
    Array.from(document.querySelectorAll('.card-service')).forEach(function(card){
        card.addEventListener('click', function(){
            //window.location.href = "http://workaholic.test/services";
           window.location.href = "https://workaholic-websites.com/services";
        });
    });
}