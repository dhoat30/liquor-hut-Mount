import '../style.css';
let $ = jQuery;
import ProductCarousel from './module/ProductCarousel';


$('.special-page-nav .nav-item').on('click', (e) => {
    $('.special-page-nav .nav-item a').removeClass('active');
    $(e.target).addClass('active');
})

$('.product_info a').on('click', (e) => {
        e.preventDefault();
    })
    //change store button 
$('.change-store-btn').on('click', (e) => {
    e.preventDefault();
    $('.overlay').show();
})

$('.cancel-btn').on('click', (e) => {
    $('.overlay').hide();
})