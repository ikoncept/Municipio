export default class Fab{
    showOnScroll(){

        
        let fabs = document.getElementsByClassName("c-fab--show-on-scroll");
      

        Array.prototype.forEach.call(fabs, fab => {
            if(window.scrollY  >= 150){
                fab.classList.remove('u-visibility--hidden');
            }

            fab.addEventListener('click', (event) =>{
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });

        window.addEventListener('scroll', function(event) {
            fabs.forEach(fab => {
                
                if(this.window.scrollY  >= 150){
                    fab.classList.remove('u-visibility--hidden')
                    console.log(fab)
                }else{
                    fab.classList.add('u-visibility--hidden')
                }
                
            });
        });
    }
}