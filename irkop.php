<?php 
date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i:s');

$ban = "
\e[1;32m╔╔═\e[1;39m═╦═╦\e[1;33m═══╦═\e[1;34m══╦═\e[1;36m╦═══\e[1;31m╦═══\e[1;30m═╗═╗     
\e[1;31m║║\e[1;36;41m        INDONESIA      \e[1;38;40m║ ║  
\e[1;32m║║\e[1;39;41m      MESIN TERMUX     \e[1;35;40m║ ║  
\e[1;33m║║\e[1;39;41m        WONG JOWO      \e[1;34;40m║ ║
\e[1;34m║║\e[1;33;47m                       \e[1;33;40m║ ║ \e[31;42m⏰".date('H:i:s')."⏰\e[1;32;0m
\e[1;35m║║\e[1;31;47m         WARNING       \e[1;32;40m║ ║\e[1;35m $cc
\e[1;36m║║\e[0;31;47m   \033[1;31m ! NOT FOR SALE ! \e[1;36m  \e[1;36;40m║ ║
\e[0;37m║╚═\e[1;36m═╝─╚\e[1;35m════\e[1;34m════\e[1;33m════\e[1;32m══╝─╚\e[1;31m═╝ ║
\e[1;32m╚╩═\e[1;35m════\e[1;31m════\e[1;33m════\e[1;30m════\e[1;36m═════\e[1;39m═╩═╝

";

function irkop(){
for($i=0;$i<3;$i++){
echo " \e[1;37m             [!] WARNING [!] \r";sleep(1);
echo "\e[1;35m              [!] WARNING [!] \r";sleep(1);
echo "\e[1;31m              [!] WARNING [!] \r";sleep(1);
}
echo "                                    \r";
echo "\e[1;31m              [!] WARNING [!] \n\n";sleep(1);


$jg = "\e[1;31m[!]\e[0;34m JANGAN SALAHKAN SOPIR JIKA PENUMPANG DI BAN\e[1;31m [!]\n";
for($i=0;$i<103;$i++){
echo $jg[$i];usleep(50000);}
$sub = " \033[0;32m[!]\033[1;36mJANGAN LUPA \033[0;39;41mSubscribe Channel\033[1;36;40m ANDA SENDIRI\033[0;32m[!]";
for($i=0;$i<103;$i++){
echo $sub[$i]; usleep(50000);}

echo "

";
sleep(1);
for($i=0;$i<101;$i++){
echo "       \033[1;31;46m OTW MLEBU {$i}% \033[1;36;40m\r";
 usleep(90000);}
 
 echo "                                    \r\n";
}




function ban(){
for($i=0;$i<strlen($ban);$i++){
echo $ban[$i];usleep(10000);}
}


 
