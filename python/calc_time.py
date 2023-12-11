class Time:
    def __init__(self,hr,min,sec):
        self.hr=hr
        self.min=min
        self.sec=sec

    def __add__(self,o):
        total_sec=3600*self.hr + 60*self.min + self.sec + o.hr *3600 + 60 *o.min + o.sec
        return Time(total_sec//3600,(total_sec%3600)//60,total_sec%60)
    def __str__(self):
        return f"{self.hr}:{self.min}:{self.sec}"
        
t1 =Time(int(input("enter hour of Time 1: ")),int(input("enter minute of Time 1: ")),int(input("enter seconds of Time 1: ")))
print()
t2 =Time(int(input("enter hour of Time 2: ")),int(input("enter minute of Time 2: ")),int(input("enter seconds of Time 2: ")))

t3=t1+t2
#t3 = t1.__add(t2)__

print(f"Total time is : {t3}")

        