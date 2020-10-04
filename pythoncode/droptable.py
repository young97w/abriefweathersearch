#导入pymysql方法
import pymysql
import os


def drop_table():
    #连接数据库
    config = {'host':'localhost',
            'port':/**/,
            'user':'/**/',
            'passwd':'/**/',
            'charset':'utf8mb4',
            'local_infile':1
            }
    conn = pymysql.connect(**config)
    cur = conn.cursor()

    drs = ["DROP TABLE IF EXISTS `weather`.`day0`;",
        "DROP TABLE IF EXISTS `weather`.`day1`;",
        "DROP TABLE IF EXISTS `weather`.`day2`;",
        "DROP TABLE IF EXISTS `weather`.`day3`;",
        "DROP TABLE IF EXISTS `weather`.`day4`;", 
        "DROP TABLE IF EXISTS `weather`.`day5`;",
        "DROP TABLE IF EXISTS `weather`.`day6`;",
        "DROP TABLE IF EXISTS `weather`.`weather`;",
        ]
    for dr in drs:
        cur.execute(dr)
        print("删除表格成功！")
