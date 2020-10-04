import pandas as pd


def start_convert():
    city, condition, temp, wind, wind_class = [], [], [], [], []
    condition_night, temp_night, wind_night, wind_class_night = [], [], [], []
    num = 0
    for a in range(1, 8):#通过循环将txt文件转换为csv文件
        filename = str(num)
        with open(filename + '.txt', encoding='utf-8') as f:
            weather_info = f.readlines()
            for i in weather_info:
                line = i.strip()
                data = line.split()
                city.append(data[0])
                condition.append(data[1])
                wind.append(data[2])
                wind_class.append(data[3])
                temp.append(data[4])
                condition_night.append(data[5])
                wind_night.append(data[6])
                wind_class_night.append(data[7])
                temp_night.append(data[8])
        data_weather = pd.DataFrame()
        data_weather['city'] = city
        data_weather['condition'] = condition
        data_weather['temp'] = temp
        data_weather['wind'] = wind
        data_weather['wind_class'] = wind_class
        data_weather['condition_night'] = condition_night
        data_weather['temp_night'] = temp_night
        data_weather['wind_night'] = wind_night
        data_weather['wind_class_nigh'] = wind_class_night
        data_weather.to_csv('day' + filename + ".csv", index=False, encoding='utf-8')
        print("文件已转换为csv格式！")
        city, condition, temp, wind, wind_class = [], [], [], [], []
        condition_night, temp_night, wind_night, wind_class_night = [], [], [], []
        num += 1
    with open('weather.txt', encoding='utf-8') as f:#转换weather.txt为csv文件
        weather_info = f.readlines()
        for i in weather_info:
            line = i.strip()
            data = line.split()
            city.append(data[0])
            condition.append(data[1])
            wind.append(data[2])
            wind_class.append(data[3])
            temp.append(data[4])
            condition_night.append(data[5])
            wind_night.append(data[6])
            wind_class_night.append(data[7])
            temp_night.append(data[8])
    data_weather = pd.DataFrame()
    data_weather['city'] = city
    data_weather['condition'] = condition
    data_weather['temp'] = temp
    data_weather['wind'] = wind
    data_weather['wind_class'] = wind_class
    data_weather['condition_night'] = condition_night
    data_weather['temp_night'] = temp_night
    data_weather['wind_night'] = wind_night
    data_weather['wind_class_night'] = wind_class_night
    data_weather.to_csv('weather.csv', index=False, encoding='utf-8')
    print("文件已转换为csv格式！")
