let TabsBtn = document.getElementsByClassName('nav-link');
let TabsContent = document.getElementsByClassName('tab-pane');

let GetAllTabsElm = Array.from(TabsBtn);
let TabsContent2 = Array.from(TabsContent);

// Set the first tab and content as active initially
TabsBtn[0].classList.add('active');
TabsContent[0].classList.add('active');

GetAllTabsElm.forEach((tabsBtn, index) => {
    tabsBtn.addEventListener('click', function() {
        // Remove 'active' class from all tabs and contents
        GetAllTabsElm.forEach((btn) => {
            btn.classList.remove('active');
        });
        TabsContent2.forEach((contentElm) => {
            contentElm.classList.remove('active');
        });

        // Add 'active' class to the clicked tab and its corresponding content
        this.classList.add('active');
        TabsContent[index].classList.add('active');
    });
});
