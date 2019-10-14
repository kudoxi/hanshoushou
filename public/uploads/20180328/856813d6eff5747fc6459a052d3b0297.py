#__author__:baobao
#date:2018/3/27
#能调用方法的一定是对象

########### r 只读模式 #########################
f = open('纯黑.txt','r',encoding='utf8')#打开
data = f.read()#操作 read默认取出所有的
data2 = f.read(5)#取5个字符，如果是中文也是5个中文字
#print(data)
f.close()#关闭 不关不安全

######## w 清空掉之后 从第一个字符开始写#########
f2 = open('纯黑2.txt','w',encoding='utf8') #创建这个对象时，清空文件
f2.write("hello world ,") #开始写
f2.write("\n") #开始写
f2.write("kudoxi") #开始写
f2.close()


########## a (append) 追加写入 ################
f3 = open('纯黑2.txt','a',encoding='utf8')
f3.write("\n123456") #开始写
f3.close()

########################操作####################
f4 = open('纯黑3.txt','r',encoding='utf8')

a = f4.readline() #取了第一行的内容
#print(f4.readline()) #取了第二行的内容
#print(f4.readline()) #取了第三行的内容
#每执行一次readline，指针都会移动到当前行的末尾
f4.close()

f5 = open('纯黑3.txt','r',encoding='utf8')
b = f5.readlines() #打印所有行，行以列表形式输出 #['\ufeff纯黑直播间: www.zhanqi.tv/666666 \n', '纯黑直播间1: www.zhanqi.tv/666666\n', '新浪微博: weibo.com/chunheigk \n', '新浪微博2: weibo.com/chunheigk\n', '纯黑零食店: chlsd.taobao.com\n', '新浪微博3: weibo.com/chunheigk']
for i in b:
    print(i)#会包括换行
    #print(i.strip())#去除换行
f5.close()

###############在特定行后面加自定义字符#####################
f6 = open('纯黑3.txt','r',encoding='utf8')
b = f6.readlines()#打开，存在内存变量里
n = 0
for i in b:
    n += 1
    if n == 4:
        i = ''.join([i.strip(),'iiiiiii'])
    #print(i.strip())
f6.close()
###############上面的readlines 把读取内容放入内存，会占用大量内存，其实可以直接循环##########
f7 = open('纯黑3.txt','r',encoding='utf8')
for i in f7:#for循环内部将f7对象做成了一个迭代器
    print(i.strip())#（用一个才取一个）拿出内容
    #迭代器工作原理
    # 文件对象 <-------迭代器[内存里]<--------请求文件内容里的一行
    #文件对象 ------->迭代器[内存里]-------->输出行
f7.close()
f8 = open('纯黑3.txt','r',encoding='utf8')
print(f8.tell()) #告诉你迭代器的游标当前指针位置（文件读到哪里了，像一个书签），默认是0，英文是2个一读，中文是3个一读
print(f8.read(4))
print(f8.tell())
print(f8.seek(0))#调整光标的位置到...

