
const modal = document.getElementById('id01');
const type = document.getElementById('category');
const price = document.getElementById('price');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const buyBundle = (_type, _price) => {
    type.value = _type;
    price.value = _price;
    modal.style.display = "block"
}