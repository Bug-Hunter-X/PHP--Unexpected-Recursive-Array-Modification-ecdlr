# PHP: Unexpected Recursive Array Modification
This example demonstrates a common issue in PHP when recursively processing nested arrays using `foreach` and modifying the array within the loop. The standard `foreach` iteration does not work well in scenarios where the array's structure needs to be altered during iteration. This leads to unexpected results.

The problem is specifically exhibited when modifying the array while iterating over it. The index of the array is not updated accurately when you recursively call `processData`, leading to unexpected results. This is a classic example of modifying a collection while iterating through it, resulting in unpredictable behavior.

The solution introduces a more robust approach, building a new array instead of directly modifying the input.