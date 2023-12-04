str =input("Enter a string\n")
l= len(str)
newstr =str[l-1]+str[1:l-1]+str[0]
print(newstr)