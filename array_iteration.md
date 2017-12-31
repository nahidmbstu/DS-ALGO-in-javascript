forEach:

callback answers: here’s an item. do something nutty with it, i don't care what.
callback gets these arguments: item, index, list
final return value: nothing - in other words, undefined
example use case:
[1, 2, 3].forEach(function (item, index) {
  console.log(item, index);
});

map:

callback answers: here’s an item. what should i put in the new list in its place?
callback gets these arguments: item, index, list
final return value: list of new items
example use case:
const three = [1, 2, 3];
const doubled = three.map(function (item) {
  return item * 2;
});
console.log(three === doubled, doubled); // false, [2, 4, 6]
filter:

callback is a predicate - it should return a truthy or falsy value
callback answers: should i keep this item?
callback gets these arguments: item, index, list
final return value: list of kept items
example use case:
const ints = [1, 2, 3];
const evens = ints.filter(function (item) {
  return item % 2 === 0;
});
console.log(ints === evens, evens); // false, [2]
reduce:

callback answers: here’s the result from the previous iteration. what should i pass to the next iteration?
callback gets these arguments: result, item, index, list
final return value: result of last iteration
example use case:
// NOTE: `reduce` and `reduceRight` take an optional "initialValue" argument, after the reducer callback.
// if omitted, it will default to the first item.
const sum = [1, 2, 3].reduce(function (result, item) {
  return result + item;
}, 0); // if the `0` is omitted, `1` will be the first `result`, and `2` will be the first `item`
reduceRight: (same as reduce, but in reversed order: last-to-first)

some:

callback is a predicate - it should return a truthy or falsy value
callback answers: does this item meet your criteria?
callback gets these arguments: item, index, list
final return value: true after the first item that meets your criteria, else false
note: stops iterating once it receives a truthy value from your callback.
example use case:
const hasNegativeNumbers = [1, 2, 3, -1, 4].some(function (item) {
  return item < 0;
});
console.log(hasNegativeNumbers); // true
every:

callback is a predicate - it should return a truthy or falsy value
callback answers: does this item meet your criteria?
callback gets these arguments: item, index, list
final return value: false after the first item that failed to meet your criteria, else true
note: stops iterating once it receives a falsy value from your callback.
example use case:
const allPositiveNumbers = [1, 2, 3].every(function (item) {
  return item > 0;
});
console.log(allPositiveNumbers); // true
find:

callback is a predicate - it should return a truthy or falsy value
callback answers: is this item what you’re looking for?
callback gets these arguments: item, index, list
final return value: the item you’re looking for, or undefined
note: stops iterating once it receives a truthy value from your callback.
example use case:
const objects = [{ id: 'a' }, { id: 'b' }, { id: 'c' }];
const found = objects.find(function (item) {
  return item.id === 'b';
});
console.log(found === objects[1]); // true
findIndex:

callback is a predicate - it should return a truthy or falsy value
callback answers: is this item what you’re looking for?
callback gets these arguments: item, index, list
final return value: the index of the item you’re looking for, or -1
note: stops iterating once it receives a truthy value from your callback.
example use case:
const objects = [{ id: 'a' }, { id: 'b' }, { id: 'c' }];
const foundIndex = objects.findIndex(function (item) {
  return item.id === 'b';
});
console.log(foundIndex === 1); // true
