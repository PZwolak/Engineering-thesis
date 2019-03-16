import MySQLdb
import sys
import time

a=0
while True:
    db = MySQLdb.connect("localhost","root","nokia6630","TEST" )
    cursor = db.cursor()

    #cursor.execute("INSERT INTO EMPLOYEE(FIRST_NAME, \
            # LAST_NAME, AGE, SEX, INCOME) \
            # VALUES ('Pan', 'a', '3', 'M', 20030)")

    #cursor.execute("INSERT INTO EMPLOYEE(FIRST_NAME, \
          # LAST_NAME, AGE, SEX, INCOME) \
          # VALUES ('%s', '%s', '%d', '%c', '%d' )" % \
           #('Mac', 'Mohan', a, 'M', 2000))

    cursor.execute("UPDATE EMPLOYEE SET AGE='%d'"%(a))
          
    #cursor.execute("SELECT * FROM EMPLOYEE")
    #results=cursor.fetchall()
    #for row in results:
        #age = row[2]
        #income=row[4]
        #print"age=%d"%(income)
          
    a=a+1
    db.commit()        
    db.close()
    time.sleep(1)
