let cent = 47;
let coins = [25, 10, 1, 5];

let sorted = coins.sort((a, b) => a - b).reverse();

function min_coins() {
  let num_of_coins = 0;

  for (const coin of coins) {
    if (cent == 0) {
      return num_of_coins;
    }

    let rem = cent - coin;
    cent = rem;
    num_of_coins++;

    console.log(cent);
  }

  return num_of_coins;
}

console.log(min_coins());
