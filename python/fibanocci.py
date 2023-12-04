first =0
second =1

n =int(input("Enter the range\n"))
print(first)
print(second)
for i in range(n-2):
    temp=first
    first=second
    second=temp+first
    print(second)
