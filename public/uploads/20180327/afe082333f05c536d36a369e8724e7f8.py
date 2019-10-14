#a>b and (c>d or (not f))
'''
短路原则：
条件一 and 条件二 
条件一为真才去判断条件二
条件一为假就直接不用判断了

条件一 or 条件二
条件一为真直接不用判断了
条件一为假才去判断条件二
'''
not not True or False
#输出True