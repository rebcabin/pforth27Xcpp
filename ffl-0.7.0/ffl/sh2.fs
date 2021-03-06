\ ==============================================================================
\
\                  sh2 - the SHA-256 module in the ffl
\
\               Copyright (C) 2007  Dick van Oudheusden
\  
\ This library is free software; you can redistribute it and/or
\ modify it under the terms of the GNU General Public
\ License as published by the Free Software Foundation; either
\ version 2 of the License, or (at your option) any later version.
\
\ This library is distributed in the hope that it will be useful,
\ but WITHOUT ANY WARRANTY; without even the implied warranty of
\ MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
\ General Public License for more details.
\
\ You should have received a copy of the GNU General Public
\ License along with this library; if not, write to the Free
\ Software Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
\
\ ==============================================================================
\ 
\  $Date: 2007-12-09 07:23:17 $ $Revision: 1.8 $
\
\ ==============================================================================


include ffl/config.fs


[UNDEFINED] sh2.version [IF]


cell 4 =  1 chars 1 =  AND [IF]

\ Based on the algoritms published in FIPS 180-2 and Wikipedia

include ffl/stc.fs


( sh2 = SHA-256 module )
( The sh2 module implements the SHA-256 algorithm.                           )


1 constant sh2.version


( Private constants )

64 constant sh2.work%        \ Size of work buffer in cells

16 cells char/
   constant sh2.input%       \ Size of input buffer in chars
         
create sh2.k
hex
   428A2F98 , 71374491 , B5C0FBCF , E9B5DBA5 , 3956C25B , 59F111F1 , 923F82A4 , AB1C5ED5 ,
   D807AA98 , 12835B01 , 243185BE , 550C7DC3 , 72BE5D74 , 80DEB1FE , 9BDC06A7 , C19BF174 ,
   E49B69C1 , EFBE4786 , 0FC19DC6 , 240CA1CC , 2DE92C6F , 4A7484AA , 5CB0A9DC , 76F988DA ,
   983E5152 , A831C66D , B00327C8 , BF597FC7 , C6E00BF3 , D5A79147 , 06CA6351 , 14292967 ,
   27B70A85 , 2E1B2138 , 4D2C6DFC , 53380D13 , 650A7354 , 766A0ABB , 81C2C92E , 92722C85 ,
   A2BFE8A1 , A81A664B , C24B8B70 , C76C51A3 , D192E819 , D6990624 , F40E3585 , 106AA070 ,
   19A4C116 , 1E376C08 , 2748774C , 34B0BCB5 , 391C0CB3 , 4ED8AA4A , 5B9CCA4F , 682E6FF3 ,
   748F82EE , 78A5636F , 84C87814 , 8CC70208 , 90BEFFFA , A4506CEB , BEF9A3F7 , C67178F2 ,
decimal


( SHA-256 structure )

begin-structure sh2%   ( -- n = Get the required space for a sha2 variable )
  field:   sh2>h0
  field:   sh2>h1
  field:   sh2>h2
  field:   sh2>h3
  field:   sh2>h4
  field:   sh2>h5
  field:   sh2>h6
  field:   sh2>h7
  field:   sh2>a
  field:   sh2>b
  field:   sh2>c
  field:   sh2>d
  field:   sh2>e
  field:   sh2>f
  field:   sh2>g
  field:   sh2>h
  sh2.work%
  fields:  sh2>work          \ work buffer
  sh2.input%
  cfields: sh2>input         \ input buffer with data
  field:   sh2>length        \ total length of processed data
end-structure


( SHA-256 variable creation, initialisation and cleanup )

: sh2-init   ( sh2 -- = Initialise the sh2 variable )
  [ hex ]
  6A09E667 over sh2>h0 !
  BB67AE85 over sh2>h1 !
  3C6EF372 over sh2>h2 !
  A54FF53A over sh2>h3 !
  510E527F over sh2>h4 !
  9B05688C over sh2>h5 !
  1F83D9AB over sh2>h6 !
  5BE0CD19 over sh2>h7 !
  [ decimal ]
  
  sh2>length 0!
