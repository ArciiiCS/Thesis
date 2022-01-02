#!C:\Users\Arciii\AppData\Local\Programs\Python\Python38\python

print("Context-Type: text/html")
print()
import cgi

form = cgi.FieldStorage()

getNum1 = form.getvalue("num1")
getNum2 = form.getvalue("num2")
theSUM  = int(getNum1) + int(getNum2)

print(theSUM)

