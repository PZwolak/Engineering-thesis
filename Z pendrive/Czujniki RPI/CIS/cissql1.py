import MySQLdb
import Adafruit_BMP.BMP085 as BMP085
import time
#import sys
#import smbus

sensor = BMP085.BMP085()

while True:
    tab=[]
    tabb=[]
    tabbb=[]
    licz=0
    c=0
    a=0
    b=0
    f=0
    d=0
    e=0
    g=0
    xt='aaa'
    while licz<6:
        x=format(sensor.read_pressure()*0.01)
        x=float(x)
        cis=round(x,1)
        cis=float(cis)
        tab.append(cis)
        
        y=format(sensor.read_altitude())
        y=float(y)
        alt=round(y,1)
        alt=float(alt)
        tabb.append(alt)

        z=format(sensor.read_temperature())
        z=float(z)
        temp1=round(z,1)
        temp1=float(temp1)
        tabbb.append(temp1)
        
        licz+=1
        time.sleep(10)
        
    for a in tab:
        a=float(a)
        c=float(c)
        c=c+a
        
    for b in tabb:
        b=float(b)
        d=float(d)
        d=d+b
        
    for g in tabbb:
        g=float(g)
        e=float(e)
        e=e+g
    
    db = MySQLdb.connect("localhost","root","nokia6630","RPIDB" )
    cursor=db.cursor()
    c=c/6
    c=float(c)
    c=round(c,1)
    
    d=d/6
    d=float(d)
    d=round(d,1)
    
    e=e/6
    e=float(e)
    e=round(e,1)
    
    xt=time.strftime('%Y-%m-%d %H:%M:%S')
    cursor.execute("INSERT INTO cissql (date,cis,alt,temp1)\
                    VALUES ('%s','%s','%s','%s')"%(xt,c,d,e));
    db.commit()
    db.close()
