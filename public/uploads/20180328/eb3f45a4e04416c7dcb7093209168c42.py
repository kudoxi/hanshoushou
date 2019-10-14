#__author__:baobao
#date:2018/3/25

p_list = {
    "浙江省":{
        "杭州市":{"下城区","上城区","江干区"},
        "湖州市":{"吴兴区","南浔区","德清县"},
        "宁波市":{"镇海区","余姚市","慈溪市"},
    },
    "四川省":{
        "成都市":{"武侯区","锦江区","金牛区"},
        "绵阳市":{"涪城区","游仙区","安州区",},
    },
    "上海市":{
        "上海市":{"静安区","浦东新区","宝山区",},
    },
    "吉林省":{
        "长春市":{'南关区','朝阳区','双阳区'},
        "白山市":{'浑江区','抚松县','	临江市'},
        "延边":{'延吉市','龙井市','和龙市'},
    },
    "天津市":{
        "天津市":{"北辰区",'和平区','静海区'}
    },
}
#初始化变量
flag = True
choose = {"province":0,"city":0,"dist":0}
province_list = list(p_list.keys())
#定义方法
def choose_province():
    global  flag
    #一个都还没选择
    if choose['province'] == 0:
        #展示所有省
        for i,v in enumerate(province_list,1):
            print("省：{name},编号：{num}".format(name=v,num=i ))
        province = input("请选择省[选q退出]：")
        if province.isdigit():
            choose['province'] = province
            flag = True
        elif province == 'q':
            flag = False
        else:
            print("编号格式错误")
            flag = True

    #已经选择了省,要选择市
    elif choose['province'] != 0 and choose['city'] == 0:
        choose_province = int(choose['province'])
        city_list = list(list(p_list.values())[choose_province - 1].keys())
        for i,v in enumerate(city_list,1):
            print("市：{name},编号：{num}".format(name=v,num=i ))
        city = input("请选择市[选q退出][选r返回上一级]：")
        if city.isdigit():
            choose['city'] = city
            flag = True
        elif city == 'q':
            flag = False
        elif city == 'r':
            choose['province'] = 0
            flag = True
        else:
            print("编号格式错误")
            flag = True

    #已经选择了市，要选则区
    elif choose['city'] != 0 and choose['dist'] == 0:
        choose_province = int(choose['province'])
        choose_city = int(choose['city'])
        city_list = list(list(p_list.values())[choose_province - 1].keys())
        dist_list = list(p_list[province_list[choose_province - 1]][city_list[choose_city - 1]])
        for i,v in enumerate(dist_list,1):
            print("区/县：{name},编号：{num}".format(name=v, num=i))
        dist = input("请选择区/县[选q退出][选r返回上一级]：")
        if dist.isdigit():
            choose['dist'] = dist
            flag = True
        elif dist == 'q':
            flag = False
        elif dist == 'r':
            choose['city'] = 0
            flag = True
        else:
            print("编号格式错误")
            flag = True
    else:
        choose_province = int(choose['province'])
        choose_city = int(choose['city'])
        choose_dist = int(choose['dist'])
        city_list = list(list(p_list.values())[choose_province - 1].keys())
        dist_list = list(p_list[province_list[choose_province - 1]][city_list[choose_city - 1]])
        print("您已选择省：{province},市：{city},区/县{dist}".format(province= province_list[choose_province - 1],city=city_list[choose_city - 1],dist=dist_list[choose_dist -1 ]))
        flag = False

    return flag
#循环执行
while flag == True:
    flag = choose_province()

#结果
'''
您已选择省：浙江省,市：湖州市,区/县吴兴区
'''