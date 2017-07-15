# Farooqui Conjecture LCM

# Modules

import math
from time import sleep 

# LCM Function

def LCM(num1, num2):

    stop = 0 # Set Variables
    
    # Find biggest value

    if(num1>num2):
        maximum = math.ceil(0.5 * num1)
        bigger = 1
    else:
        maximum = math.ceil(0.5 * num2)
        bigger = 2

    # Check if x goes into y

    if(bigger == 1):
        if(num1 % num2 == 0):
            x = num1
            print(x)
            stop = 1
    else:
        if(num2 % num1 == 0):
            x = num2
            print(x)
            stop = 1

    while(stop == 0): #Forever Loop

        if(num1 % maximum == 0 and num2 % maximum == 0): # Check for common divisor
            a = maximum
            break
        
        maximum = maximum - 1 # Decrease value of maximum

        if(maximum == 1):
            a = 1
            break

    # Output if not already calculated

    if(stop == 0): # If not already calculated
        if(a == 1): 
            print(num1 * num2) # x * y
        else:
            print((num1 / a) * (num2 / a) * (a)) # x * y * a

while(1 == 1): #Forever Loop

    # Variable Setup

    choicea = 0
    choiceb = 0

    # User Input

    ## Choice 1
        
    while(choicea == 0 or choicea < 1 or choicea % 1 != 0): 
        choicea = float(input("Choose you first interger.\n"))

    ## Choice 2

    while(choiceb == 0 or choiceb < 1 or choiceb % 1 != 0):
        choiceb = float(input("Choose you second interger.\n"))

    # Perform LCM Function
    
    LCM(choicea, choiceb)


        
    
