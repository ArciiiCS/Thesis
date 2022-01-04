import numpy as np
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="python_db"
)

mycursor = mydb.cursor()


np.seterr(divide='ignore', invalid='ignore')
import pandas as pd
import statsmodels.api as sm
from statsmodels.formula.api import ols
#create data
import csv





df = pd.DataFrame({'Variable_A':['SULU','BASILAN','LANAO','MAGUINDANAO','SULU','SULU','BASILAN'],
               'Variable_B': ['Prison','Delay','Prison','Imig','Delay','Prison','Prison'],
               'Variable_E': [32,32,45,21,17,29,19]})



print(df)
print("------------------------------------------------")

print("------------------------------------------------")


model = ols('Variable_E ~ C(Variable_A) + C(Variable_B) + C(Variable_A):C(Variable_B)', data=df).fit()
rawr = sm.stats.anova_lm(model, typ=2)
sm.stats.anova_lm(model, typ=2)
print(sm.stats.anova_lm(model, typ=2))

x=str(  ).replace(" ","")


#pano ko to iinsert sa database?
sql = "INSERT INTO test_table (dataA) VALUES (%s)"
val = (x,)
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")



# ETO PANG TWO WAY check mo nalang ulit link para magets
#https://www.statology.org/two-way-anova-python/

