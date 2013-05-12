<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>pForth - portable Forth in 'C</title>
<LINK REL="SHORTCUT ICON" HREF="http://www.softsynth.com/favicon.ico" />
<link href="/aardvark/custom/custom.css?version=27" rel="stylesheet" type="text/css">
<link href="/aardvark/aardvark.css?version=27" rel="stylesheet" type="text/css">
<!-- extra head -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-750748-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<div id="container">
<div id="header">
  <div id="leftheader"><a href="http://www.softsynth.com/"> <img src="/images/softsynth_logo.png" width="200" height="100" border="0"></a></div>
  <div id="rightheader">
    <!-- Google CSE Search Box Begins -->
    <form id="searchbox_015572705897646109065:fp6grb7yfpk" action="http://www.google.com/cse">
      <input type="hidden" name="cx" value="015572705897646109065:fp6grb7yfpk" />
      <input name="q" type="text" size="40" />
      <input type="submit" name="sa" value="Search" />
      <input type="hidden" name="cof" value="FORID:0" />
    </form>
    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_015572705897646109065%3Afp6grb7yfpk"></script>
    <!-- Google CSE Search Box Ends -->
  </div>
  <div id="midheader">
    <h1>SoftSynth</h1>
    <h2>... music and computers ...</h2>
  </div>
  <br class="clearfloat"/>
</div>
<!-- Left Side Navigation ******************************** -->
<div id="leftside">
  <div id="leftside_inner"> <ul>
<li><a href="/index.php">Home</a>
</li><li><a href="/products.php">Products</a>
</li><li><a href="/jsyn/index.php">JSyn</a>
</li><li><a href="/pforth/index.php">pForth</a>
</li><li><a href="/music/index.php">Music</a>
</li><li><a href="/news/index.php">News</a>
</li><li><a href="/links/index.php">Links</a>
</li><li><a href="/contacts.php">Contact&nbsp;Us</a>
</li><li><a href="/aboutus.php">About&nbsp;Us</a>
</li></ul>
 </div>
</div>
<!-- Right Side Display ******************************** -->
<div id="rightside">
  <div id="rightside_inner">
  
  <h3>Projects</h3>
<table  border="1">
  <tr>
    <td><a href="/jsyn/">JSyn</a> - modular synthesis API for Java.</td>
  </tr>
  <tr>
    <td><a href="http://www.algomusic.com/jmsl/" target="_blank">JMSL</a> - Java Music Specification Language</td>
  </tr>
  <tr>
    <td><a href="http://www.portaudio.com/" target="_blank">PortAudio</a> - cross platform audio I/O API for 'C'</td>
  </tr>
</table>
<!-- data for adsense -->
    <script type="text/javascript"><!--
	  google_ad_client = "pub-1426437777355396";
	  google_ad_width = 160;
	  google_ad_height = 600;
	  google_ad_format = "160x600_as";
	  google_ad_type = "text";
	  google_ad_channel ="7963716298";
	  google_color_border = "B0E0E6";
	  google_color_bg = "FFFFFF";
	  google_color_link = "000000";
	  google_color_url = "336699";
	  google_color_text = "333333";
//--></script>
<!--
    <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
-->
  </div>
</div>
<div id="content">
<!-- Begin Content DIV ******************************** -->
<p class="navbar">
&nbsp;<a href="/pforth/index.php">pForth </a>&nbsp;|
&nbsp;<a href="http://code.google.com/p/pforth/">GoogleCode </a>&nbsp;|
&nbsp;<a href="/pforth/pf_tut.php">Tutorial </a>&nbsp;|
&nbsp;<span class="current_link">Reference</span>&nbsp;|
</p>

<center>
  <h1>
    <hr WIDTH="100%">
  </h1>
</center>
<center>
  <h1> pForth Reference Manual</h1>
</center>
<center>
  <hr WIDTH="100%">
</center>
<h3> pForth - a Portable ANSI style Forth written in ANSI 'C'.</h3>
<h3> <b>Last updated: July 21, 2008 V23</b></h3>
<p>by Phil Burk with Larry Polansky,
  David Rosenboom. Special thanks to contributors Darren Gibbs, Herb Maeder,
  Gary Arakaki, Mike Haas. </p>
<p>PForth source code is freely available.&nbsp; The author is available
  for customization of pForth, porting to new platforms, or developing pForth
  applications on a contractual basis.&nbsp; If interested, contact <a href="http://www.softsynth.com/contacts.php">Phil Burk</a>.
<p>Back to <a href="../pforth">pForth Home Page</a>
<center>
  <h2> LEGAL NOTICE</h2>
</center>
<p>The pForth software code is dedicated to the public domain, and any third
  party may reproduce, distribute and modify the pForth software code or
  any derivative works thereof without any compensation or license. The pForth
  software code is provided on an "as is" basis without any warranty of any
  kind, including, without limitation, the implied warranties of merchantability
  and fitness for a particular purpose and their equivalents under the laws
  of any jurisdiction. </p>
<p>
<hr WIDTH="100%">
<h2> Table of Contents</h2>
<ul>
  <li> <a href="#What is pForth">What is pForth?</a></li>
  <li> <a href="#Compiling pForth for your System">Compiling pForth for your System</a></li>
  <ul>
    <li> <a href="#Description of Source Files">Description of Source Files</a></li>
  </ul>
  <li> <a href="#Running pForth">Running pForth</a></li>
  <li> <a href="#ANSI Compliance">ANSI Compliance</a></li>
  <li> <a href="#pForth Special Features">pForth Special Features</a></li>
  <ul>
    <li> <a href="#Compiling from a File">Compiling from a File - INCLUDE</a></li>
    <li> <a href="#Saving Precompiled Dictionaries">Saving Precompiled Dictionaries</a></li>
    <li> <a href="#Recompiling Code - ANEW INCLUDE?">Recompiling Code - ANEW INCLUDE?</a></li>
    <li> <a href="#Customising FORGET with [FORGET]">Customising Forget with [FORGET]</a></li>
    <li> <a href="#Smart Conditionals">Smart Conditionals</a></li>
    <li> <a href="#Development Tools">Development Tools</a></li>
    <ul>
      <li> <a href="#WORDS.LIKE">WORDS.LIKE</a></li>
      <li> <a href="#FILE?">FILE?</a></li>
      <li> <a href="#SEE">SEE</a></li>
      <li> <a href="#Single Step Trace">Single Step Trace and Debug</a></li>
    </ul>
    <li> <a href="#Conditional Compilation [IF] [ELSE] [THEN]">Conditional Compilation
      - [IF] [ELSE] [THEN]</a></li>
    <li> <a href="#Miscellaneous Handy Words">Miscellaneous Handy Words</a></li>
    <li> <a href="#Local Variables { foo --}">Local Variables { foo -- }</a></li>
    <li> <a href="#'C' like Structures. :STRUCT">'C' like Structures. :STRUCT</a></li>
    <li> <a href="#Vectorred Execution - DEFER">Vectorred execution - DEFER</a></li>
    <li> <a href="#Floating Point">Floating Point</a></li>
  </ul>
  <li> <a href="#pForth Design">pForth Design</a></li>
  <ul>
    <li> <a href="#'C' kernel">'C' kernel</a></li>
    <li> <a href="#Dictionary Structures">Dictionary Structures</a></li>
  </ul>
  <li> <a href="#Compiling_pForth">Compiling pForth</a></li>
  <ul>
    <li> <a href="#Compiler Options">Compiler Options</a></li>
    <li> <a href="#Building pForth on Supported Hosts">Building pForth on Supported
      Hosts</a></li>
    <li> <a href="#Compiling for Embedded Systems">Compiling for Embedded Systems</a></li>
    <li> <a href="#Link_Custom_C">Linking with Custom 'C' Functions</a></li>
    <li> <a href="#Minimal Executables - CLONE">Minimal executables. CLONE</a></li>
    <li> <a href="#Testing your Compiled pForth">Testing your Compiled pForth</a></li>
  </ul>
