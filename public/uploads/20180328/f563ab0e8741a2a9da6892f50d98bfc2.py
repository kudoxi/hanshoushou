#__author__:baobao
#date:2018/3/24

print("hello"*2)#重复输出字符串
print("hello"[2:])#从第二个开始取到最后
print("he" in "hello")#判断是否在字符串中
a = '123'
b = 'abc'
d = '444'
c = a + b
print(c)
#适用大量拼接
c = '*********'.join([a,b,d])               #【用的比较多】把列表以某个字符拼接成字符串，和php的implode差不多 123*********abc*********444,
print(c)
#########################字符串的内置方法
st = 'he\tllo kitty'
st.count('l')                               #【用的比较多】计算字符个数
st.capitalize()                             #字符串首字母大写
print(st.center(50,'-'))                    #【用的比较多】把字符串放到自定义数量的自定义字符中间 -------------------hello kitty--------------------
st.endswith('y')                            #判断是否以某个字符串为结尾，返回布尔值
st.startswith('he')                         #【用的比较多】判断是否以某个字符串为开始
st.expandtabs(tabsize=10)                   #设置字符串中的\t（tab键）相当于多少个空格
st2 = 'hello kitty'
st2.find('t')                                #【用的比较多】查找第一个字符，并返回在字符串中对应的索引值
st2.rfind("t")
st3 = 'hello {name},is {age}'
print(st3.format(name="kudoxi",age="25"))   #【用的比较多】格式化输出的另一种方法
st3.format_map({'name':"katja","age":"25"})#功能同上，只不过是以字典形式写
st4 = 'hello {{}} {name} '
print(st4.format(name="kudoxi"))            #如果字符串里本身就有大括号，想让其保留而不作为格式化
st4.index('t')                              #和find一样，只是如果查不到字符，index会报错，find不会报错，会返回-1
'123asn'.isalnum()                          #判断字符串是否包含数字和字母，返回布尔值
'00101'.isdecimal()                         #检查字符串是否只包含十进制字符
'123'.isdigit()                             #判断是否为整型数字类型的字符串
'ass'.isnumeric()                           #同上
'23ad'.isidentifier()                       #判断是不是非法变量名
'Sash'.islower()                            #是否全都是小写字母
'ASDK'.isupper()                            #是否全大写字母
' '.isspace()                               #判断是否全是空格
'Ssdh Tsad'.istitle()                       #判断每个单词的首字母是否都是大写
'Ssdh'.lower()                              #【用的比较多】大写全变为小写
'Ssdh'.upper()                              #【用的比较多】小写全变大写
'Ssdh'.swapcase()                           #把大写的变成小写，小写的变成大写
'Ssdh'.ljust(50,"-")                        #和center差不多，只是字符在左边
'Ssdh'.rjust(50,'-')                        #和center差不多，只是字符在右边
'   \tSsdh\n'.strip()                       #【用的比较多】去掉左右换行符和空格,和php的trim差不多
'   \tSsdh\n'.lstrip()                      #去掉左换行符和空格,和php的trim差不多
'   \tSsdh\n'.rstrip()                      #去掉右换行符和空格,和php的trim差不多
'hello kudoxi kudoxi'.replace('kudoxi','katja',1)#【用的比较多】替换旧内容换成新内容,第三个参数不填就默认全部替换，第三个参数控制替换个数
'hello kudoxi'.split(' ')                    #【用的比较多】通过某个字符来把字符串分割成列表，和php的explode差不多
'hello kudoxi kudoxi kudoxi'.rsplit(' ',1) #从右开始，分割1次
'hello kudoxi kudoxi kudoxi'.title()        #把所有首字母都大写化


