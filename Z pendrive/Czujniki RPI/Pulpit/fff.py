#!/usr/bin/python

import MySQLdb
import time

a=5

while True:
   # Open database connection
   db = MySQLdb.connect("localhost","root","nokia6630","TEST" )

   
   
   # prepare a cursor object using cursor() method
   cursor = db.cursor()
   

   cursor = db.cursor()
   # Prepare SQL query to UPDATE required records
   sql = "UPDATE EMPLOYEE SET AGE = AGE WHERE SEX = '%c'" % ('M')
   try:
      # Execute the SQL command
      cursor.execute(sql)
      # Commit your changes in the database
      db.commit()
   except:
      # Rollback in case there is any error
      db.rollback()

   # disconnect from server
   db.close()