</ul>
<hr WIDTH="100%">
<h2> <a NAME="What is pForth"></a>What is pForth?</h2>
<p>PForth is an ANSI style Forth designed to be portable across many platforms.
  The 'P' in pForth stands for "Portable". PForth is based on a Forth kernel
  written in ANSI standard 'C'. </p>
<h3> What is Forth?</h3>
<p>Forth is a stack based language invented by astronomer Charles Moore for
  controlling telescopes. Forth is an interactive language. You can enter
  commands at the keyboard and have them be immediately executed, similar
  to BASIC or LISP. Forth has a dictionary of words that can be executed
  or used to construct new words that are then added to the dictionary. Forth
  words operate on a data stack that contains numbers and addresses. </p>
<p>To learn more about Forth, see the <a href="pf_tut.php">Forth Tutorial</a>.
<h3> The Origins of pForth</h3>
<p>PForth began as a JSR threaded 68000 Forth called HForth that was used
  to support <a href="/hmsl/">HMSL</a>, the Hierarchical Music Specification Language. HMSL was
  a music experimentation language developed by Phil Burk, Larry Polansky
  and David Rosenboom while working at the Mills College Center for Contemporary
  Music. Phil moved from Mills to the 3DO Company where he ported the Forth
  kernel to 'C'. It was used extensively at 3DO as a tool for verifying ASIC design and
  for bringing up new hardware platforms. At 3DO, the Forth had to run on
  many systems including SUN, SGI, Macintosh, PC, Amiga, the 3DO ARM based
  Opera system, and the 3DO PowerPC based M2 system. </p>
<h3> pForth Design Goals</h3>
<p>PForth has been designed with portability as the primary design goal. As
  a result, pForth avoids any fancy UNIX calls. pForth also avoids using
  any clever and original ways of constructing the Forth dictionary. It just
  compiles its kernel from ANSI compatible 'C' code then loads ANS compatible
  Forth code to build the dictionary. Very boring but very likely to work
  on almost any platform. </p>
<p>The dictionary files that can be saved from pForth are almost host independent.
  They can be compiled on one processor, and then run on another processor.
  as long as the endian-ness is the same. In other words, dictionaries built
  on a PC will only work on a PC. Dictionaries built on almost any other
  computer will work on almost any other computer.
<p>PForth can be used to bring up minimal hardware systems that have very
  few system services implemented. It is possible to compile pForth for systems
  that only support routines to send and receive a single character. If malloc()
  and free() are not available, equivalent functions are available in standard
  'C' code. If file I/O is not available, the dictionary can be saved as
  a static data array in 'C' source format on a host system. The dictionary
  in 'C' source form is then compiled with a custom pForth kernel to avoid
  having to read the dictionary from disk.
<p>
<hr WIDTH="100%">
<h2> <a NAME="Compiling pForth for your System"></a>Compiling pForth for your
  System</h2>
<p>Up-to-date instructions on compiling, possibly with comments from the community, may be found at:</p>
<pre><a href="http://code.google.com/p/pforth/wiki/HowToCompile" target="_blank">http://code.google.com/p/pforth/wiki/HowToCompile</a></pre>
<p>The process of building pForth involves several steps. This process is
  typically handled automatically by the Makefile or IDE Project.</p>
<ol>
  <li> Compile the 'C' based pForth kernel called "pforth" or "pforth.exe".</li>
  <li> Execute "pforth" with the -i option to build the dictionary from scratch.
    Compile the "system.fth" file which will add all the top level Forth words.
    This can be done in one command by entering "pforth -i system.fth".</li>
  <li> Save the compiled dictionary as "pforth.dic".</li>
  <li> The next time you run pforth, the precompiled pforth.dic file will be loaded
    automatically.</li>
</ol>
<h3> Unix and Max OS X</h3>
<p>A Makefile has been provided that should work on most Unix platforms. </p>
<ol>
  <li> cd to &quot;build/unix&quot; folder.</li>
  <li> Enter: make all</li>
</ol>
<h3> <a NAME="Description of Source Files"></a>Description of Source Files</h3>
<h4> Forth Source</h4>
<pre>ansilocs.fth&nbsp;&nbsp;&nbsp; = support for ANSI (LOCAL) word
c_struct.fth&nbsp;&nbsp;&nbsp; = 'C' like data structures
case.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = CASE OF ENDOF ENDCASE
catch.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = CATCH and THROW
condcomp.fth&nbsp;&nbsp;&nbsp; = [IF] [ELSE] [THEN] conditional compiler
filefind.fth&nbsp;&nbsp;&nbsp; = FILE?
floats.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = floating point support
forget.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = FORGET [FORGET] IF.FORGOTTEN
loadp4th.fth&nbsp;&nbsp;&nbsp; = loads basic dictionary
locals.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = { } style locals using (LOCAL)
math.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = misc math words
member.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = additional 'C' like data structure support
misc1.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = miscellaneous words
misc2.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = miscellaneous words
numberio.fth&nbsp;&nbsp;&nbsp; = formatted numeric input/output
private.fth&nbsp;&nbsp;&nbsp;&nbsp; = hide low level words
quit.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = QUIT EVALUATE INTERPRET in high level
smart_if.fth&nbsp;&nbsp;&nbsp; = allows conditionals outside colon definition
see.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = Forth "disassembler".&nbsp; Eg.&nbsp; SEE SPACES
strings.fth&nbsp;&nbsp;&nbsp;&nbsp; = string support
system.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = bootstraps pForth dictionary
trace.fth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = single step trace for debugging</pre>
<h4> 'C' Source</h4>
csrc/pfcompil.c = pForth compiler support <br>
csrc/pfcustom.c = example of 'C' functions callable from pForth <br>
csrc/pfinnrfp.h = float extensions to interpreter <br>
csrc/pforth.h = include this in app that embeds pForth <br>
csrc/pf_cglue.c = glue for pForth calling 'C' <br>
csrc/pf_clib.c = replacement routines for 'C' stdlib <br>
csrc/pf_core.c = primary words called from 'C' app that embeds pForth <br>
csrc/pf_float.h = defines PF_FLOAT, and the floating point math functions
such as fp_sin <br>
csrc/pf_inner.c = inner interpreter <br>
csrc/pf_guts.h = primary include file, define structures <br>
csrc/pf_io.c = input/output <br>
csrc/pf_main.c = basic application for standalone pForth <br>
csrc/pf_mem.c = optional malloc() implementation <br>
csrc/pf_save.c = save and load dictionaries <br>
csrc/pf_text.c = string tools, error message text <br>
csrc/pf_words.c = miscellaneous pForth words implemented <br>
<hr WIDTH="100%">
<h2> <a NAME="Running pForth"></a>Running pForth</h2>
<p>PForth can be run from a shell or by double clicking on its icon, depending
  on the system you are using. The execution options for pForth are described
  assuming that you are running it from a shell. </p>
<p>Usage:
<ul>
  <pre>pforth [-i] [-dDictionaryFilename] [SourceFilename]</pre>
</ul>
<dt> -i</dt>
<dd> Initialize pForth by building dictionary from scratch. Used when building
  pForth or when debugging pForth on new systems.</dd>
