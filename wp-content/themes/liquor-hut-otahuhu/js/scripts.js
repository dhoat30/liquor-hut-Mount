import '../style.css';
let $ = jQuery; 
import ProductCarousel from './module/ProductCarousel';

const productCarousel = new ProductCarousel(); 

  
import isotope from 'isotope-layout';



$('.special-page-nav .nav-item').on('click', (e)=>{
    $('.special-page-nav .nav-item a').removeClass('active');
    $(e.target).addClass('active');
})
