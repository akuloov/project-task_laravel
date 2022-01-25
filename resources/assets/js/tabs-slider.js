const tabsBtn = document.querySelectorAll('.main__tab');

tabsBtn.forEach(function(item) {
    item.addEventListener('click', function() {
        let currentBtn = item;
        
        tabsBtn.forEach(function(item) {
            item.classList.remove('tab--active');
        });
        
        currentBtn.classList.add('tab--active');
    });
});