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





df = pd.DataFrame({'Variable_A':['SA', 'UAE','QA','SA','UAE','UAE','UAE','SA','YE','HK','SA','SA','UAE'],
               'Variable_B': ['prison','imig','prison','prison','imig','delay','prison','delay','imig','delay','delay','delay','others'],

               'Variable_E': [34,25,22,34,34,32,19,32,21,17,32,32,19]})




print(df)
print("------------------------------------------------")

print("------------------------------------------------")


model = ols('Variable_E ~ C(Variable_A) + C(Variable_B) + C(Variable_A):C(Variable_B)', data=df).fit()
sm.stats.anova_lm(model, typ=2)
print(sm.stats.anova_lm(model, typ=2))

x=str(rawr).replace(" ","")


#pano ko to iinsert sa database?
sql = "INSERT INTO test_table (dataA) VALUES (%s)"
val = (x,)
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")


# ETO PANG TWO WAY check mo nalang ulit link para magets
#https://www.statology.org/two-way-anova-python/

