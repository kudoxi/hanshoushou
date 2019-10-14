def guess(guess_num):
	you_gess = input('猜我年龄')
	you_gess = int(you_gess)
	if my_age == you_gess:
		print('yes')
		return 1
	elif you_gess > my_age:
		print('guess smaller')
		return 0
	else:
		print('guess bigger')
		return 0

my_age = 24
guess_num = 1
while guess_num <= 3:
	guess_res = guess(guess_num)
	if guess_res == 1:
		guess_num = 4
	else:
		guess_num +=1
	
if guess_num == 4 and guess_res == 0:
	print('you have no chance')

