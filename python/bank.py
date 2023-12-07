class bank :
    def __init__(self,acc,name,type,bal):
        self.acc =acc
        self.name=name
        self.type=type
        self.bal=bal
    def deposit(self,num):
        self.num =num
        self.bal = self.bal+self.num
        print("Account balance is :",self.bal)
    def withdraw(self,num):
        self.num=num
        if(self.num<self.bal):
            self.bal=self.bal-self.num
            print("Account balance is :",self.bal)
        else:
            print("not enough amount")
        
ob = bank(input('enter account  no: '),input('enter acount name: '),input('enter account type: '),int(input('enter account balance: ')))
print("What do you wanna do?")
ch=int(input("1.Deposit\n2.Withdraw\n3.exit\n"))
while ch == 1 or ch ==2 :
    if ch == 1 :
        ob.deposit(int(input("enter the value to deposit: ")))
    elif ch ==2:
        ob.withdraw(int(input("enter the value to withdraw: ")))
    ch =int(input("1.Deposit\n2.Withdraw\n3.exit\n"))
else:
    exit()