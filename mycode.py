import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    database="python_db")

mycursor= mydb.cursor()

mycursor.execute("SELECT * FROM test_table")

myresult = mycursor.fetchall()

for x in myresult:
    print(x)
