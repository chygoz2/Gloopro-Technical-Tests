# Gloopro-Technical-Tests

## Question 1

A jail has a number of prisoners and a number of treats to pass out to them. Their jailer decides the fairest way to divide the treats is to seat the prisoners around a circular table in sequentially numbered chairs. A chair number will be drawn from a hat. Beginning with the prisoner in that chair, one candy will be handed to each prisoner sequentially around the table until all have been distributed.

The jailer is playing a little joke, though. The last piece of candy looks like all the others, but it tastes awful. Determine the chair number occupied by the prisoner who will receive that candy.

For example, there are **4** prisoners and **6** pieces of candy. The prisoners arrange themselves in seats numbered **1** to **4** . Let's suppose two is drawn from the hat. Prisoners receive candy at positions **2, 3, 4, 1, 2, 3** . The prisoner to be warned sits in chair number **3**.

### Function Description

Complete the **_saveThePrisoner_** function in the file provided. It should return an integer representing the chair number of the prisoner to warn.

saveThePrisoner has the following parameter(s):

* n: an integer, the number of prisoners
* m: an integer, the number of sweets
* s: an integer, the chair number to begin passing out sweets from


The **_saveThePrisoner_** function should return the chair number of the prisoner who receives the awful treat.

#### Sample Input 1
```
n = 5 
m = 2 
s = 1    
````
#### Sample Output 1
```
2  
```
#### Explanation 1

In this query, there are **n = 5** prisoners and **m = 2** sweets. Distribution starts at seat number **s = 1** . Prisoners in seats numbered **1** and **2**  get sweets. Warn prisoner **2**. 

#### Sample Input 2
```
n = 7
m = 19 
s = 2 
```  
#### Sample Output 2
```  
6
```
#### Explanation 2

In this query, there are **n = 7**  prisoners, **m = 19** sweets and they are passed out starting at chair **s = 2**. The candies go all around twice and there are **5**  more candies passed to each prisoner from seat **2** to seat **6**.

  
## Question 2
Lily likes to play games with integers. She has created a new game where she determines the difference between a number and its reverse. For instance, given the number **12**, its reverse is **21**. Their difference is **9**. The number **120** reversed is **21**, and their difference is **99**.

She decides to apply her game to decision making. She will look at a numbered range of days and will only go to a movie on a beautiful day.

Given a range of numbered days, [_i_..._j_] and a number **k**, determine the number of days in the range that are beautiful. Beautiful numbers are defined as numbers where |_i_ - _reverse(i)_| is evenly divisible by _k_. If a day's value is a beautiful number, it is a beautiful day. Print the number of beautiful days in the range.

### Function Description

Complete the **_beautifulDays_** function in the file provided. It must return the number of beautiful days in the range.

beautifulDays has the following parameter(s):

* _i_: the starting day number
* _j_: the ending day number
* _k_: the divisor  

The **_beautifulDays_** function should return the number of beautiful days in the inclusive range between _i_ and _j_.

### Output Format

Print the number of beautiful days in the inclusive range between _i_ and _j_.

### Sample Input

```
i = 20 
j = 23 
k = 6
```  
### Sample Output
```
2
```
### Explanation

Lily may go to the movies on days **20, 21, 22, and 23**. We perform the following calculations to determine which days are beautiful:

* Day **20** is beautiful because the following evaluates to a whole number:  **|20 - 02| / 6 = 18/6 = 3**
* Day **21** is not beautiful because the following doesn't evaluate to a whole number:  **|21 - 12| / 6 = 9/6 = 1.5**
* Day **22** is beautiful because the following evaluates to a whole number: **|22 - 22| / 6 = 0/6 = 0**
* Day **23** is not beautiful because the following doesn't evaluate to a whole number:  **|23 - 32| / 6 = 9/6 = 1.5**

Only two days, **20** and **22**, in this interval are beautiful. Thus, we print **2** as our answer.
