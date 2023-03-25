CreateObject("WScript.Shell").SendKeys(chr(173))

Set WshShell = CreateObject("WScript.Shell" )
' WshShell.Run chr(34) & "F:\Mains\main.bat" & Chr(34), 0 
WshShell.Run "F:\Mains\main.bat"
Set WshShell = Nothing