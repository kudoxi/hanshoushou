num = 11
while num <= 10:
	num += 1
	if num == 3:
		continue
	if num == 4:
		print('4')
		break
else:
	#不满足条件或程序报错
	print('wrong')
	print() # 等价于print(end = "\n") 自动换行
	print(end = "\n")