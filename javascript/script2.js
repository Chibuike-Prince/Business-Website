var menu_icon = document.getElementById("hamburger_menu");
menu_items = menu_icon.addEventListener("click", function(){
    var menu_items_wrapper = document.getElementById("media_menu_items");
    menu_items_wrapper.classList.toggle("display");
})