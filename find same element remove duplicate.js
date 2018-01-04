var a = [1,2,3,4,5,6,5,6,7,8,7,9]

var b=  [2,6,2,5,2,8,4,84,58,778,874,874,8,4,8,6,8]

var c = []

for (var i= 1 ; i<=a.length-1; i++)
{
    for (var j= 1 ; j<=b.length; j++)
{  
       if (a[i]== b[j])
       
       { 
         c.push(b[j]);    
      
       }

}

}

c = c.filter (function (value, index, array) { 
    return array.indexOf (value) == index;
});


console.log(c);
