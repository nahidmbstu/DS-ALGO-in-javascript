var arr = [1, 3, 2, 4, 7, 5];
var len = arr.length;

// console.log(len)

var temp;

function bubble(arr) {
  for (var i = 0; i < len; i++) {
    if (arr[i] > arr[i + 1]) {
      temp = arr[i];
      arr[i] = arr[i + 1];
      arr[i + 1] = temp;
    }
  }

  console.log(arr);
}

bubble(arr);
