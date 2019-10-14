#! usr/bin/python
#coding=utf-8   
import json
import os
def psw_user(user,psw):
	#先判断文件是否存在
	file_exist = os.path.exists('user_status.txt')
	if file_exist == False:
		dict = {"admin" : "123456","status":"useful"}
		fileObject = open('user_status.txt', 'w')
		json.dump(dict,fileObject)  
		fileObject.close()
	#然后判断用户是否被锁定
	fileObject = open('user_status.txt', 'r')
	data = fileObject.read()
	data = json.loads(data)
	fileObject.close()
	if data != [] and data['status'] == 'locked':
		print('you have been locked')
		return 3
	else:
		you_user = input('input your username')
		you_psw = input('input your password')
		if user == you_user and psw == you_psw:
			print('pass')
			return 1
		else:
			print('wrong')
			return 0

	
user = "admin"
psw = "123456"	
dict = {user : psw,"status":"useful"}
input_times = 1
#只可以输三次
while input_times <= 3:
	res = psw_user(user,psw)
	if res == 1:
		input_times = 4 #通过
	elif res == 3:
		input_times = 4 #被锁定
	else:
		input_times +=1 #初次输入次数太多
		
if input_times == 4 and res != 1:
	dict['status'] = 'locked' #锁定用户

fileObject = open('user_status.txt', 'w')
json.dump(dict,fileObject)  
fileObject.close()  
	