<dd>&nbsp;</dd>
<dt> -dDictionaryFilename</dt>
<dd> Specify a custom dictionary to be loaded in place of the default "pforth.dic".
  For example:</dd>
<ul>
  <ul>
    <pre>pforth -dgame.dic</pre>
  </ul>
</ul>
<dt> SourceFilename</dt>
<dd> A Forth source file can be automatically compiled by passing its name to
  pForth. This is useful when using Forth as an assembler or for automated
  hardware testing. Remember that the source file can compile code and execute
  it all in the same file.</dd>
<h4> Quick Verification of pForth</h4>
<p>To verify that PForth is working, enter: </p>
<ul>
  <pre>3 4 + .</pre>
</ul>
<p>It should print "7 ok". Now enter: </p>
<ul>
  WORDS
</ul>
<p>You should see a long list of all the words in the pForth dictionary. Don't
  worry. You won't need to learn all of these.&nbsp; More tests are described
  in the README.txt file. </p>
<p>
<hr WIDTH="100%">
<h2> <a NAME="ANSI Compliance"></a>ANSI Compliance</h2>
<p>This Forth is intended to be ANS compatible. I will not claim that it is
  compatible until more people bang on it. If you find areas where it deviates
  from the standard, please let me know. </p>
<p>Word sets supported include:
<ul>
  <li> FLOAT</li>
  <li> LOCAL with support for { lv1 lv2 | lv3 -- } style locals</li>
  <li> EXCEPTION but standard throw codes not implemented</li>
  <li> FILE ACCESS</li>
  <li> MEMORY ALLOCATION</li>
</ul>
<p>Here are the areas that I know are not compatible: </p>
<p>The ENVIRONMENT queries are not implemented.
<p>Word sets NOT supported include:
<ul>
  <li> BLOCK - a matter of religion</li>
  <li> SEARCH ORDER</li>
  <li> PROGRAMMING TOOLS - only has .S ? DUMP WORDS BYE</li>
  <li> STRING - only has CMOVE CMOVE> COMPARE</li>
  <li> DOUBLE NUMBER - but cell is 32 bits</li>
</ul>
<hr WIDTH="100%">
<h2> <a NAME="pForth Special Features"></a>pForth Special Features</h2>
<p>These features are not part of the ANS standard for Forth.&nbsp; They have
  been added to assist developers. </p>
<h3> <a NAME="Compiling from a File"></a>Compiling from a File</h3>
<p>Use INCLUDE to compile source code from a file: </p>
<ul>
  <pre>INCLUDE filename</pre>
</ul>
<p>You can nest calls to INCLUDE. INCLUDE simply redirects Forth to takes
  its input from the file instead of the keyboard so you can place any legal
  Forth code in the source code file. </p>
<h3> <a NAME="Saving Precompiled Dictionaries"></a>Saving Precompiled Dictionaries</h3>
<p>Use SAVE-FORTH save your precompiled code to a file. To save the current
  dictionary to a file called "custom.dic", enter: </p>
<ul>
  <pre>c" custom.dic" SAVE-FORTH</pre>
</ul>
<p>You can then leave pForth and use your custom dictionary by entering: </p>
<ul>
  <pre>pforth -dcustom.dic</pre>
</ul>
<p>On icon based systems, you may wish to name your custom dictionary "pforth.dic"
  so that it will be loaded automatically. </p>
<p>Be careful that you do not leave absolute addresses stored in the dictionary
  because they will not work when you reload pForth at a different address.
  Use A! to store an address in a variable in a relocatable form and A@ to
  get it back if you need to.
<ul>
  <pre>VARIABLE DATA-PTR
CREATE DATA 100 ALLOT
DATA DATA-PTR !&nbsp;&nbsp;&nbsp; \ storing absolute address!&nbsp; BAD
DATA DATA-PTR A!&nbsp;&nbsp; \ storing relocatable address!&nbsp; GOOD
DATA-PTR A@&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \ fetch relocatable address</pre>
</ul>
<h3> <a NAME="Recompiling Code - ANEW INCLUDE?"></a>Recompiling Code - ANEW
  INCLUDE?</h3>
<p>When you are testing a file full of code, you will probably recompile many
  times. You will probably want to FORGET the old code before loading the
  new code. You could put a line at the beginning of your file like this: </p>
<ul>
  <pre>FORGET XXXX-MINE&nbsp;&nbsp;&nbsp;&nbsp; : XXXX-MINE ;</pre>
</ul>
<p>This would automatically FORGET for you every time you load. Unfortunately,
  you must define XXXX-MINE before you can ever load this file. We have a
  word that will automatically define a word for you the first time, then
  FORGET and redefine it each time after that. It is called ANEW and can
  be found at the beginning of most Forth source files. We use a prefix of
  TASK- followed by the filename just to be consistent. This TASK-name word
  is handy when working with INCLUDE? as well. Here is an example: </p>
<ul>
  <pre>\ Start of file
INCLUDE? TASK-MYTHING.FTH MYTHING.FTH
ANEW TASK-THISFILE.FTH
\ the rest of the file follows...</pre>
</ul>
<p>Notice that the INCLUDE? comes before the call to ANEW so that we don't
  FORGET MYTHING.FTH every time we recompile. </p>
<p>FORGET allows you to get rid of code that you have already compiled.
  This is an unusual feature in a programming language. It is very convenient
  in Forth but can cause problems. Most problems with FORGET involve leaving
  addresses that point to the forgotten code that are not themselves forgotten.
  This can occur if you set a deferred system word to your word then FORGET
  your word. The system word which is below your word in the dictionary is
  pointing up to code that no longer exists. It will probably crash if called.
  (See discussion of DEFER below.) Another problem is if your code allocates
  memory, opens files, or opens windows. If your code is forgotten you may
  have no way to free or close these thing. You could also have a problems
  if you add addresses from your code to a table that is below your code.
  This might be a jump table or data table.
<p>Since this is a common problem we have provided a tool for handling
  it. If you have some code that you know could potentially cause a problem
  if forgotten, then write a cleanup word that will eliminate the problem.
  This word could UNdefer words, free memory, etc. Then tell the system to
  call this word if the code is forgotten. Here is how:
<ul>
  <pre>: MY.CLEANUP&nbsp; ( -- , do whatever )
&nbsp;&nbsp;&nbsp; MY-MEM @ FREE DROP
&nbsp;&nbsp;&nbsp; 0 MY-MEM !
;
IF.FORGOTTEN&nbsp; MY.CLEANUP</pre>
</ul>
<p>IF.FORGOTTEN creates a linked list node containing your CFA that is checked
  by FORGET. Any nodes that end up above HERE (the Forth pointer to the top
  of the dictionary) after FORGET is done are executed. </p>
<h3> <a NAME="Customising FORGET with [FORGET]"></a>Customising FORGET with
  [FORGET]</h3>
<p>Sometimes, you may need to extend the way that FORGET works. FORGET is
  not deferred, however, because that could cause some real problems. Instead,
  you can define a new version of [FORGET] which is searched for and executed
  by FORGET. You MUST call [FORGET] from your program or FORGET will not
  actually FORGET. Here is an example. </p>
<ul>
  <pre>: [FORGET]&nbsp; ( -- , my version )
&nbsp;&nbsp;&nbsp; ." Change things around!" CR
&nbsp;&nbsp;&nbsp; [FORGET]&nbsp; ( must be called )
&nbsp;&nbsp;&nbsp; ." Now put them back!" CR
;
: FOO ." Hello!" ;
FORGET FOO&nbsp; ( Will print "Change things around!", etc.)</pre>
</ul>
<p>This is recommended over redefining FORGET because words like ANEW that
  call FORGET will now pick up your changes. </p>
