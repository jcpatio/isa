function NewWindow(topage, w, h, scroll) {
   myname="fotos"
   var winl = (screen.width - w) / 2;
   var wint = (screen.height - h) / 3;
   winprops =
   "height="+h+",width="+w+",top="+wint+",left="+winl+
   ",scrollbars=" +scroll + ",resizable=no,status=no"
   win = window.open(topage, myname, winprops)
   if (parseInt(navigator.appVersion) >= 4) 
   { 
   win.window.focus(); 
   }
   }




