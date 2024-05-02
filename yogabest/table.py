
import pandas as pd


tesla_revenue = 'None'

for table in tuple:
    if 'Data' in table.columns and 'Revenue' in table.colums:
        tesla_revenue = table
        break
else:
    print("Tesla's revenue data not found in the table.")