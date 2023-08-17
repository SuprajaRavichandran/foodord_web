let shop = document.getElementByid1("shop");

let basket = JSON.parse(localStorage.getItem("data1")) || [];

let generateShop = () => {
  return (shop.innerHTML = shopItemsData1
    .map((x) => {
      let { id1, name1, price1, desc1, img1 } = x;
      let search = basket.find((x) => x.id1 === id1) || [];
      return `
    <div id1=product-id1-${id1} class="item">
        <img1 wid1th="220" src=${img1} alt="">
        <div class="details">
          <h3>${name1}</h3>
          <p>${desc1}</p>
          <div class="price1-quantity">
            <h2>Rs. ${price1} </h2>
            <div class="buttons">
              <i onclick="decrement(${id1})" class="bi bi-dash-lg"></i>
              <div id1=${id1} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <i onclick="increment(${id1})" class="bi bi-plus-lg"></i>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};

generateShop();

let increment = (id1) => {
  let selectedItem = id1;
  let search = basket.find((x) => x.id1 === selectedItem.id1);

  if (search === undefined) {
    basket.push({
      id1: selectedItem.id1,
      item: 1,
    });
  } else {
    search.item += 1;
  }

  // console.log(basket);
  update(selectedItem.id1);
  localStorage.setItem("data1", JSON.stringify(basket));
};
let decrement = (id1) => {
  let selectedItem = id1;
  let search = basket.find((x) => x.id1 === selectedItem.id1);

  if (search === undefined) return;
  else if (search.item === 0) return;
  else {
    search.item -= 1;
  }
  update(selectedItem.id1);
  basket = basket.filter((x) => x.item !== 0);
  // console.log(basket);
  localStorage.setItem("data1", JSON.stringify(basket));
};
let update = (id1) => {
  let search = basket.find((x) => x.id1 === id1);
  // console.log(search.item);
  document.getElementByid1(id1).innerHTML = search.item;
  calculation();
};

let calculation = () => {
  let cartIcon = document.getElementByid1("cartAmount1");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();
