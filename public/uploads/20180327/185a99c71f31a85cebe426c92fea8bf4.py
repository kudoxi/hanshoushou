a = 1
b = 1
while b < 10:
	c = 1
	str = ""
	while c <= b:
		print(c,'*',b,'=',c*b,end='')
		#if c == b:
		#	print(str)
		#	print(c,'*',b,'=',c*b,end='')
		#else:
		#	print(c,'*',b,'=',c*b,end='\n')
		c = c + 1
	print()
	b = b + 1
	
	