;


: sh2-create   ( "<spaces>name" -- ; -- sh2 = Create a named SHA-256 variable in the dictionary )
  create  here sh2% allot  sh2-init
;


: sh2-new   ( -- sh2 = Create a new SHA-256 variable on the heap )
  sh2% allocate  throw   dup sh2-init
;


: sh2-free   ( sh2 -- = Free the SHA-256 variable from the heap )
  free throw
;


( Private words )

[UNDEFINED] sha! [IF]
  bigendian? [IF]
: sha!             ( x addr -- = Store cell on address, SHA order )
  postpone !
; immediate
: sha@             ( addr -- x = Fetch cell on address, SHA order )
  postpone @
; immediate
  [ELSE]
: sha!
        over 24 rshift 255 and over c!
  char+ over 16 rshift 255 and over c!
  char+ over 8  rshift 255 and over c!
  char+ swap           255 and swap c!
;
: sha@
  dup                  c@ 24 lshift 
  swap char+ swap over c@ 16 lshift or
  swap char+ swap over c@  8 lshift or
  swap char+           c@           or
;
  [THEN]
[THEN]


: sh2-cmove   ( c-addr u sh2 -- n flag = Move characters from the string to the input buffer, update the length, return length and full indication )
  2dup sh2>length @ sh2.input% mod     \ index = sh2>length mod buf-size
  tuck + sh2.input% >= >r >r           \ full  = (index + str-len >= buf-size )
  swap sh2.input% r@ - min             \ copy-len = min(buf-size - index, str-len)
  2dup swap sh2>length +!              \ sh2>length += copy-len
  r> swap >r
  chars swap sh2>input + r@ cmove      \ copy(str->buf,copy-len)
  r> r>
;


: sh2-transform   ( sh2 -- = Transform 64 bytes of data )
  >r
  
  r@ sh2>work
  r@ sh2>input 16 cells bounds DO      \ Move input (bigendian) in work buffer
    I sha@ over !
    cell+
  cell +LOOP                           \ S: sh2>work + 16 cells
     
  48 cells bounds DO                   \ Extend 16 words in work buffer to 64 words in work buffer
    I 16 cells - @                     \ w[i] = w[i-16] + ..
    I 15 cells - @
    dup   7 rroll
    over 18 rroll  xor
    swap 3  rshift xor +               \ .. + (w[i-15] rotr 7) xor (w[i-15] rotr 18) xor (w[i-15] rshift 3) + ..
    I 7  cells - @ +                   \ .. + w[i-7] + ..
    I 2  cells - @
    dup  17 rroll
    over 19 rroll  xor
    swap 10 rshift xor +               \ .. + (w[i-2] rotr 17) xor (w[i-2] rotr 19) xor (w[i-2] rshift 10)
    I !
  cell +LOOP
    
  r@ sh2>h0 r@ sh2>a 
  8 cells char/ move                   \ Initialise hash values: h0..h7 -> a..h
  
  r>
  sh2.work% cells 0 DO
    sh2.k I + @                        \ k[i] + ..
    over sh2>work I + @ +              \ .. + w[i] + ..
    over sh2>h @ +                     \ w[i] + k[i] + h
    
    swap >r                            \ done with I, save sh2
    
    r@ sh2>e @                         \ s1 = (e rotr 6) xor (e rotr 11) xor (e rotr 25)
    dup   6 rroll
    over 11 rroll xor
    over 25 rroll xor
    
    swap                               \ ch = (e and f) xor ((not e) and g)
    dup r@ sh2>f @ and
    swap invert r@ sh2>g @ and xor
    + +                                \ t1 = w[i] + k[i] + h + s1 + ch

    r@ sh2>a @                         \ s0 = (a rotr 2) xor (a rotr 12) xor (a rotr 22)
    dup   2 rroll
    over 13 rroll xor
    over 22 rroll xor
    swap
    
    r@ sh2>b @                         \ maj = (a and b) xor (a and c) xor (b and c)
    2dup
    r@ sh2>c @
    tuck
    and >r and >r and r> xor r> xor
    +                                  \ t2 = s0 + maj
    
    over + r@ sh2>a
    tuck @! swap cell+                 \ a = t1 + t2
    tuck @! swap cell+                 \ b = a
    tuck @! swap cell+                 \ c = b
    tuck @! rot + swap cell+           \ d = c
    tuck @! swap cell+                 \ e = d + t1
    tuck @! swap cell+                 \ f = e
    tuck @! swap cell+                 \ g = f
    !                                  \ h = g
    
    r>
  cell +LOOP
  
  dup sh2>h0
  swap sh2>a 8 cells bounds DO              \ Add hash values to current results
    I @ over +!
    cell+
  cell +LOOP
  drop
