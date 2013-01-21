#!/bin/bash
# emails new ip addresses as detected
email="my@email.com"
newip="`getip.sh`"

if [ "$newip" = "" ]; then
        echo "error, new ip blank"
        exit
fi
currentip=`cat bin/current_ip`
if [ "$newip" != "$currentip" ]; then
        echo "ip has changed"
        echo -e "Old ip: $currentip\nNew ip: $newip" | mail -s "Home ip changed to $newip" "$email"
        echo $newip > current_ip
fi