<h3> <a NAME="Smart Conditionals"></a>Smart Conditionals</h3>
<p>In pForth, you can use IF THEN DO LOOP and other conditionals outside of
  colon definitions. PForth will switch temporarily into the compile state,
  then automatically execute the conditional code. (Thank you Mitch Bradley)
  For example, just enter this at the keyboard. </p>
<ul>
  <pre>10 0 DO I . LOOP</pre>
</ul>
<h3> <a NAME="Development Tools"></a>Development Tools</h3>
<h4> <a NAME="WORDS.LIKE"></a>WORDS.LIKE</h4>
<p>If you cannot remember the exact name of a word, you can use WORDS.LIKE
  to search the dictionary for all words that contain a substring. For an
  example, enter: </p>
<ul>
  <pre>WORDS.LIKE&nbsp;&nbsp; FOR
WORDS.LIKE&nbsp;&nbsp; EMIT</pre>
</ul>
<h4> <a NAME="FILE?"></a>FILE?</h4>
<p>You can use FILE? to find out what file a word was compiled from. If a
  word was defined in multiple files then it will list each file. The execution
  token of each definition of the word is listed on the same line. </p>
<ul>
<pre>FILE? IF
FILE? AUTO.INIT</pre>
</ul>
<h4> <a NAME="SEE"></a>SEE</h4>
<p>You can use SEE to "disassemble" a word in the pForth dictionary. SEE will
  attempt to print out Forth source in a form that is similar to the source
  code. SEE will give you some idea of how the word was defined but is not
  perfect. Certain compiler words, like BEGIN and LITERAL, are difficult
  to disassemble and may not print properly. For an example, enter: </p>
<ul>
  <pre>SEE SPACES
SEE WORDS</pre>
</ul>
<h4> <a NAME="Single Step Trace"></a>Single Step Trace and Debug</h4>
<p>It is often useful to proceed step by step through your code when debugging.&nbsp;
  PForth provides a simple single step trace facility for this purpose.&nbsp;
  Here is an example of using TRACE to debug a simple program.&nbsp; Enter
  the following program: <br>
&nbsp; </p>
<ul>
  <pre>: SQUARE ( n -- n**2 )
&nbsp;&nbsp;&nbsp; DUP&nbsp; *
;
: TSQ&nbsp; ( n -- , test square )
&nbsp;&nbsp;&nbsp; ." Square of "&nbsp;&nbsp; DUP&nbsp;&nbsp; .
&nbsp;&nbsp;&nbsp; ." is "&nbsp;&nbsp; SQUARE&nbsp;&nbsp; .&nbsp;&nbsp; CR
;</pre>
</ul>
<p>Even though this program should work, let's pretend it doesn't and try
  to debug it.&nbsp; Enter: </p>
<ul>
  7&nbsp; TRACE&nbsp; TSQ
</ul>
<p>You should see: </p>
<ul>
  <pre>7 trace tsq
