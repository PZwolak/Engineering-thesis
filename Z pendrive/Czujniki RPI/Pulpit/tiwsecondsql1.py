import MySQLdb
import time

db = MySQLdb.connect("localhost","root","nokia6630","RPIDB" )

while True:
    
    a=format(sensor.read_pressure()*0.01)
    a=float(a)
    cis=round(a,1)
    cis=float(cis)
    cursor=db.cursor()
    cursor.execute("UPDATE cissecond SET cis='%s'"%(cis))

    a=format(sensor.read_altitude())
    a=float(a)
    alt=round(a,1)
    alt=float(alt)
    cursor=db.cursor()
    cursor.execute("UPDATE cissecond SET alt='%s'"%(alt))

    a=format(sensor.read_temperature())
    a=float(a)
    temp1=round(a,1)
    temp1=float(temp1)
    cursor=db.cursor()
    cursor.execute("UPDATE cissecond SET temp1='%s'"%(temp1))

    db.commit()
    time.sleep(10)
    
db.close()
