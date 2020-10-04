import os


def del_file(file_type):#删除当前文件夹下的文件
    path = os.getcwd()#返回当前文件夹路径
    files = os.listdir(path)#返回当前文件夹下的所有文件名
    for name in files:
        if file_type in name:
            os.remove(name)
            print("删除" + name + "成功！")


fname = ['.txt', '.csv', '.jpg']


def start_delete():
    for t in fname:
        del_file(t)
