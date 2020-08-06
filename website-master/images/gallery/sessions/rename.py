import os 

def main(): 
    i = 0
    base = str(os.getcwd()) + '\\'
      
    for filename in os.listdir(base):
        if "rename" in filename:
            continue
        dst = str(i) + ".JPG"
        src =base+ filename 
        dst =base+ dst 
         
        os.rename(src, dst) 
        i += 1

if __name__ == '__main__': 
      
    main() 
