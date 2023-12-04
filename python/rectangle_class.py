class rectangle :
    def __init__(self,length,breadth):
        self.length =length
        self.breadth =breadth
    def area(self):
        area = self.length * self.breadth
        return area
    def perimeter(self):
        perimeter = 2*(self.length + self.breadth)
        return perimeter

r1=rectangle(int(input("enter length of rectangle 1: ")),int(input("enter breadth of rectangle 1: ")))
r2=rectangle(int(input("enter length of rectangle 2: ")),int(input("enter breadth of rectangle 2: ")))
print("Area of rectangle 1 is: ",r1.area())
print("Perimeter of rectangle 1 is: ",r1.perimeter())
print("Area of rectangle 2 is: ",r2.area())
print("perimeter of rectangle 2 is: ",r2.perimeter())

if(r1.area() > r2.area()):
    print("Area of rectangle 1 is greater")
elif(r1.area() < r2.area()):
    print("Area of rectangle 2 is greater")
else:
    print("Rectangle 1 and Rectangle 2 is of same area")


if(r1.perimeter() > r2.perimeter()):
    print("perimeter of rectangle 1 is greater")
elif(r1.perimeter() < r2.perimeter()):
    print("perimeter of rectangle 2 is greater")
else:
    print("Rectangle 1 and Rectangle 2 is of same perimeter")