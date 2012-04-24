#! /usr/bin/python
from ftplib import *

def ftp_walk(ftp):    
    print 'Path:', ftp.pwd()
    dirs = ftp.nlst()
    for item in (path for path in dirs if path not in ('.', '..')):
        try:
            ftp.cwd(item)
            print 'Changed to', ftp.pwd()
	    try:
                ftp_walk(ftp)
	    finally:
                ftp.cwd('..')
        except Exception, e:
            print item, e

ftp = FTP('james.muszelka.pw.edu.pl')                                        
ftp.login()
ftp_walk(ftp)
