#__author__:baobao
#date:2018/3/24
#测试
test1,test2 = [1,[1,2]]
#print(test1) 分别是1
#print(test2) [1,2]
price = [['test',2222],['Mac',10000],['book',20],['bike',200],['kindle',3000]]#商品列表
nun = []#存储商品编号的数组
cart = []#购物车
flag = False#判断是否终止程序的变量
#获得用户初始金额
save = input('please input your money:')
if save.isdigit():
    save = int(save)
else:
    print("invalid input")
    exit()
#定义方法
def user_choose():
    global save
    #把所有商品列出来
    for n,v in enumerate(price,1):#enumerate 展示n的索引，并且可以设置索引从第几开始，不写就默认从0开始
        print("商品编号:", n, ",商品名称:", v[0], ",商品价格:", v[1])
        nun.append(n)
    #让用户自己选
    choose = input("请选择商品编号[填q退出]：")
    #判断用户选择是否合法
    if choose.isdigit():
        choose = int(choose)
        is_in = choose in nun;
        if is_in == False:
            print("无该商品编号")
            flag = False
        else:
            #print("你选择了商品",price[choose-1])
            buy = price[choose-1]
            #把用户买的起的放进购物车
            if buy[1] <= save:
                save = save - buy[1]
                gnum = 1 #该商品的购买数量
                if len(cart) > 0:
                    #如果在购物车内已经存在了，就追加数量
                    for i,v in enumerate(cart):
                        if buy[0] == v[0]:
                            gnum = v[1] + 1
                            cart[i] = [buy[0],gnum]
                    #如果在购物车内不存在，就加入购物车
                    if gnum == 1:
                        cart.append([buy[0], gnum])
                else:
                    cart.append([buy[0], gnum])

                #购物车列出
                for i in cart:
                    print("您的购物车里已有%s件商品%s"%(i[1],i[0]))
                flag = False

            else:
                print("您的余额不足，金额还剩:%s"%save)
                flag = False
    elif choose == 'q':
        print("-----------------您已购买如下商品---------------")
        for i in cart:
            print("您的购物车里已有%s件商品%s" % (i[1], i[0]))
        print("您还剩余额：%s"%save,"元")
        flag = True
    else:
        print("invalid input")
        flag = False
    #结果输出
    return flag

#执行程序
while flag == False:
    flag = user_choose()

#结果
'''
-----------------您已购买如下商品---------------
您的购物车里已有2件商品test
您的购物车里已有1件商品Mac
您的购物车里已有3件商品book
您的购物车里已有1件商品bike
您的购物车里已有2件商品kindle
您还剩余额：1518 元
'''



