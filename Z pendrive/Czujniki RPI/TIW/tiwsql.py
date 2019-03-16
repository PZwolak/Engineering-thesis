import MySQLdb
import subprocess
import time
import datetime
import linecache
import math

import decimal

import os,sys

import numpy as np


cc=0
dd=0
while True:
    tab=[]
    tabb=[]
    licz=0
    aa=0
    bb=0
    t=0
    w=0
    c=0
    a=0
    b=0
    d=0
    xt='aaa'
    while licz<6:
        p=subprocess.Popen('/home/pi/Desktop/TIW/./a.out')
        time.sleep(5)
        plik=open('tekst.txt','r')
        try:
            t=plik.readline()
            w=plik.readline()
            while t=='':
                print('Blad tych liczb')
                t=cc
            while w=='':
                print('Blad tych liczb2')
                w=dd
            cc=t
            dd=w
            t=float(t)
            w=float(w)
        finally:
            plik.close()
        cc=t
        dd=w
        tab.append(t)
        tabb.append(w)
        licz+=1
        time.sleep(5)
        print('temp',t)
        print('wilg',w)
    for a in tab:
        #a=float(a)
        #c=float(c)
        c=c+a
        print(a)
        
    for b in tabb:
        #b=float(b)
        #d=float(d)
        d=d+b
        print(b)
    
    db = MySQLdb.connect("localhost","root","nokia6630","RPIDB" )
    cursor=db.cursor()
    c=c/6
    #c=float(c)
    c=round(c,1)
    print('ccc:',c)
    
    d=d/6
    #d=float(d)
    d=round(d,1)
    print('ddd:',d)
    
    xt=time.strftime('%Y-%m-%d %H:%M:%S')
    cursor.execute("INSERT INTO tiwsql (date,tiw,wilg)\
                    VALUES ('%s','%s','%s')"%(xt,c,d));
    db.commit()
    db.close()
