\ Sample Forth Code
\ Author: Brian Beckman
\ Date: Sat May 18 2013

ANEW TASK-FOOTEST001.FTH

: SQUARE ( n -- n*n , square number )
    DUP *
;

: TEST.SQUARE ( -- )
    CR ." 15 squared = "
    15 SQUARE . CR
;
