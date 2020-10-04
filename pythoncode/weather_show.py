import matplotlib.pyplot as plt
plt.rcParams['font.sans-serif'] = ['SimHei']#解决字体问题
plt.rcParams['axes.unicode_minus'] = False


def show(rank, title, order):#绘图函数，
    X = []
    Y = []
    for a in rank:
        X.append(a[0])
        Y.append(a[1])
    plt.title(title, fontsize=20)
    plt.ylabel("温度/℃")
    plt.xlabel("城市")
    plt.bar(X, Y, width=0.4, alpha=0.7, label='城市名称', color='g')
    for a, b in zip(X, Y):#标记y值
        plt.text(a, b+0.05, '%.0f' % b, ha='center', va='bottom', fontsize=7)
    plt.savefig(order + title + ".jpg")#保存
    plt.close('all')#使用后关闭，不然会一直累计
    print("制图成功！")


def start_show():#数据排序，并调用绘图函数
    data_weather = {}
    num = 0
    for a in range(1, 8):#调用七日的数据
        filename = str(num)
        with open(filename + '.txt', encoding='utf-8') as f:
            weather_info = f.readlines()
            for i in weather_info:
                line = i.strip()
                data = line.split()
                data_weather[data[0]] = int(data[4])
            bottom = sorted(data_weather.items(), key=lambda item: item[1])#根据气温排正序
            top = sorted(data_weather.items(), key=lambda item: item[1], reverse=True)
        top_10 = top[:10]
        bottom_10 = bottom[:10]
        show(top_10, "温度最高的十个城市", filename)
        show(bottom_10, "温度最低的十个城市", filename)
        num += 1
