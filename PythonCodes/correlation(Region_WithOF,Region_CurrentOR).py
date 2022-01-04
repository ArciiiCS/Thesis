import numpy as np
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="python_db"
)

mycursor = mydb.cursor()
import scipy.stats
import matplotlib.pyplot as plt
plt.style.use('ggplot')
x = np.arange(1, 18) #x-ranges
y = np.array([17.3,16,18,21.9,7.2,13.3,6.6,8.5,14.2,10.2,8.3,9.9,10.5,11,9.4,5.4,23.8])#y-ranges
z = np.array([5, 3, 2, 1, 0, -2, -8, -11, -15, -16]) #3rd dimension of da graph
slope, intercept, r, p, stderr = scipy.stats.linregress(x, y)


s = str(scipy.stats.pearsonr(x, y))
ss = str(scipy.stats.spearmanr(x, y))   
sss = str(scipy.stats.kendalltau(x, y))

print(scipy.stats.pearsonr(x, y))
print(scipy.stats.spearmanr(x, y))
print(scipy.stats.kendalltau(x, y))



#pano ko to iinsert sa database?
sql = "INSERT INTO correlationtable (Pearsons,Spearmans,Kendalltau) VALUES (%s,%s,%s)"
val = (s,ss,sss)
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")


line = f'Regression line: y={intercept:.2f}+{slope:.2f}x, r={r:.2f}'
fig, ax = plt.subplots()
ax.plot(x, y, linewidth=0, marker='s', label='Data points')
ax.plot(x, intercept + slope * x, label=line)
ax.set_xlabel('x')
ax.set_ylabel('y')
ax.legend(facecolor='white')
plt.show()

#https://realpython.com/numpy-scipy-pandas-correlation-python/



