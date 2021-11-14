console.log("in java");
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLenght = menuItem.length;

for(let i=0 ; i < menuLenght ; i++){
    console.log(currentLocation);
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "nav-link active";
    }
}

