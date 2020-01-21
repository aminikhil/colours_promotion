$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#theTarget').position().top){
        document.getElementById('theTarget').classList.add("come-in");
    }
})
