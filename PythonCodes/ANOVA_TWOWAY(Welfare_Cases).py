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





df = pd.DataFrame({'Variable_A':['Maltreatment','ContractViolation','ContractSubstitutions','MedicalProblems','PersonalProblems','Immigration','SexualAbuse','Rape','Others'],
               'Variable_B': ['distressed','stressed','distressed','stressed','distressed','stressed','distressed','stressed','distressed'],
               'Variable_E': [18911,44289,6073,7644,8245,9033,2457,914,29487]})



print(df)
print("------------------------------------------------")

print("------------------------------------------------")


model = ols('Variable_E ~ C(Variable_A) + C(Variable_B) + C(Variable_A):C(Variable_B)', data=df).fit()
rawr = sm.stats.anova_lm(model, typ=2)
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

