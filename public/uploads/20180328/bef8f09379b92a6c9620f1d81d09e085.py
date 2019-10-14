#__author__:baobao
#date:2018/3/24

#和芒果差不多 #
dic = {"name":"kudoxi","age":"25","hobby":{"girl":{"name":"猪蹄子","age":"23"}},"is_handsome":True,1:"test"}
#print(dic)
#print(dic['name'])
#print(dic['hobby']['girl']['name'])
#############################定义字典两种方式
dic1 = {}
dic2 = dict()
dic2 = dict((("name","age"),))
dic3 = dict((["name","age"],))
dic3 = dict([["name","age"],])
#以上都可以识别出是字典，注意，“，”必须要有，不然会报错
#############################追加
dic["test2"] = 111
#############################修改
dic['name'] = 'katja'
#先去判断有没有salary这个键，如果有，则不修改，没有则增加
res0 = dic.setdefault('salary','7000')
#print(res0)
#并且这个方法有返回值，返回键对应的真实的值；如果字典里已经有了这个键，那就返回真实的值
res = dic.setdefault('name','kkk')
#print(res)
#############################查
#查有哪些键
#print(dic.keys())#dict_keys(['name', 'age', 'hobby', 'is_handsome', 1, 'test2', 'salary'])
#这些键的类型
#print(type(dic.keys()))#<class 'dict_keys'>
#把这些键用列表形式返回
#print(list(dic.keys()))#['name', 'age', 'hobby', 'is_handsome', 1, 'test2', 'salary']
#查看有哪些值
#print(dic.values())#dict_values(['katja', '25', {'girl': {'name': '猪蹄子', 'age': '23'}}, True, 'test', 111, '7000'])
#print(dic.items())#dict_items([('name', 'katja'), ('age', '25'), ('hobby', {'girl': {'name': '猪蹄子', 'age': '23'}}), ('is_handsome', True), (1, 'test'), ('test2', 111), ('salary', '7000')])
############################改
dic2.update(dic)#把dic里的键值对全部更新到dic2里，如果有重复，则覆盖原字典的值
#print(dic2)
############################删
del dic['test2'] #整个键值对被删除
#print(dic)
res = dic.pop("is_handsome")#把整个键值对删除,并返回删除的值
#print(res)
res2 = dic.popitem()#随机删除一组键值对
dic.clear()#把dic里的内容清空,dic这个变量还是存在的
#print(dic)
del dic #删除整个字典

##########################字典初始化
dic4 = dict.fromkeys(["host1","host2","host3"],'test')#{'host1': 'test', 'host2': 'test', 'host3': 'test'}
dic4['host1'] = 'abc'#修改
#print(dic4)
dic5 = dict.fromkeys(["host1","host2","host3"],['test1','test2'])#{'host1': ['test1', 'test2'], 'host2': ['test1', 'test2'], 'host3': ['test1', 'test2']}
dic5['host1'][1] = 'abc'#{'host1': ['test1', 'abc'], 'host2': ['test1', 'abc'], 'host3': ['test1', 'abc']}
#这样会改掉全部的值
#print(dic5)
#####################################嵌套
catelog = {
    "a":{
        "1":["aaaaa","bbbbbbb"],
        "2":["aaaaa2","bbbbbbb2"],
    },
    "b":{
        "2":["aaaaa3","bbbbbbb3"],
        "1":["aaaaa4","bbbbbbb4"],
    },
}
catelog["a"]["1"][1] = "ccccc"
print(catelog)
#############################排序
#默认根据键排序,数字根据数字排，字符串根据对应的ASCII码排
#sorted(catelog)
#items()方法将字典的元素转化为了元组，这里key参数对应的lambda表达式的意思则是选取元组中的第二个元素作为比较参数（如果写作key=lambda item:item[0]的话则是选取第一个元素作为比较对象，也就是key值作为比较对象
############################遍历
dic6 = {"name":"kudoxi","age":"25",1:"test"}
sorted(dic6.items(),key=lambda item:item[1])#根据值排序，注意，进行排序的值必须是字符串或者数字，布尔值和数组，字典，元祖都不可以
print(dic6)
for i in dic6:
    print(i,dic6[i]) #推荐这种方法

#for i,v in dic6.items():#有个转换过程，会慢
    #print(i,v)