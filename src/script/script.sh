#!/bin/bash
#or whatever shell you use

logf=script/log.log #logfilename
dbgf=/home/toor/debug #debug file
if [ ! -f $logf ]; then
    touch $logf #create file  if doesnot exisrs
     echo "elif ran" > $dbgf
else
    echo "***" >> $logf
fi

echo "`whoami` Working on file $1 " >> $logf
max_num=10
timeout=1

for ((i=0;i<$max_num;i++)); do
    echo "Outpit line number $i"  >> $logf
    sleep $timeout
done