;


: sh2+pad   ( n c-addr -- = Pad the buffer c-addr, starting from index n )
  over chars +
  128 over c!                       \ Add 80h to buffer
  char+ 
  swap 1+ sh2.input% swap - chars   \ Pad remaining with zero's
  erase
;


[UNDEFINED] sha+#s [IF]
: sha+#s   ( u -- Put a single SHA result in the hold area )
  0 # # # # # # # # 2drop
;
[THEN]


( SHA-256 words )

: sh2-reset   ( sh2 -- = Reset the SHA-256 state )
  sh2-init
;


: sh2-update   ( c-addr u sh2 -- = Update the SHA-256 with more data c-addr u )
  >r
  BEGIN
    2dup r@ sh2-cmove
  WHILE
    r@ sh2-transform
    /string
  REPEAT
  r> 2drop 2drop
;


: sh2-finish   ( sh2 -- u1 u2 u3 u4 u5 u6 u7 u8 = Finish the SHA-256 calculation, return the result )
  >r
  
  r@ sh2>length @ sh2.input% mod            \ index = sh2>length mod buf-size
  
  dup [ sh2.input% 2 cells - 1 chars - ] literal > IF
    r@ sh2>input sh2+pad                    \ If buffer is too full Then
    r@ sh2-transform                        \   Pad buffer and tranform
    r@ sh2>input sh2.input% chars erase     \   Pad next buffer
  ELSE                                      \ Else
    r@ sh2>input sh2+pad                    \   Pad buffer
  THEN
  
  r@ sh2>length @ #bits/char m*             \ Calculate bit length
  
  [ sh2.input% 2 cells - ] literal chars    \ Index for bit length
  r@ sh2>input +                            \ Buffer location for bit length
  
  tuck sha! cell+ sha!                      \ Store the length
  
  r@ sh2-transform                          \ Transform last buffer
  
  r@ sh2>h0 @
  r@ sh2>h1 @
  r@ sh2>h2 @
  r@ sh2>h3 @
  r@ sh2>h4 @
  r@ sh2>h5 @
  r@ sh2>h6 @
  r> sh2>h7 @
;


: sh2+to-string   ( u1 u2 u3 u4 u5 u6 u7 u8 -- c-addr u = Convert SHA-256 result to the string c-addr u, using the pictured output area )
  base @ >r hex
  <#  sha+#s sha+#s sha+#s sha+#s sha+#s sha+#s sha+#s sha+#s 0. #>
  r> base !
;


( Inspection )

: sh2-dump   ( sh2 -- = Dump the sh2 variable )
  >r
  ." sh2:" r@ . cr
  ."  result :" r@ sh2>h0 @ r@ sh2>h1 @ r@ sh2>h2 @ r@ sh2>h3 @ r@ sh2>h4 @ r@ sh2>h5 @ r@ sh2>h6 @ r@ sh2>h7 @ sh2+to-string type cr
  ."  length :" r@ sh2>length ? cr
  ."  buffer :" r@ sh2>input sh2.input% chars dump
  ."  work   :" r> sh2>work sh2.work% cells dump
;

[ELSE]
.( Warning: sh2 requires 4 byte cells and 1 byte chars ) cr
[THEN]

[THEN]

\ ==============================================================================
