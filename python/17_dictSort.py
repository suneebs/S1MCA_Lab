dict1={
    "Henna":12,
    "Jennifer":56,
    "Rachel":1,
    
    "Pheobe":44
}

# values=dict1.keys()
# values.sort()
values=list(dict1.keys())
values.sort()
# values.reverse()  
new_dict={i:dict1[i] for i in values }
print(new_dict)