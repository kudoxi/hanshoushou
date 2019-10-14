name = input("what is your name")
age = input("how old are you")#input 接受的所有数据都是字符串，即使你输入的是数字
death_age = 100
print(type(age)) # str
print ("my name is ",name," and I am ",age," years old,I can still live for ",str(death_age - int(age))," years") #python里字符串和数字无法拼接在一起
#或者
print ("my name is "+name+" and I am "+age+" years old,I can still live for "+str(death_age - int(age))+" years")