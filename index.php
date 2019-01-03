﻿<!DOCTYPE html>
<html>
<head>

 <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
 <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">

 <link rel="stylesheet"  href="./main.css">

 <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon" />


 <title>NFA|DFA</title>

</head>

<body>
 <div class='entire'>
     <svg class='scene'  xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">

     </svg>

     <div class='middle-text'></div>

     <div class='operations'>
       <button class='operation' onclick='openOperationInputSpan(0);' disabled>
          New State
          <BR>
          <span class='input'>
            <input type='text' maxlength='3' placeholder='Label' />
            <span class='set' onclick='addState(optionInputs[0].value.trim(),nfa);'>Go</span>
          </span>
       </button>
       <button class='operation' onclick='openOperationInputSpan(1);' disabled>
          New Arrow
          <BR>
          <span class='input'>
            <input type='text' maxlength='3' placeholder='Label' />
            <span class='set' onclick='addArrow(optionInputs[1].value.trim(),nfa);'>Go</span>
          </span>
       </button>
       <button class='operation' onclick='openOperationInputSpan(2);' disabled>
          Edit
          <BR>
          <span class='input'>
            <input type='text' maxlength='3' placeholder='Label' />
            <span class='set' onclick='setElementLabel();'>Done</span>
          </span>
       </button>
       <button class='operation' onclick='deleteElement();' disabled>
          Delete
       </button>
       <button class='operation' onclick='createDFAfromNFA();' disabled>
          Convert To DFA
       </button>
       <button class='operation' onclick='backToNFA();' disabled>
          Back To NFA
       </button>
       <button class='operation' onclick='minimizeDFA();' disabled>
          Minimize DFA
       </button>
       <button class='operation' onclick='backToDFA();' disabled>
          Back To DFA
       </button>
       <form action="./download.php"  class='export' target="_blank" method='POST' onsubmit='return exportJSON(event);'>
         <input type='hidden' name='data' value=''>
         <button type='submit' class='operation' onclick='' disabled>
            Export NFA+DFA
         </button>
       </form>
     </div>
     <span class='close-operations' onclick='menuDropper();'><img src='./icons/drop_down_icon.png' /></span>

     <span class='main-log'></span>
     <span class='nfa-logo'><img src='./logo/logo.png' /> <BR> NFA|DFA</span>
 </div>
 <div class='device-width-err'>
   Your Browser Width Is Too Small For This Page. Please Increase Browser Width In Order To See The Content of This Page <BR> (Wider Than 1200 Pixels Is Required)
 </div>
</body>

<script language="javascript" type='text/javascript' src='./jquery-3.1.1.min.js'></script>
<script language="javascript" type='text/javascript' src='./main.js'></script>

</html>









































