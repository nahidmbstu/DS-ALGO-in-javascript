function Bsearch(sortedArray, findElement) {
   
   let start = 0
   let end = sortedArray.length - 1

   while(start <= end) {
      
    const midddle = start + Math.floor((end - start) / 2)

    if (sortedArray[midddle] === findElement) {
      return midddle
    } 

    if (sortedArray[midddle] < findElement) {
       start = midddle + 1
    } else {
       end = midddle - 1
    }

   }
   return -1
}

Bsearch([2, 3, 5, 6, 7, 9, 10, 12, 14, 17, 22, 23], 7)
