import linecache
file_cache = []


def data_cut(filename, head, tail):#切片函数，只分割单独一天的信息，并保存
    for i in range(head, tail + 1):
        a = linecache.getline('weather.txt', i)
        file_cache.append(a)
    with open(filename, 'a', encoding='utf-8') as f:
        for e in file_cache:
            f.write(e)      
    file_cache.clear()#清空内容，为下一轮信息暂存做准备
    print("文件分割成功！")


def cut_parameter(head_p, tail_p, step_p):#进一步分解传入的参数，按循环分割每一天的参数
    i = 0
    for a in range(head_p, tail_p + 1, step_p):#结束位置加一，不然range函数到不了
        fn = str(i) + '.txt'
        data_cut(fn, a, a + step_p - 1)#步长减一，不然会读取下一日的信息
        i += 1


def start_slice():#开始切片，传入已经设置的参数，参数为该地区数据的起始位置与终止位置，重复步长
    cut_parameter(1, 483, 69)
    cut_parameter(484, 735, 36)
    cut_parameter(736, 1400, 95)
    cut_parameter(1401, 1743, 49)
    cut_parameter(1744, 2135, 56)
    cut_parameter(2136, 2555, 60)
    cut_parameter(2556, 3199, 92)
    cut_parameter(3200, 3234, 5)
