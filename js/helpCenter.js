
let itemSelected = false;
let lastItemSelected = "";

let sectWithOut = true;
let lastSectSelected = "";
let lastSect = "";


function selectItem(classItemS, numberClass) {
  if (!itemSelected) {
    // console.log(classItemS);
    let item = document.querySelector(classItemS);
    item.classList.add("item-help-selected");
    itemSelected = true;
    lastItemSelected = classItemS;
    showitemsCenterHelp(numberClass);
  } else {
    let lastItem = document.querySelector(lastItemSelected);
    lastItem.classList.remove("item-help-selected");
    showitemsCenterHelp(numberClass);
    
    let item = document.querySelector(classItemS);
    item.classList.add("item-help-selected");
    lastItemSelected = classItemS;
  }
}
function showitemsCenterHelp(numberClass) {
  if(sectWithOut){
    sectWithOut = !sectWithOut;
    document.querySelector('.con-sect-without').style.display = 'none';
    
    let sectClass = document.querySelector(`.acordion-sect:nth-child(${numberClass})`);
    lastSectSelected = sectClass;
    sectClass.classList.add("acordion-sect-selected");
  }else{
    lastSectSelected.classList.remove('acordion-sect-selected')

    let sectClass = document.querySelector(`.acordion-sect:nth-child(${numberClass})`);
    lastSectSelected = sectClass;
    sectClass.classList.add("acordion-sect-selected");
  }
}