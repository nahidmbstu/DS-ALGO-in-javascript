function remove_duplicates(arr) {
    
    var obj = {};
    var ret_arr = [];
    for (var i = 0; i < arr.length; i++) {
        obj[arr[i]] = true;
    }
    console.log(obj);
    console.log(arr);
    
     for (var key in obj) {
        console.log(key);
        ret_arr.push(key);
    }
      console.log(ret_arr);
}

remove_duplicates([1,3,2,2,3,4,5,78])