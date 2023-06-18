let TabsContent = document.getElementsByClassName('tab-pane');
let TabsBtn = document.getElementsByClassName('nav-link');
let GetAllTabsElm = Array.from(TabsBtn);
let TabsContent2 = Array.from(TabsContent);
GetAllTabsElm.forEach((tabsBtn, index) => {
    tabsBtn.addEventListener('click', function() {     
        let parentElem = this.closest('.card');
        let TabsContent3 = parentElem.getElementsByClassName('tab-pane');
        let TabsBtn4 = parentElem.getElementsByClassName('nav-link');
        for(val of TabsContent3 ){
         val.classList.remove('active')
        }
        for(val of TabsBtn4 ){
            val.classList.remove('active')
         }
        this.classList.add('active');
        TabsContent2[index].classList.add('active');
    });
});
