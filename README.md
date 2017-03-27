# RitUniqueCode
An opensource PHP Library to generate huge amount of professional unique codes.


###Using Procedure:

**Here is an example code:**
```
<?php

    include "rituniquecode.php";

    $uq = new rituniquecode();

    $uq->pushDigits(); // adding the characters set of [0-9]
    $uq->pushUppercase(); // adding the characters set of [A-Z]
    $uq->pushLowercase(); // adding the characters set fo [a-z]
    $uq->setCodeLength(16); // set the length of code to be generated
    $uq->setPrefix("PREF-"); // set prefix sting along with the code
    $uq->setSuffix("-SUFF"); // set suffix string along with the code
    $uq->setSaparator(4,"-"); // set saparator character/string onto its defined code positon
    $uq->setSaparator(8,"-");
    $uq->setSaparator(12,"-");
    $uq->pushExtraCharacters("@*#"); // add extra characters set like @, *, # etc
    $uq->excludeCharacters("0oOl1"); //exclude characters set like 0, o, O, l, 1 etc
    
    echo "<pre>";
    print_r($uq->generateCode(10)); // to print the generated code array
    echo "</pre>";
?>
```

**Output:** 
```
    Array
    (
        [codeLength] => 16
        [stringLength] => 29
        [pssLength] => 13
        [maximumLimit] => 28211099074560000000000000000
        [startValue] => 
        [endValue] => 
        [totalCode] => 10
        [totalCharacter] => 60
        [character] => Array
            (
                [0] => #
                [1] => *
                [2] => 2
                [3] => 3
                [4] => 4
                [5] => 5
                [6] => 6
                [7] => 7
                [8] => 8
                [9] => 9
                [10] => @
                [11] => A
                [12] => B
                [13] => C
                [14] => D
                [15] => E
                [16] => F
                [17] => G
                [18] => H
                [19] => I
                [20] => J
                [21] => K
                [22] => L
                [23] => M
                [24] => N
                [25] => P
                [26] => Q
                [27] => R
                [28] => S
                [29] => T
                [30] => U
                [31] => V
                [32] => W
                [33] => X
                [34] => Y
                [35] => Z
                [36] => a
                [37] => b
                [38] => c
                [39] => d
                [40] => e
                [41] => f
                [42] => g
                [43] => h
                [44] => i
                [45] => j
                [46] => k
                [47] => m
                [48] => n
                [49] => p
                [50] => q
                [51] => r
                [52] => s
                [53] => t
                [54] => u
                [55] => v
                [56] => w
                [57] => x
                [58] => y
                [59] => z
            )
    
        [prefix] => PREF-
        [suffix] => -SUFF
        [saparator] => Array
            (
                [0] => Array
                    (
                        [offset] => 4
                        [string] => -
                    )
    
                [1] => Array
                    (
                        [offset] => 8
                        [string] => -
                    )
    
                [2] => Array
                    (
                        [offset] => 12
                        [string] => -
                    )
    
            )
    
        [code] => Array
            (
                [0] => PREF-#qgE-BeXn-@8R2-W6jc-SUFF
                [1] => PREF-*fNU-PK7a-JFu5-4CVF-SUFF
                [2] => PREF-2W6j-c*fN-UPK7-aJFu-SUFF
                [3] => PREF-3Lp#-qgEB-eXn@-8R2W-SUFF
                [4] => PREF-4CVF-3Lp#-qgEB-eXn@-SUFF
                [5] => PREF-54CV-F3Lp-#qgE-BeXn-SUFF
                [6] => PREF-5uvk-Shwb-@z9G-imIQ-SUFF
                [7] => PREF-6jc*-fNUP-K7aJ-Fu54-SUFF
                [8] => PREF-7aJF-u54C-VF3L-p#qg-SUFF
                [9] => PREF-8R2W-6jc*-fNUP-K7aJ-SUFF
            )
    
    )
```


###List of public methods:

- `void pushDigits( void )`
- `void pushUppercase( void )`
- `void pushLowercase( void )` 
- `void pushExtraCharacters( string $string )` 
- `void excludeCharacters( string $string )`
- `array getTotalCharacter( void )`
- `string getMaximumLimit( void )`
- `void setCodeLength( int $codeLength )`
- `void setPrefix( string $string )`
- `void setSuffix( string $string )`
- `void setSaparator( int $offset, string $string )`
- `string codeCompose( string $string )`
- `array generateCode( int $quantity [, bool $ordered = false [, string $starter = "-1" ]] )`

###License:

> RitUniqueCode is free php library: you can redistribute it and/or modify it
  under the terms of the MIT License. Please read the LICENSE file for more details.
  
  