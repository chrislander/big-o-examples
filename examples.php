<?php

class bigOExamples {
    
    /* Big O notation describes the performance or complexity of an algorithm. 
     * It describes the worst-case scenario, in terms of execution time or space used.  
     */

    // O(1) Example: Always executes in same amount of time regardless of input (list) size
    public static function isFirstElementNull($list) {
        return $list[0] == null;
    }

    /* O(N) Example: describes an algorithm whose performance will grow linearly and in direct proportion to the size of the input data set. 
     * Note that the worst case is assumed (i.e it never returns true and thus every value in the array is looped through);
     */

    public static function elementContainsStr($list) {
        foreach ($list as $key => $value) {
            if (is_int($value)) return true;
        }
        return false;
    }

    // O(N^2) Example: Performance is directly proportional to the square size of the input data.
    // Further nested iterations would result in O(N^3), O(N^4), O(N^5).

    public static function containsDuplicates($list) {
        for ($i = 0; count($i); $i++) {
            for ($j = 0; count($j); $j++) {

                // Don't compare with self
                if ($i === $j) continue;

                if ($list[$i] === $list[$j]) return true;
            }
        }
        return false;
    }
    
    /* O(2N) Example: Growth doubles with each addition to input data set. Growth curve is exponential and rises meteorically.
     * Fibonacci numbers are a series of numbers where each number is the sum of the previous 2 numbers; 
     */            
    public static function fib($n){        
        if ($n <= 1) return $n;        
        else return self::fib($n - 2) + self::fib($n - 1);
    }        
        
    // O(Log N) Examplee: Binary Search 
    /* Binary search is a technique used to search sorted data sets. 
     * It works by selecting the middle element of the data set, essentially the median, and compares it against a target value. 
     * If the values match it will return success. 
     * If the target value is higher than the value of the probe element it will take the upper half of the data set and perform the same operation against it. 
     * Likewise, if the target value is lower than the value of the probe element it will perform the operation against the lower half. 
     * It will continue to halve the data set with each iteration until the value has been found or until it can no longer split the data set.
     *  This type of algorithm is described as O(log N). 
     * The iterative halving of data sets described in the binary search example produces a growth curve that peaks at the beginning and slowly flattens out as the size of the data sets increase 
     * e.g. an input data set containing 10 items takes one second to complete, a data set containing 100 items takes two seconds, and a data set containing 1000 items will take three seconds. 
     * Doubling the size of the input data set has little effect on its growth as after a single iteration of the algorithm the data set will be halved and therefore on a par with an input data set half the size. 
     * This makes algorithms like binary search extremely efficient when dealing with large data sets.    
     */

}
