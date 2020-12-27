a = "DOG"

def isPalindrom(s):
    start = 0 
    end = len(s) - 1
    for i in range(len(s)):
        if (end >= start):
            if (s[start] != s[end]):
                return False
            start = start + 1  
            end = end -1    
    return True
        
    
print(isPalindrom(a))    
