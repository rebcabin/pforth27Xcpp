\ Sample Forth Code
\ Author: Brian Beckman
\ Date: Sat May 18 2013

ANEW TASK-FOOTEST001.FTH

: K 0sp ; ( say "k" for "ok" whenever you want to start with a clean stack )

: SQUARE ( n -- n*n , square number )
    DUP *
;

: TEST.SQUARE ( -- )
    CR ." 15 squared = "
    15 SQUARE . CR
;

VARIABLE HIGH-SCORE

: REPORT.SCORE ( score -- , print out highest score )
    DUP CR ." Your score = " . CR
    HIGH-SCORE @ MAX ( calculate the new high score )
    DUP ." Highest score = " . CR
    HIGH-SCORE !
;

: LOWERCASE? 
    DUP 97 >=           ( TODO: want to say CHAR a, but how? )
    1 PICK 122 <=       ( TODO: want to say CHAR z, but how?)
    AND
;

: .L ( flag == , print logical value )
    IF ." TRUE on the stack!"
    ELSE ." FALSE on the stack!"
    THEN
;

: TESTCASE ( n -- , respond appropriately )
    CASE
        0 OF ." Just a zero!" ENDOF
        1 OF ." All is ONE!"  ENDOF
        2 OF WORDS            ENDOF
        DUP . ." Invalid Input!"
    ENDCASE CR
;

: COUNTDOWN ( n -- )
    CR
    BEGIN
        DUP . CR        ( print the number that is on top of the stack )
        1- DUP 0<       ( loop until we go negative                    )
    UNTIL
    .                   ( pop the number that's left on the stack      )
;
    
: SPELL
    ." ba"
    4 0 DO
        ." na"
    LOOP
;

: PLOT# ( n -- )
    0 DO
        [CHAR] - EMIT
    LOOP CR
;

: .ASCII ( end start -- , dump characters )
    DO
        CR I . I EMIT
    LOOP CR
;

: TEST.LEAVE ( -- , show the use of "LEAVE" )
    CR
    100 1
    DO
      I . cr  \ print loop index
      I 20 >= \ is I 20 or more?
      IF
        LEAVE
      THEN
    LOOP
    CR
;

: TEST.+LOOP ( -- , show the use of "+LOOP" )
    CR
    100 1
    DO
      I . cr  \ print loop index
      I 20 >= \ is I 20 or more?
      IF
        LEAVE
      THEN
    2 +LOOP
    CR
;

: SUM.OF.N ( n -- SUM[n] , sum the integers from 1 through n )
           ( Of course, this is simply DUP 1+ * 2/ :)
    CR
    0                   \ the starting value of the sum
    BEGIN
      OVER 0>           \ Is n > 0?
    WHILE
      OVER +            \ Add current value of n to the sum.
      SWAP 1- SWAP      \ Decrement n.
    REPEAT
    SWAP DROP           \ Get rid of n.
    CR
;

: INPUT$ ( -- $addr , Say "INPUT$ COUNT" to get $addr count. )
    PAD 1+              \ Leave room for the leading byte-count.
    127 ACCEPT          \ Receive a maximum of 127 characters.
    PAD C!              \ Set the byte-count.
    PAD                 \ Return the address of the string.
;

: FORM.LETTER ( -- )
    ." Enter the customer's name: " CR
    INPUT$
    CR ." Dear " DUP COUNT TYPE ." ," CR
    ." Your item engraved " 34 EMIT COUNT TYPE
    34 EMIT
    ."  is in the mail!" CR
;

: .BIN ( n -- , print n in binary )
    BASE @            \ Save the current base.
    2 BASE !          \ Set the current base to binary.
    SWAP .            \ Print and drop the current number.
    BASE !            \ Restore the old base.
;

: .IN.BASE ( n b -- , print n in base b; restore old base )
    BASE @            \ Save the current base.
    SWAP BASE !       \ Set the current base to the one specified.
    SWAP .            \ Print and drop the current number.
    BASE !            \ Restore the old base.
;
    
\ Try this: 100 0 DO I 72 .IN.BASE LOOP
\ Then, if you're adventurous, do this:
\ 72 72 * 1+ 0 DO I 72 .IN.BASE LOOP

