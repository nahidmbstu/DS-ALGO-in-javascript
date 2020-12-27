a = 12
b = 28


def LCM(a, b):
    max = a if a > b else b
    while True:
        if (max % a == 0) and (max % b == 0):
            return max
        else:
            max += 1


print(LCM(a, b))
