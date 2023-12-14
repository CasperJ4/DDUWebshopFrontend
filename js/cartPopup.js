
function togglePopup() {
    
        adjustCartSize(); // Tilføj denne linje for at justere størrelsen hver gang popup-vinduet åbnes eller lukkes

function adjustCartSize() {
    var itemCount = document.querySelectorAll('.cart-item').length; // Antag at hver vare har klassen 'cart-item'
    var cartPopup = document.getElementById('cartPopup');

    if (itemCount <= 3) {
        cartPopup.classList.add('small');
        cartPopup.classList.remove('medium', 'large');
    } else if (itemCount <= 6) {
        cartPopup.classList.add('medium');
        cartPopup.classList.remove('small', 'large');
    } else {
        cartPopup.classList.add('large');
        cartPopup.classList.remove('small', 'medium');
    }
}
    var popup = document.getElementById("cartPopup");
    popup.style.display = popup.style.display === "none" ? "block" : "none";
}