#!/bin/bash

source ~/.env_linaweb

#DELETE="--delete"
lftp -c "set ftp:list-options -a;
set ssl:verify-certificate false;
open '$FTPURL';
lcd $LCD;
cd $RCD;
mirror --parallel=10 \
       --reverse \
       $DELETE \
       --verbose \
       --exclude-glob a-dir-to-exclude/ \
       --exclude-glob a-file-to-exclude \
       --exclude-glob a-file-group-to-exclude* \
       --exclude-glob other-files-to-exclude"
