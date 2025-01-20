# PHP unset() in foreach Loop: Unexpected Behavior

This repository demonstrates an uncommon error in PHP related to the `unset()` function within a `foreach` loop.  When using `unset()` to remove elements from an array while iterating over it, the behavior is not always intuitive.  The provided `bug.php` shows this unexpected behavior, while `bugSolution.php` provides a corrected approach.

## Bug Description:

In PHP, when you use `unset()` to remove an element from an array during a `foreach` loop, the loop's internal pointer may skip elements, leading to unexpected omissions.  This is because the array's internal structure is modified.

## Solution:

The solution involves iterating over a copy of the array or using a different approach, such as `array_filter()`.
