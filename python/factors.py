n=int(input("Enter the number\n"))
print("factors of ", n," are ",end="")

for i in range(1,int(n/2)+1):
    if(n%i == 0):
        print(i," ",end="")