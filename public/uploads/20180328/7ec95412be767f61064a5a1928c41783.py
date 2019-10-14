arr = []
a = 1
b = 2
c = 3
arr.insert(0,a)
arr.insert(0,b)
arr.insert(0,c)
max = 0;
for item in arr:
	if item > max:
		max = item

min = max;		
for item in arr:
	if item < max:
		min = item
print('max',max)
print('min',min)