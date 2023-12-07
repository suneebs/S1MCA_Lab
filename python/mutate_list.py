class list:
    def __init__(self,list):
        self.list =list

    def add(self,ele):
        self.ele=ele
        self.list.append(self.ele)
        # print(self.list)
    
    def remove(self,ele):
        self.ele=ele
        self.list.remove(ele)
        # print(self.list)
    
    def display(self):
        print(self.list)

li =[1,2,3]
ob =list(li)

print("What do you wanna do?")
ch=int(input("1.Add element\n2.Delete element\n3.Display\n4.Exit\n"))
while ch == 1 or ch ==2 or ch ==3:
    if ch == 1 :
        ob.add(int(input("enter the element to add: ")))
    elif ch ==2:
        ob.remove(int(input("enter the element to remove: ")))
    elif ch ==3:
        ob.display()
    else:
        exit()

    ch =int(input("1.Add element\n2.Delete element\n3.Display\n4.Exit\n"))
# ob.add(5)
# ob.remove(3)
# ob.display()