let $ = jQuery; 

class ProductCarousel{
    constructor(){
        this.events(); 
    }
    events(){
        $(document).on('click', '.ex-product-nav .nav-item a', this.navClick);
    }
    navClick(e){
        console.log(e); 
       
        let clickID = e.target.id;
        $('.ex-product-nav .nav-item a').removeClass('active');
        $(e.target).addClass('active');
        //$(e.target).addClass('active');
        console.log(clickID)
        if(clickID == 'special-tab'){
            $('.tab-pane').removeClass('active');
            $('.tab-pane').removeClass('show');
            $('#special').addClass('active show'); 
             
        }
        if(clickID == 'sellers-tab'){
            $('.tab-pane').removeClass('active');
            $('.tab-pane').removeClass('show');

            $('#sellers').addClass('active show'); 
          
        }
        else if(clickID == 'featured-tab'){
            $('.tab-pane').removeClass('active');
             $('.tab-pane').removeClass('show');
            $('#featured').addClass('active show'); 
        }
     
        
       
    }
}

export default ProductCarousel;