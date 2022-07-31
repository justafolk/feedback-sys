f = open("./computer_dept.txt", "r").read().split("\n")
for i in f:
    i = i.split(" ", 2)
    print(f"INSERT INTO courses(course_name, course_code, dept_code) VALUES('{i[-1]}', '{i[-2]}', 40);")
    
