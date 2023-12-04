list1=[12,11,4,54,656,77,9]
list2=[12,23,75,45,43,6]

if(len(list1) == len(list2)):
    print("Lists are of same length")
else:
    print("lists are not of same length")

if(sum(list2) == sum(list1)):
    print("sum is same")
else:
    print("sum is not same")
f=0
for i in list1:
    for j in list2:
        if(i == j):
            f=1

if (f==1):
    print("There are common elements")
else:
    print("no common elements")