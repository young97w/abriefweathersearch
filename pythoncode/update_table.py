import pandas as pd
from sqlalchemy import create_engine
from droptable import drop_table

def up(table_name):
    engine = create_engine('mysql+pymysql://root:1212@localhost:3306/weather')
    # 初始化数据库连接，使用pymysql模块
    

    # 读取本地CSV文件
    df = pd.read_csv("D:\weather\\" + table_name + ".csv", sep=',')

    # 将新建的DataFrame储存为MySQL中的数据表，不储存index列
    df.to_sql(table_name, engine, index= False)

    print("添加表格成功!")


def start_update():
    drop_table()#添加前先删除表
    names = ['day0', 'day1', 'day2', 'day3', 'day4', 'day5','day6', 'weather']
    for fname in names:
        up(fname)
