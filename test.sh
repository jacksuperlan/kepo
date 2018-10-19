#!/bin/sh

for i in `ls /tmp/sess_* -S `
do
echo "<pre>------------------------------"
 cat $i;
echo "++++++++++++++++++++++++++++++</pre><BR>"

done
