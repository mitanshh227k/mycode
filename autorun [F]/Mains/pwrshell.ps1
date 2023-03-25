$(Get-Content F:\C.txt).ForEach({'{0},' -f $_ }) | Set-Content F:\C.txt;
$(Get-Content F:\D.txt).ForEach({'{0},' -f $_ }) | Set-Content F:\D.txt;

Get-Content F:\C.txt| foreach{
    $out = $out + $_
   }
   $out| Out-File F:\C.txt


   Get-Content F:\D.txt| foreach{
    $out = $out + $_
   }
   $out| Out-File F:\D.txt

$C = Get-Content -Path F:\C.txt
$D = Get-Content -Path F:\D.txt
$wshell = New-Object -ComObject wscript.shell;Start "powershell.exe" -WindowStyle Minimized;Start-Sleep 6;$wshell.SendKeys('Copy-Item ');$wshell.SendKeys($C);$wshell.SendKeys($D);$wshell.SendKeys('{BACKSPACE}');$wshell.SendKeys(' -Destination ');$wshell.SendKeys('F:\Mains\Rsults\ -PassThru ');$wshell.SendKeys('~');$wshell.SendKeys('exit');$wshell.SendKeys('~');
exit