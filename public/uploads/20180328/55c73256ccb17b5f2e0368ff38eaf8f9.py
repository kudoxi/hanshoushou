#__author__:baobao
#date:2018/3/17
#格式化输出
#占位符
#%s = string 字符串
#%d = digit 整数
#%f = float 浮点数
name = input("Name:")
age = input("Age:")
job = input("Job:")
salary = input("Salary:")
#手动检验输入的字符串是不是数字字符串
if salary.isdigit() and age.isdigit():
    salary = int(salary)
    age = int(age)
else:
    exit("年龄和工资必须是数字")

msg = '''
-------- info of %s -------
Name:%s
Age:%d
Job:%s
Salary:%f
---------end---------
'''%(name,name,age,job,salary)
#如果age和salary不是数字，%d会验证报错,%f会给数字加6位精度

print(msg)

'''
打印结果：
-------- info of kudoxi -------
Name:kudoxi
Age:25
Job:IT
Salary:7000.000000
---------end---------
'''