&lt;&lt;&nbsp; TSQ +0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; (.")&nbsp; Square of "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>The "TSQ +0" means that you are about to execute code at an offset of "+0"
  from the beginning of TSQ.&nbsp; The &lt;10:1> means that we are in base
  10, and that there is 1 item on the stack, which is shown to be "7". The
  (.") is the word that is about to be executed.&nbsp; (.") is the word that
  is compiled when use use .".&nbsp; Now to single step, enter: </p>
<ul>
  <pre>s</pre>
</ul>
<p>You should see: </p>
<ul>
  <pre>Square of
&lt;&lt;&nbsp; TSQ +16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; DUP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>The "Square os" was printed by (."). We can step multiple times using the "sm" command. Enter:</p>
<ul>
  <pre>3 sm</pre>
</ul>
<p>You should see: </p>
<ul>
  <pre>&lt;&lt;&nbsp; TSQ +20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:2> 7 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >> 7&nbsp;
&lt;&lt;&nbsp; TSQ +24&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; (.")&nbsp; is "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >> is&nbsp;
&lt;&lt;&nbsp; TSQ +32&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; SQUARE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>The "7" after the ">>" was printed by the . word. If we entered "s", we
  would
  step over the SQUARE word. If we want to dive down into SQUARE, we can
  enter: </p>
<ul>
  <pre>sd</pre>
</ul>
<p>You should see:</p>
<ul>
  <pre>&lt;&lt;&nbsp; SQUARE +0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp;&nbsp;&nbsp; DUP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>To step once in SQUARE, enter:</p>
<ul>
  <pre>s</pre>
</ul>
<p>You should see: </p>
<ul>
  <pre>&lt;&lt;&nbsp; SQUARE +4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:2> 7 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>To go to the end of the current word, enter:</p>
<ul>
  <pre>g</pre>
</ul>
<p>You should see:</p>
<ul>
  <pre>&lt;&lt;&nbsp; SQUARE +8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 49&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp;&nbsp;&nbsp; EXIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;
&lt;&lt;&nbsp; TSQ +36&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;10:1> 49&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ||&nbsp; .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >>&nbsp;&nbsp;&nbsp; ok</pre>
</ul>
<p>EXIT is compiled at the end of every Forth word. For more information on
  TRACE, enter TRACE.HELP: </p>
<ul>
  <pre>TRACE&nbsp; ( i*x &lt;name> -- , setup trace for Forth word )
S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( -- , step over )
SM&nbsp;&nbsp;&nbsp;&nbsp; ( many -- , step over many times )
SD&nbsp;&nbsp;&nbsp;&nbsp; ( -- , step down )
G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( -- , go to end of word )
GD&nbsp;&nbsp;&nbsp;&nbsp; ( n -- , go down N levels from current level,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; stop at end of this level )</pre>
</ul>
<h3> <a NAME="Conditional Compilation [IF] [ELSE] [THEN]"></a>Conditional Compilation
  [IF] [ELSE] [THEN]</h3>
<p>PForth supports conditional compilation words similar to 'C''s #if, #else,
  and #endif. </p>
<dt> [IF] ( flag -- , if true, skip to [ELSE] or [THEN] )</dt>
<dt> [ELSE] ( -- , skip to [THEN] )</dt>
<dt> [THEN] ( -- , noop, used to terminate [IF] and [ELSE] section )</dt>
<p>For example:
<ul>
  <pre>TRUE constant USE_FRENCH

USE_FRENCH&nbsp; [IF]
&nbsp; : WELCOME&nbsp; ." Bienvenue!" cr ;
[ELSE]
&nbsp; : WELCOME&nbsp; ." Welcome!" cr ;
[THEN]</pre>
</ul>
<p>Here is how to conditionally compile within a colon definition by using
  [ and ]. </p>
<ul>
  <pre>: DOIT&nbsp; ( -- )
&nbsp;&nbsp;&nbsp; START.REACTOR
&nbsp;&nbsp;&nbsp; IF
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ USE_FRENCH [IF] ] ." Zut alors!"
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [ [ELSE] ] ." Uh oh!"
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [THEN]
&nbsp;&nbsp;&nbsp; THEN cr
;</pre>
</ul>
<h3> <a NAME="Miscellaneous Handy Words"></a>Miscellaneous Handy Words</h3>
<dt> .HEX ( n -- , print N as hex number )</dt>
<dt> CHOOSE ( n -- rand , select random number between 0 and N-1 )</dt>
<dt> MAP ( -- , print dictionary information )</dt>
<h3> <a NAME="Local Variables { foo --}"></a>Local Variables { foo --}</h3>
In a complicated Forth word it is sometimes hard to keep track of where
things are on the stack. If you find you are doing a lot of stack operations
like DUP SWAP ROT PICK etc. then you may want to use local variables. They
can greatly simplify your code. You can declare local variables for a word
using a syntax similar to the stack diagram. These variables will only
be accessible within that word. Thus they are "local" as opposed to "global"
like regular variables. Local variables are self-fetching. They automatically
put their values on the stack when you give their name. You don't need
to @ the contents. Local variables do not take up space in the dictionary.
They reside on the return stack where space is made for them as needed.
Words written with them can be reentrant and recursive.
<p>Consider a word that calculates the difference of two squares, Here
  are two ways of writing the same word.
<ul>
  <pre>: DIFF.SQUARES ( A B -- A*A-B*B )&nbsp;
&nbsp;&nbsp;&nbsp; DUP *&nbsp;
&nbsp;&nbsp;&nbsp; SWAP DUP *&nbsp;
&nbsp;&nbsp;&nbsp; SWAP -&nbsp;
;&nbsp;
&nbsp; ( or )&nbsp;
: DIFF.SQUARES { A B -- A*A-B*B }&nbsp;
&nbsp;&nbsp;&nbsp; A A *&nbsp;
&nbsp;&nbsp;&nbsp; B B * -&nbsp;
;&nbsp;
3 2 DIFF.SQUARES&nbsp; ( would return 5 )</pre>
</ul>
<p>In the second definition of DIFF.SQUARES the curly bracket '{' told the
  compiler to start declaring local variables. Two locals were defined, A
  and B. The names could be as long as regular Forth words if desired. The
  "--" marked the end of the local variable list. When the word is executed,
  the values will automatically be pulled from the stack and placed in the
  local variables. When a local variable is executed it places its value
  on the stack instead of its address. This is called self-fetching. Since
  there is no address, you may wonder how you can store into a local variable.
  There is a special operator for local variables that does a store. It looks
  like -> and is pronounced "to". </p>
<p>Local variables need not be passed on the stack. You can declare a local
  variable by placing it after a "vertical bar" ( | )character. These are
  automatically set to zero when created. Here is a simple example that uses
  -> and | in a word:
<ul>
  <pre>: SHOW2*&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; { loc1 | unvar --&nbsp; , 1 regular, 1 uninitialized }
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LOC1&nbsp; 2*&nbsp; ->&nbsp; UNVAR&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (set unver to 2*LOC1 )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UNVAR&nbsp;&nbsp; .&nbsp;&nbsp; ( print UNVAR )
;
3 SHOW2*&nbsp;&nbsp; ( pass only 1 parameter, prints 6 )</pre>
</ul>
<p>Since local variable often used as counters or accumulators, we have a
  special operator for adding to a local variable It is +-> which is pronounced
  "plus to". These next two lines are functionally equivalent but the second
  line is faster and smaller: </p>
<ul>
  <pre>ACCUM&nbsp;&nbsp; 10 +&nbsp;&nbsp; -> ACCUM
10 +-> ACCUM</pre>
</ul>
<p>If you name a local variable the same as a Forth word in the dictionary,
  eg. INDEX or COUNT, you will be given a warning message. The local variable
  will still work but one could easily get confused so we warn you about
  this. Other errors that can occur include, missing a closing '}', missing
  '--', or having too many local variables. </p>
<h3> <a NAME="'C' like Structures. :STRUCT"></a>'C' like Structures. :STRUCT</h3>
<p>You can define 'C' like data structures in pForth using :STRUCT. For example: </p>
<ul>
  <pre>:STRUCT&nbsp; SONG
&nbsp;&nbsp;&nbsp; LONG&nbsp;&nbsp;&nbsp;&nbsp; SONG_NUMNOTES&nbsp; \ define 32 bit structure member named SONG_NUMNOTES
&nbsp;&nbsp;&nbsp; SHORT&nbsp;&nbsp;&nbsp; SONG_SECONDS&nbsp;&nbsp; \ define 16 bit structure member
&nbsp;&nbsp;&nbsp; BYTE&nbsp;&nbsp;&nbsp;&nbsp; SONG_QUALITY&nbsp;&nbsp; \ define 8 bit member
&nbsp;&nbsp;&nbsp; LONG&nbsp;&nbsp;&nbsp;&nbsp; SONG_NUMBYTES&nbsp; \ auto aligns after SHORT or BYTE
&nbsp;&nbsp;&nbsp; RPTR&nbsp;&nbsp;&nbsp;&nbsp; SONG_DATA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \ relocatable pointer to data
;STRUCT</pre>
  <pre>SONG&nbsp; HAPPY&nbsp;&nbsp; \ define a song structure called happy</pre>
  <pre>400&nbsp; HAPPY&nbsp; S!&nbsp; SONG_NUMNOTES&nbsp; \ set number of notes to 400
17&nbsp;&nbsp; HAPPY&nbsp; S!&nbsp; SONG_SECONDS&nbsp;&nbsp; \ S! works with all size members</pre>
  <pre>CREATE&nbsp; SONG-DATA&nbsp; 23 , 17 , 19 , 27 ,
SONG-DATA&nbsp; HAPPY S! SONG_DATA&nbsp; \ store pointer in relocatable form</pre>
  <pre>HAPPY&nbsp; DST&nbsp; SONG&nbsp;&nbsp;&nbsp; \ dump HAPPY as a SONG structure</pre>
  <pre>HAPPY&nbsp;&nbsp; S@&nbsp; SONG_NUMNOTES .&nbsp; \ fetch numnotes and print</pre>
</ul>
<p>See the file "c_struct.fth" for more information. </p>
<h3> <a NAME="Vectorred Execution - DEFER"></a>Vectorred Execution - DEFER</h3>
<p>Using DEFER for vectored words. In Forth and other languages you can save
  the address of a function in a variable. You can later fetch from that
  variable and execute the function it points to.This is called vectored
  execution. PForth provides a tool that simplifies this process. You can
  define a word using DEFER. This word will contain the execution token of
  another Forth function. When you execute the deferred word, it will execute
  the function it points to. By changing the contents of this deferred word,
  you can change what it will do. There are several words that support this
  process. </p>
<dl>
  <dt> DEFER ( &lt;name> -- , define a deferred word )</dt>
  <dt> IS ( CFA &lt;name> -- , set the function for a deferred word )</dt>
  <dt> WHAT'S ( &lt;name> -- CFA , return the CFA set by IS )</dt>
</dl>
<p> Simple way to see the name of what's in a deferred word:</p>
<ul>
  <ul>
    <pre>WHAT'S EMIT >NAME ID.</pre>
  </ul>
</ul>
<p>should print name of current word that's in EMIT.</p>
<p>Here is an example that uses a deferred word.
<ul>
  <pre>DEFER PRINTIT
' . IS PRINTIT&nbsp;&nbsp; ( make PRINTIT use . )
8 3 + PRINTIT

: COUNTUP&nbsp; ( -- , call deferred word )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ." Hit RETURN to stop!" CR
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 ( first value )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BEGIN 1+ DUP PRINTIT CR
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ?TERMINAL
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UNTIL
;
COUNTUP&nbsp; ( uses simple . )

: FANCY.PRINT&nbsp; ( N -- , print in DECIMAL and HEX)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DUP ." DECIMAL = " .
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ." , HEX = " .HEX
;
' FANCY.PRINT&nbsp; IS PRINTIT&nbsp; ( change printit )
WHAT'S PRINTIT >NAME ID. ( shows use of WHAT'S )
8 3 + PRINTIT
COUNTUP&nbsp; ( notice that it now uses FANCY.PRINT )</pre>
</ul>
<p>Many words in the system have been defined using DEFER which means that
  we can change how they work without recompiling the entire system. Here
  is a partial list of those words </p>
<ul>
  <pre>ABORT EMIT NUMBER?</pre>
</ul>
<h4> Potential Problems with Defer</h4>
<p>Deferred words are very handy to use, however, you must be careful with
  them. One problem that can occur is if you initialize a deferred system
  more than once. In the below example, suppose we called STUTTER twice.
  The first time we would save the original EMIT vector in OLD-EMIT and put
  in a new one. The second time we called it we would take our new function
  from EMIT and save it in OLD-EMIT overwriting what we had saved previously.
  Thus we would lose the original vector for EMIT . You can avoid this if
  you check to see whether you have already done the defer. Here's an example
  of this technique. </p>
<ul>
  <pre>DEFER OLD-EMIT
' QUIT&nbsp; IS OLD-EMIT&nbsp; ( set to known value )
: EEMMIITT&nbsp; ( char --- , our fun EMIT )
&nbsp;&nbsp;&nbsp; DUP OLD-EMIT OLD-EMIT
;&nbsp;
: STUTTER&nbsp;&nbsp; ( --- )
&nbsp;&nbsp;&nbsp; WHAT'S OLD-EMIT&nbsp; 'C QUIT =&nbsp; ( still the same? )
&nbsp;&nbsp;&nbsp; IF&nbsp; ( this must be the first time )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WHAT'S EMIT&nbsp; ( get the current value of EMIT )&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; IS OLD-EMIT&nbsp; ( save this value in OLD-EMIT )&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 'C EEMMIITT IS EMIT
&nbsp;&nbsp;&nbsp; ELSE ."&nbsp; Attempt to STUTTER twice!" CR
&nbsp;&nbsp;&nbsp; THEN
;&nbsp;
: STOP-IT!&nbsp; ( --- )
&nbsp;&nbsp;&nbsp; WHAT'S OLD-EMIT ' QUIT =
&nbsp;&nbsp;&nbsp; IF&nbsp; ." STUTTER not installed!" CR

&nbsp;&nbsp;&nbsp; ELSE&nbsp; WHAT'S OLD-EMIT IS EMIT
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 'C QUIT IS OLD-EMIT&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( reset to show termination )
&nbsp;&nbsp;&nbsp; THEN
;</pre>
</ul>
<p>In the above example, we could call STUTTER or STOP-IT! as many times as
  we want and still be safe. </p>
<p>Suppose you forget your word that EMIT now calls. As you compile new
  code you will overwrite the code that EMIT calls and it will crash miserably.
  You must reset any deferred words that call your code before you FORGET
  your code. The easiest way to do this is to use the word IF.FORGOTTEN to
  specify a cleanup word to be called if you ever FORGET the code in question.
  In the above example using EMIT , we could have said:
<ul>
  <pre>IF.FORGOTTEN STOP-IT!</pre>
</ul>
<h3> <a NAME="Floating Point"></a>Floating Point</h3>
<p>PForth supports the FLOAT word set and much of the FLOATEXT word set as
  a compile time option.&nbsp; You can select single or double precision
  as the default by changing the typedef of PF_FLOAT.
</p>
<dl>
  <p>PForth has several options for floating point output. </p>
  <dt> FS. ( r -f- , prints in scientific/exponential format )</dt>
  <dt> FE. ( r -f- , prints in engineering format, exponent if multiple of 3&nbsp;
    )</dt>
  <dt> FG. ( r -f- , prints in normal or exponential format depending on size
    )</dt>
  <dt> F. ( r -f- , as defined by the standard )</dt>
  <dd>&nbsp;</dd>
  <dt> Here is an example of output from each word for a number ranging from large
    to very small.</dt>
  <dl>
    <pre>&nbsp;&nbsp;&nbsp;&nbsp; FS.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FE.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FG.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; F.
1.234000e+12&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e+12&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+12&nbsp;&nbsp;&nbsp;&nbsp; 1234000000000.&nbsp;
1.234000e+11&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+11&nbsp;&nbsp;&nbsp;&nbsp; 123400000000.&nbsp;
1.234000e+10&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+10&nbsp;&nbsp;&nbsp;&nbsp; 12340000000.&nbsp;
1.234000e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+09&nbsp;&nbsp;&nbsp;&nbsp; 1234000000.&nbsp;
1.234000e+08&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+08&nbsp;&nbsp;&nbsp;&nbsp; 123400000.&nbsp;
1.234000e+07&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234e+07&nbsp;&nbsp;&nbsp;&nbsp; 12340000.&nbsp;
1.234000e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e+06&nbsp;&nbsp;&nbsp;&nbsp; 1234000.&nbsp;&nbsp;&nbsp;&nbsp; 1234000.&nbsp;
1.234000e+05&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e+03&nbsp;&nbsp;&nbsp;&nbsp; 123400.&nbsp;&nbsp;&nbsp;&nbsp; 123400.0&nbsp;
1.234000e+04&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e+03&nbsp;&nbsp;&nbsp;&nbsp; 12340.&nbsp;&nbsp;&nbsp;&nbsp; 12340.00&nbsp;
1.234000e+03&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e+03&nbsp;&nbsp;&nbsp;&nbsp; 1234.&nbsp;&nbsp;&nbsp;&nbsp; 1234.000&nbsp;
1.234000e+02&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e+00&nbsp;&nbsp;&nbsp;&nbsp; 123.4&nbsp;&nbsp;&nbsp;&nbsp; 123.4000&nbsp;
1.234000e+01&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e+00&nbsp;&nbsp;&nbsp;&nbsp; 12.34&nbsp;&nbsp;&nbsp;&nbsp; 12.34000&nbsp;
1.234000e+00&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e+00&nbsp;&nbsp;&nbsp;&nbsp; 1.234&nbsp;&nbsp;&nbsp;&nbsp; 1.234000&nbsp;
1.234000e-01&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.1234&nbsp;&nbsp;&nbsp;&nbsp; 0.1234000&nbsp;
1.234000e-02&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.01234&nbsp;&nbsp;&nbsp;&nbsp; 0.0123400&nbsp;
1.234000e-03&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.001234&nbsp;&nbsp;&nbsp;&nbsp; 0.0012340&nbsp;
1.234000e-04&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e-06&nbsp;&nbsp;&nbsp;&nbsp; 0.0001234&nbsp;&nbsp;&nbsp;&nbsp; 0.0001234&nbsp;
1.234000e-05&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-05&nbsp;&nbsp;&nbsp;&nbsp; 0.0000123&nbsp;
1.234000e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-06&nbsp;&nbsp;&nbsp;&nbsp; 0.0000012&nbsp;
1.234000e-07&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-07&nbsp;&nbsp;&nbsp;&nbsp; 0.0000001&nbsp;
1.234000e-08&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-08&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234000e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234000e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-09&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234000e-10&nbsp;&nbsp;&nbsp;&nbsp; 123.4000e-12&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-10&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234000e-11&nbsp;&nbsp;&nbsp;&nbsp; 12.34000e-12&nbsp;&nbsp;&nbsp;&nbsp; 1.234e-11&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000

1.234568e+12&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+12&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+12&nbsp;&nbsp;&nbsp;&nbsp; 1234567890000.&nbsp;
1.234568e+11&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+11&nbsp;&nbsp;&nbsp;&nbsp; 123456789000.&nbsp;
1.234568e+10&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+10&nbsp;&nbsp;&nbsp;&nbsp; 12345678900.&nbsp;
1.234568e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+09&nbsp;&nbsp;&nbsp;&nbsp; 1234567890.&nbsp;
1.234568e+08&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+08&nbsp;&nbsp;&nbsp;&nbsp; 123456789.&nbsp;
1.234568e+07&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+07&nbsp;&nbsp;&nbsp;&nbsp; 12345679.&nbsp;
1.234568e+06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+06&nbsp;&nbsp;&nbsp;&nbsp; 1234568.&nbsp;&nbsp;&nbsp;&nbsp; 1234568.&nbsp;
1.234568e+05&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e+03&nbsp;&nbsp;&nbsp;&nbsp; 123456.8&nbsp;&nbsp;&nbsp;&nbsp; 123456.8&nbsp;
1.234568e+04&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e+03&nbsp;&nbsp;&nbsp;&nbsp; 12345.68&nbsp;&nbsp;&nbsp;&nbsp; 12345.68&nbsp;
1.234568e+03&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+03&nbsp;&nbsp;&nbsp;&nbsp; 1234.568&nbsp;&nbsp;&nbsp;&nbsp; 1234.568&nbsp;
1.234568e+02&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e+00&nbsp;&nbsp;&nbsp;&nbsp; 123.4568&nbsp;&nbsp;&nbsp;&nbsp; 123.4568&nbsp;
1.234568e+01&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e+00&nbsp;&nbsp;&nbsp;&nbsp; 12.34568&nbsp;&nbsp;&nbsp;&nbsp; 12.34568&nbsp;
1.234568e+00&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e+00&nbsp;&nbsp;&nbsp;&nbsp; 1.234568&nbsp;&nbsp;&nbsp;&nbsp; 1.234568&nbsp;
1.234568e-01&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.1234568&nbsp;&nbsp;&nbsp;&nbsp; 0.1234568&nbsp;
1.234568e-02&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.01234568&nbsp;&nbsp;&nbsp;&nbsp; 0.0123456&nbsp;
1.234568e-03&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-03&nbsp;&nbsp;&nbsp;&nbsp; 0.001234568&nbsp;&nbsp;&nbsp;&nbsp; 0.0012345&nbsp;
1.234568e-04&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e-06&nbsp;&nbsp;&nbsp;&nbsp; 0.0001234568&nbsp;&nbsp;&nbsp;&nbsp; 0.0001234&nbsp;
1.234568e-05&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-05&nbsp;&nbsp;&nbsp;&nbsp; 0.0000123&nbsp;
1.234568e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-06&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-06&nbsp;&nbsp;&nbsp;&nbsp; 0.0000012&nbsp;
1.234568e-07&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-07&nbsp;&nbsp;&nbsp;&nbsp; 0.0000001&nbsp;
1.234568e-08&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-08&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234568e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-09&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-09&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234568e-10&nbsp;&nbsp;&nbsp;&nbsp; 123.4568e-12&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-10&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000&nbsp;
1.234568e-11&nbsp;&nbsp;&nbsp;&nbsp; 12.34568e-12&nbsp;&nbsp;&nbsp;&nbsp; 1.234568e-11&nbsp;&nbsp;&nbsp;&nbsp; 0.0000000
</pre>
  </dl>
</dl>
<pre><hr WIDTH="100%">
</pre>
<h2> <a NAME="pForth Design"></a>pForth Design</h2>
<h3> <a NAME="'C' kernel"></a>'C' kernel</h3>
<p>The pForth kernel is written in 'C' for portability. The inner interpreter
  is implemented in the function ExecuteToken() which is in pf_inner.c. </p>
<ul>
  <pre>void pfExecuteToken( ExecToken XT );</pre>
</ul>
<p>It is passed an execution token the same as EXECUTE would accept. It handles
  threading of secondaries and also has a large switch() case statement to
  interpret primitives. It is in one huge routine to take advantage of register
  variables, and to reduce calling overhead. Hopefully, your compiler will
  optimise the switch() statement into a jump table so it will run fast. </p>
<h3> <a NAME="Dictionary Structures"></a>Dictionary Structures</h3>
<p>This Forth supports multiple dictionaries. Each dictionary consists of
  a header segment and a seperate code segment. The header segment contains
  link fields and names. The code segment contains tokens and data. The headers,
  as well as some entire dictionaries such as the compiler support words,
  can be discarded when creating a stand-alone app. </p>
<p>[NOT IMPLEMENTED] Dictionaries can be split so that the compile time
  words can be placed above the main dictionary. Thus they can use the same
  relative addressing but be discarded when turnkeying.
<p>Execution tokens are either an index of a primitive ( n &lt; NUM_PRIMITIVES),
  or the offset of a secondary in the code segment. ( n >= NUM_PRIMITIVES
  )
<p>The NAME HEADER portion of the dictionary contains a structure for each
  named word in the dictionary. It contains the following fields:
<ul>
  <pre>bytes 
4 Link Field = relative address of previous name header
4 Code Pointer = relative address of corresponding code
n Name Field = name as counted string Headers are quad byte aligned.</pre>
</ul>
<p>The CODE portion of the dictionary consists of the following structures: </p>
<h4> Primitive</h4>
<p>No Forth code. 'C' code in "pf_inner.c".
</p>
<h4> Secondary</h4>
<ul>
  <pre>4*n Parameter Field containing execution tokens
4 ID_NEXT = 0 terminates secondary</pre>
</ul>
<h4> CREATE DOES></h4>
<ul>
  <pre>4 ID_CREATE_P token
4 Token for optional DOES> code, OR ID_NEXT = 0
4 ID_NEXT = 0
n Body = arbitrary data</pre>
</ul>
<h4> Deferred Word</h4>
<ul>
  <pre>4 ID_DEFER_P same action as ID_NOOP, identifies deferred words
4 Execution Token of word to execute.
4 ID_NEXT = 0</pre>
</ul>
<h4> Call to custom 'C' function.</h4>
<ul>
  <pre>4 ID_CALL_C
4 Pack C Call Info Bits</pre>
  <ul>
    <pre>0-15 = Function Index Bits
16-23 = FunctionTable Index (Unused) Bits
24-30 = NumParams Bit
31 = 1 if function returns value</pre>
  </ul>
  <pre>4 ID_NEXT = 0</pre>
</ul>
<hr WIDTH="100%">
<h2> <a NAME="Compiling_pForth"></a>Compiling pForth</h2>
<p>A makefile is supplied that will help you compile pForth for your environment.
  You can customize the build by setting various compiler options. </p>
<h3> <a NAME="Compiler Options"></a>Compiler Options</h3>
<p>There are several versions of PForth that can be built. By default, the
  full kernel will be built. For custom builds, define the following options
  in the Makefile before compiling the 'C' code: </p>
<p>PF_DEFAULT_DICTIONARY="filename"
<blockquote>Specify a dictionary to use in place of the default "pforth.dic",
  for example "/usr/lib/pforth/pforth.dic".</blockquote>
PF_NO_INIT
<ul>
  Don't compile the code used to initially build the dictionary. This
  can be used to save space if you already have a prebuilt dictionary.
</ul>
PF_NO_SHELL
<ul>
  Don't compile the outer interpreter and Forth compiler. This can be
  used with Cloned dictionaries.
</ul>
PF_NO_MALLOC
<ul>
  Replace malloc() and free() function with pForth's own version. See
  pf_mem.c for more details.
</ul>
PF_USER_MALLOC='"filename.h"'
<ul>
  Replace malloc() and free() function with users custom version. See
  pf_mem.h for details.
</ul>
PF_MEM_POOL_SIZE=numbytes
<ul>
  Size of array in bytes used by pForth custom allocator.
</ul>
PF_NO_GLOBAL_INIT
<ul>
  Define this if you want pForth to not rely on initialization of global
  variables by the loader. This may be required for some embedded systems
  that may not have a fully functioning loader.&nbsp; Take a look in "pfcustom.c"
  for an example of its use.
</ul>
PF_USER_INC1='"filename.h"'
<ul>
  File to include BEFORE other include files. Generally set to host dependent
  files such as "pf_mac.h".
</ul>
PF_USER_INC2='"filename.h"'
<ul>
  File to include AFTER other include files. Generally used to #undef
  and re#define symbols. See "pf_win32.h" for an example.
</ul>
PF_NO_CLIB
<ul>
  Replace 'C' lib calls like toupper and memcpy with pForth's own version.
  This is useful for embedded systems.
</ul>
PF_USER_CLIB='"filename.h"'
<ul>
  Rreplace 'C' lib calls like toupper and memcpy with users custom version.
  See pf_clib.h for details.
</ul>
PF_NO_FILEIO
<ul>
  System does not support standard file I/O so stub it out. Setting this
  flag will automatically set PF_STATIC_DIC.
</ul>
PF_USER_CHARIO='"filename.h"'
<ul>
  Replace stdio terminal calls like getchar() and putchar() with users
  custom version. See pf_io.h for details.
</ul>
PF_USER_FILEIO='"filename.h"'
<ul>
  Replace stdio file calls like fopen and fread with users custom version.
  See pf_io.h for details.
</ul>
PF_USER_FLOAT='"filename.h"'
<ul>
  Replace floating point math calls like sin and pow with users custom
  version. Also defines PF_FLOAT.
</ul>
PF_USER_INIT=MyInit()
<ul>
  Call a user defined initialization function that returns a negative
  error code if it fails.
</ul>
PF_USER_TERM=MyTerm()
<ul>
  Call a user defined void termination function.
</ul>
PF_STATIC_DIC
<ul>
  Compile in static dictionary instead of loading dictionary. from file.
  Use "utils/savedicd.fth" to save a dictionary as 'C' source code in a file
  called "pfdicdat.h".
</ul>
PF_SUPPORT_FP
<ul>
  Compile ANSI floating point support.
</ul>
<h3> <a NAME="Building pForth on Supported Hosts"></a>Building pForth on Supported
  Hosts</h3>
<p>To build on UNIX, do nothing, system will default to "pf_unix.h".
</p>
<p>To build on Macintosh:
<ul>
  <pre>-DPF_USER_INC1='"pf_mac.h"'</pre>
</ul>
<p>To build on PCs: </p>
<ul>
  <pre>-DPF_USER_INC2='"pf_win32.h"'</pre>
</ul>
<p>To build a system that only runs turnkey or cloned binaries: </p>
<ul>
  <pre>-DPF_NO_INIT -DPF_NO_SHELL</pre>
</ul>
<h3> <a NAME="Compiling for Embedded Systems"></a>Compiling for Embedded Systems</h3>
<p>You may want to create a version of pForth that can be run on a small system
  that does not support file I/O. This is useful when bringing up new computer
  systems. On UNIX systems, you can use the supplied gmake target. Simply
  enter: </p>
<ul>
  <pre>gmake pfemb</pre>
</ul>
For other systems, here are the steps to create an embedded pForth.
<ol>
  <li> Determine whether your target system has a different endian-ness than your
    host system.&nbsp; If the address of a long word is the address of the
    most significant byte, then it is "big endian". Examples of big endian
    processors are Sparc, Motorola 680x0 and PowerPC60x.&nbsp; If the address
    of a long word is the address of the lest significant byte, then it is
    "Little Endian". Examples of little endian processors are Intel 8088 and
    derivatives such as the Intel Pentium, X86. ARM processors can be configured as either big or little endian.</li>
  <li> If your target system has a different endian-ness than your host system,
    then you must compile a version of pForth for your host that matches the
    target.&nbsp; Rebuild pForth with either PF_BIG_ENDIAN_DIC or PF_LITTLE_ENDIAN_DIC
    defined.&nbsp; You will need to rebuild pforth.dic as well as the executable
    Forth.&nbsp; If you do not specify one of these variables, then the dictionary
    will match the native endian-ness of the processor (and run faster as a
    result).</li>
  <li> Execute pForth. Notice the message regarding the endian-ness of the dictionary.</li>
  <li> Compile your custom Forth words on the host development system.</li>
  <li> Compile the pForth utulity "utils/savedicd.fth".</li>
  <li> Enter in pForth: SDAD</li>
  <li> SDAD will generate a file called "pfdicdat.h" that contains your dictionary
    in source code form.</li>
  <li> Rewrite the character primitives sdTerminalOut(), sdTerminalIn() and sdTerminalFlush()
    defined in pf_io.h to use your new computers communications port.</li>
  <li> Write a "user_chario.h" file based on the API defined in "pf_io.h".</li>
  <li> Compile a new version of pForth for your target machine with the following
    options:</li>
  <ol>
    <pre>-DPF_NO_INIT -DPF_NO_MALLOC -DPF_NO_FILEIO \
-DPF_USER_CHARIO="user_chario.h" \
-DPF_NO_CLIB -DPF_STATIC_DIC</pre>
  </ol>
  <li> The file "pfdicdat.h" will be compiled into this executable and your dictionary
    will thus be included in the pForth executable as a static array.</li>
  <li> Burn a ROM with your new pForth and run it on your target machine.</li>
  <li> If you compiled a version of pForth with different endian-ness than your
    host system, do not use it for daily operation because it will be much
    slower than a native version.</li>
</ol>
<h3> <a NAME="Link_Custom_C"></a>Linking with Custom 'C' Functions</h3>
<p>You can call the pForth interpreter as an embedded tool in a 'C' application.
  For an example of this, see the file pf_main.c. This application does nothing
  but load the dictionary and call the pForth interpreter. </p>
<p>You can call 'C' from pForth by adding your own custom 'C' functions
  to a dispatch table, and then adding Forth words to the dictionary that
  call those functions. See the file "pfcustom.c" for more information.
<h3> <a NAME="Testing your Compiled pForth"></a>Testing your Compiled pForth</h3>
<p>Once you have compiled pForth, you can test it using the small verification
  suite we provide.&nbsp; The first test you should run was written by John
  Hayes at John Hopkins University.&nbsp; Enter:
</p>
<ul>
  <pre>pforth
include tester.fth
include coretest.fth
bye</pre>
</ul>
<p>The output will be self explanatory.&nbsp; There are also a number of tests
  that I have added that print the number of successes and failures. Enter:
</p>
<ul>
  <pre>pforth t_corex.fth
pforth t_locals.fth
pforth t_strings.fth
pforth t_floats.ft</pre>
</ul>
<p>Note that t_corex.fth reveals an expected error because SAVE-INPUT is not
  fully implemented. (FIXME) <br>
</p>
<hr WIDTH="100%">
<p><br>
  PForth source code is freely available.&nbsp; The author is available
  for customization of pForth, porting to new platforms, or developing pForth
  applications on a contractual basis.&nbsp; If interested, contact <a href="http://www.softsynth.com/contacts.php">Phil Burk</a>
</p>
<p>Back to <a href="../pforth">pForth Home Page</a>
  <br class="clearfloat"/>
<!-- end content div ******************************** -->
</div>

<div id="footer">
  <p class="copyright">(C) 1997-2012 Mobileer Inc - All Rights Reserved - <a href="/contacts.php">Contact Us</a></p>
</div>
<!-- end container div ******************************** -->
</div>
<!-- Google analytics go here. -->
</body>
</html>
