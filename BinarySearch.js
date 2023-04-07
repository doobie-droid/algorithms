//This is the binary search algorithm implemented in JavaScript

const array1 = [1, 4, 5, 6, 7, 8, 10];

function BinarySearch(arr, value) {
  let start = 0;
  let end = arr.length - 1;

  while (start <= end) {
    let middle = Math.floor((start + end) / 2);

    //check if the number there equals the number you are looking for
    if (arr[middle] == value) {
      return middle;
    } else if (arr[middle] < value) {
      start = middle + 1; //move the starting position by one step
    } else {
      end = middle - 1; //move the ending position backward by one step
    }
  }

  return "not available";
}

console.log(BinarySearch(array1, 1));
