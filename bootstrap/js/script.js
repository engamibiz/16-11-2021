$(document).scroll(function(){
    if($(window).scrollTop() > 50) {
    $('header').addClass('bg-white')
}else{
    $('header').removeClass('bg-white')
}
})

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function(){
    setTimeout(function(){
        $(".cartIcon").css({left:"20px",
        transform:"rotate(360deg)"})
    },1000)
    setTimeout(function(){
        $(".cartIcon .badge").show(300)
    },1500)
})


$(".cartIcon").click(function(){
    $(".cartBox").toggle(500);
})
let products = []
$(".item .btn-primary").click(function(){
    let title=$(this).siblings(".card-title").html()
    let price=$(this).attr('data-price')
    let img=$(this).attr('data-img')
    let product={title:title,price:price,img:img}
    products.push(product)
    $('.cartBody .container-fluid').html("")
    $.each(products ,function (index , pro){
        $('.cartBody .container-fluid').append(
       '<div class="row"> ' +
       '<div class="col-2"> ' +
       '<img src="'+ pro.img + '" width="40"> ' +
       '</div> ' +
       '<div class="col-4">'+
                pro.title+
            '</div>'+
            '<div class="col-2">2x</div>'+
            '<div class="col-2">'+ pro.price+'</div>'+
            '<div class="col-2">2000</div>'+
        '</div>'
        )
    })

})