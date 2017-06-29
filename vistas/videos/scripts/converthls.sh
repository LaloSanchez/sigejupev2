#!/bin/bash

if [ -z $1 ]; then
    echo "VAR is unset or set to the empty string"
    exit 0;
fi

./Bento4-SDK-1-4-3-608/bin/mp42hls $1.mp4 --index-filename $1.m3u8 --segment-filename-template $1-%d.ts
/usr/bin/sed -i "s/segment/$1/g" $1.m3u8 





