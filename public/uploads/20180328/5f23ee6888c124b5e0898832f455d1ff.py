#__author__:baobao
#date:2018/3/18
#循环 continue
for i in range(3):
    print(i)

#range(1,3) 从1到3
#range(2,4)从2到4
#range(1,100,2)从1到100,2是步长，打印1，3，5，7，9
for i in range(1,100):
    if i > 70 or i < 50:
        break;#break后就不会判断else
    else:
        continue;
else:
    print(1)#for后面可以加else不可以加elif，只要for不被break打断就会执行这里的

while i<3:
    if i == 2:
        break;
    print(1)
else:
    print(2)#同上，只要不被break打断就会执行这里的