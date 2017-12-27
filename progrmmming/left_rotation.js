var a = [1,2,3,4,5];
var rotation = 4;
var cut = a.splice(0, rotation);

Array.prototype.push.apply(a, cut);
///var insert= a.concat(cut); 

for(var i = 0 ; i<= a.length-1; i++)
{
     console.log(a[i]);

}
