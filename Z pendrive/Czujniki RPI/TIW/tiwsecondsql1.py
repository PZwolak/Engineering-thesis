import MySQLdb
import subprocess
import time
import datetime
import linecache

db = MySQLdb.connect("localhost","root","nokia6630","RPIDB" )

t=0
w=0
while True:
    p=subprocess.Popen('/home/pi/Desktop/TIW/./a.out')
    time.sleep(1)
    plik=open('tekst.txt','r')
    try:
        t=plik.readline()
        #t=float(t)
        #t=round(t,1)
        #print t
        w=plik.readline()
        #w=float(w)
        #w=round(w,1)
        #print w
    finally:
        plik.close()

    cursor=db.cursor()
    cursor.execute("UPDATE tiwsecond SET temp2='%s'"%(t))

    cursor=db.cursor()
    cursor.execute("UPDATE tiwsecond SET wilg='%s'"%(w))

    db.commit()
    time.sleep(1)

db.close()
