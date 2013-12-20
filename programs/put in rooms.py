#put in rooms
names = ["Lin Lue", "John Brown", "James Raw","Lin Lue", "John Brown", "James Raw", "Mary Summer","rary Summer"]
def fill_rooms(input_list, cap):
    main = []
    while names != []:
        addme = names[0:cap]
        for i in range(cap):
            if names !=[]:
                names.pop(0)
            if names ==[]:
                break
        main.append(addme)
    return main
print fill_rooms(names, 5)

